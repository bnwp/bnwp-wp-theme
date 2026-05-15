<?php
/**
 * BNWP WikiConnect theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

define('BNWP_THEME_VERSION', '1.1.0');



function bnwp_current_language() {
    $lang = isset($_GET['lang']) ? sanitize_key(wp_unslash($_GET['lang'])) : '';
    return $lang === 'en' ? 'en' : 'bn';
}

function bnwp_lang_arg($url, $lang = null) {
    $lang = $lang ? $lang : bnwp_current_language();
    if ($lang === 'en') {
        return add_query_arg('lang', 'en', $url);
    }
    return remove_query_arg('lang', $url);
}

function bnwp_get_avatar_placeholder() {
    return get_template_directory_uri() . '/assets/uploads/avatar-placeholder.png';
}

function bnwp_clean_image_url($url, $fallback = '') {
    $url = trim((string) $url);
    if ($url === '' || $url === '#') {
        return $fallback ? $fallback : bnwp_get_avatar_placeholder();
    }
    if (!preg_match('#^https?://#i', $url) && strpos($url, '/') !== 0) {
        return $fallback ? $fallback : bnwp_get_avatar_placeholder();
    }
    return $url;
}

function bnwp_translation_url($target_lang) {
    $target_lang = $target_lang === 'en' ? 'en' : 'bn';

    if (is_singular()) {
        $post = get_queried_object();
        if ($post && !empty($post->post_name)) {
            $type = get_post_type($post);
            $slug = $post->post_name;
            $target_slug = $target_lang === 'en'
                ? (substr($slug, -3) === '-en' ? $slug : $slug . '-en')
                : preg_replace('/-en$/', '', $slug);

            $match = get_page_by_path($target_slug, OBJECT, $type);
            if ($match) {
                return get_permalink($match);
            }
        }
    }

    if (is_post_type_archive('project')) {
        return bnwp_lang_arg(get_post_type_archive_link('project'), $target_lang);
    }
    if (is_post_type_archive('persona') || is_tax('team')) {
        $base = is_tax('team') ? get_term_link(get_queried_object()) : get_post_type_archive_link('persona');
        return !is_wp_error($base) ? bnwp_lang_arg($base, $target_lang) : bnwp_lang_arg(home_url('/persona/'), $target_lang);
    }
    if (is_home()) {
        return bnwp_lang_arg(home_url('/posts/'), $target_lang);
    }

    return bnwp_lang_arg(home_url('/'), $target_lang);
}

function bnwp_language_switcher() {
    $current = bnwp_current_language();
    $target  = $current === 'en' ? 'bn' : 'en';

    $current_label = $current === 'en' ? 'English' : 'বাংলা';
    $target_label  = $target === 'en' ? 'English' : 'বাংলা';

    ?>
    <div class="border-start border-end" id="langSwitcher">
        <a
            class="btn nav-link px-2"
            href="<?php echo esc_url(bnwp_translation_url($target)); ?>"
            aria-label="<?php echo esc_attr('Switch to ' . $target_label); ?>"
            title="<?php echo esc_attr('Switch to ' . $target_label); ?>"
        >
            <i class="bi bi-translate me-1"></i>
            <span class="d-none d-md-inline">
                <?php echo esc_html($current_label); ?>
            </span>
        </a>
    </div>
    <?php
}

function bnwp_filter_main_query_by_language($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_post_type_archive(array('project', 'persona')) || $query->is_tax('team') || $query->is_home() || $query->is_search()) {
        $meta_query = (array) $query->get('meta_query');
        $meta_query[] = array(
            'key' => '_bnwp_language',
            'value' => bnwp_current_language(),
            'compare' => '=',
        );
        $query->set('meta_query', $meta_query);
    }
}
add_action('pre_get_posts', 'bnwp_filter_main_query_by_language');

function bnwp_setup() {
    load_theme_textdomain('bnwp', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo', array('height' => 120, 'width' => 360, 'flex-height' => true, 'flex-width' => true));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bnwp'),
    ));
}
add_action('after_setup_theme', 'bnwp_setup');

function bnwp_enqueue_assets() {
    wp_enqueue_style('bnwp-bootstrap-mod', get_template_directory_uri() . '/assets/css/bootstrap5.3.mod.css', array(), BNWP_THEME_VERSION);
    wp_enqueue_style('bnwp-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3');
    wp_enqueue_style('bnwp-theme-utils', get_template_directory_uri() . '/assets/css/theme.css', array('bnwp-bootstrap-mod'), BNWP_THEME_VERSION);
    wp_enqueue_style('bnwp-main-style', get_template_directory_uri() . '/assets/css/style.css', array('bnwp-theme-utils'), BNWP_THEME_VERSION);
    wp_enqueue_style('bnwp-style', get_stylesheet_uri(), array('bnwp-main-style'), BNWP_THEME_VERSION);

    wp_enqueue_script('bnwp-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('bnwp-colormode', get_template_directory_uri() . '/assets/js/colormode.js', array(), BNWP_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'bnwp_enqueue_assets');

function bnwp_register_content_types() {
    register_post_type('project', array(
        'labels' => array(
            'name' => __('Projects', 'bnwp'),
            'singular_name' => __('Project', 'bnwp'),
            'add_new_item' => __('Add New Project', 'bnwp'),
            'edit_item' => __('Edit Project', 'bnwp'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects', 'with_front' => false),
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        'show_in_rest' => true,
    ));

    register_post_type('persona', array(
        'labels' => array(
            'name' => __('Team Members', 'bnwp'),
            'singular_name' => __('Team Member', 'bnwp'),
            'add_new_item' => __('Add New Team Member', 'bnwp'),
            'edit_item' => __('Edit Team Member', 'bnwp'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'persona', 'with_front' => false),
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        'show_in_rest' => true,
    ));

    register_taxonomy('team', array('persona'), array(
        'labels' => array(
            'name' => __('Teams', 'bnwp'),
            'singular_name' => __('Team', 'bnwp'),
        ),
        'public' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'teams', 'with_front' => false),
        'show_in_rest' => true,
    ));

    $meta_keys = array(
        '_bnwp_language', '_bnwp_source_file', '_bnwp_logo', '_bnwp_cover', '_bnwp_wiki', '_bnwp_lead',
        '_bnwp_name', '_bnwp_role', '_bnwp_username', '_bnwp_location', '_bnwp_email', '_bnwp_img', '_bnwp_bio', '_bnwp_user'
    );
    foreach ($meta_keys as $key) {
        register_post_meta('', $key, array(
            'type' => 'string',
            'single' => true,
            'show_in_rest' => true,
            'sanitize_callback' => 'sanitize_text_field',
            'auth_callback' => function() { return current_user_can('edit_posts'); },
        ));
    }
}
add_action('init', 'bnwp_register_content_types');

function bnwp_flush_rewrites() {
    bnwp_register_content_types();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'bnwp_flush_rewrites');

function bnwp_get_meta($key, $post_id = null, $default = '') {
    $post_id = $post_id ? $post_id : get_the_ID();
    $value = get_post_meta($post_id, $key, true);
    return $value !== '' ? $value : $default;
}

function bnwp_reading_time($post_id = null) {
    $post_id = $post_id ? $post_id : get_the_ID();
    $content = wp_strip_all_tags(get_post_field('post_content', $post_id));
    $words = preg_split('/\s+/u', trim($content));
    $count = $content ? count($words) : 0;
    return max(1, (int) ceil($count / 200));
}

function bnwp_primary_menu_fallback() {
    $lang = bnwp_current_language();
    $labels = $lang === 'en'
        ? array('home' => 'Home', 'about' => 'About', 'news' => 'Newsroom', 'blog' => 'Blog', 'members' => 'Members', 'projects' => 'Projects')
        : array('home' => 'নীড়', 'about' => 'পরিচিতি', 'news' => 'বার্তাকক্ষ', 'blog' => 'ব্লগ', 'members' => 'সদস্য', 'projects' => 'প্রকল্প');
    $about = $lang === 'en' ? home_url('/about-en/') : home_url('/about/');
    $news = $lang === 'en' ? home_url('/newsroom-en/') : home_url('/newsroom/');
    $posts = $lang === 'en' ? home_url('/posts-en/') : home_url('/posts/');
    ?>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(bnwp_lang_arg(home_url('/'), $lang)); ?>"><?php echo esc_html($labels['home']); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url($about); ?>"><?php echo esc_html($labels['about']); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url($news); ?>"><?php echo esc_html($labels['news']); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url($posts); ?>"><?php echo esc_html($labels['blog']); ?></a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo esc_html($labels['members']); ?></a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo esc_url(bnwp_lang_arg(get_post_type_archive_link('persona'), $lang)); ?>"><?php echo $lang === 'en' ? 'All Members' : 'সকল সদস্য'; ?></a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url(bnwp_lang_arg(home_url('/teams/cot/'), $lang)); ?>"><?php echo $lang === 'en' ? 'Core Team' : 'মূল দল'; ?></a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url(bnwp_lang_arg(home_url('/teams/technical/'), $lang)); ?>"><?php echo $lang === 'en' ? 'Technical Team' : 'কারিগরি ও প্রযুক্তি দল'; ?></a></li>
                <li><a class="dropdown-item" href="<?php echo esc_url(bnwp_lang_arg(home_url('/teams/jury/'), $lang)); ?>"><?php echo $lang === 'en' ? 'Jury Team' : 'পর্যালোচক দল'; ?></a></li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(bnwp_lang_arg(get_post_type_archive_link('project'), $lang)); ?>"><?php echo esc_html($labels['projects']); ?></a></li>
    </ul>
    <?php
}

function bnwp_add_meta_boxes() {
    add_meta_box('bnwp_project_details', __('Project Details', 'bnwp'), 'bnwp_project_meta_box', 'project', 'normal', 'high');
    add_meta_box('bnwp_persona_details', __('Team Member Details', 'bnwp'), 'bnwp_persona_meta_box', 'persona', 'normal', 'high');
    add_meta_box('bnwp_post_details', __('BNWP Post Details', 'bnwp'), 'bnwp_post_meta_box', 'post', 'side', 'default');
}
add_action('add_meta_boxes', 'bnwp_add_meta_boxes');

function bnwp_input_row($label, $name, $value, $type = 'text') {
    printf(
        '<p><label style="font-weight:600;display:block;margin-bottom:4px;" for="%1$s">%2$s</label><input class="widefat" type="%4$s" id="%1$s" name="%1$s" value="%3$s"></p>',
        esc_attr($name),
        esc_html($label),
        esc_attr($value),
        esc_attr($type)
    );
}

function bnwp_project_meta_box($post) {
    wp_nonce_field('bnwp_save_meta', 'bnwp_meta_nonce');
    bnwp_input_row('Logo URL', '_bnwp_logo', bnwp_get_meta('_bnwp_logo', $post->ID));
    bnwp_input_row('Cover URL', '_bnwp_cover', bnwp_get_meta('_bnwp_cover', $post->ID));
    bnwp_input_row('Wiki URL', '_bnwp_wiki', bnwp_get_meta('_bnwp_wiki', $post->ID));
    bnwp_input_row('Lead', '_bnwp_lead', bnwp_get_meta('_bnwp_lead', $post->ID));
    bnwp_input_row('Language', '_bnwp_language', bnwp_get_meta('_bnwp_language', $post->ID, 'bn'));
}

function bnwp_persona_meta_box($post) {
    wp_nonce_field('bnwp_save_meta', 'bnwp_meta_nonce');
    bnwp_input_row('Display Name', '_bnwp_name', bnwp_get_meta('_bnwp_name', $post->ID));
    bnwp_input_row('Role', '_bnwp_role', bnwp_get_meta('_bnwp_role', $post->ID));
    bnwp_input_row('Wiki Username', '_bnwp_username', bnwp_get_meta('_bnwp_username', $post->ID));
    bnwp_input_row('Location', '_bnwp_location', bnwp_get_meta('_bnwp_location', $post->ID));
    bnwp_input_row('Email', '_bnwp_email', bnwp_get_meta('_bnwp_email', $post->ID), 'email');
    bnwp_input_row('Image URL', '_bnwp_img', bnwp_get_meta('_bnwp_img', $post->ID));
    bnwp_input_row('Short Bio', '_bnwp_bio', bnwp_get_meta('_bnwp_bio', $post->ID));
    bnwp_input_row('Language', '_bnwp_language', bnwp_get_meta('_bnwp_language', $post->ID, 'bn'));
}

function bnwp_post_meta_box($post) {
    wp_nonce_field('bnwp_save_meta', 'bnwp_meta_nonce');
    bnwp_input_row('Author Wiki Username', '_bnwp_user', bnwp_get_meta('_bnwp_user', $post->ID));
    bnwp_input_row('Language', '_bnwp_language', bnwp_get_meta('_bnwp_language', $post->ID, 'bn'));
}

function bnwp_save_post_meta($post_id) {
    if (!isset($_POST['bnwp_meta_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['bnwp_meta_nonce'])), 'bnwp_save_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    $keys = array('_bnwp_language', '_bnwp_logo', '_bnwp_cover', '_bnwp_wiki', '_bnwp_lead', '_bnwp_name', '_bnwp_role', '_bnwp_username', '_bnwp_location', '_bnwp_email', '_bnwp_img', '_bnwp_bio', '_bnwp_user');
    foreach ($keys as $key) {
        if (isset($_POST[$key])) {
            $value = sanitize_text_field(wp_unslash($_POST[$key]));
            update_post_meta($post_id, $key, $value);
        }
    }
}
add_action('save_post', 'bnwp_save_post_meta');

function bnwp_nav_menu_css_class($classes, $item, $args, $depth) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        $classes[] = 'nav-item';
        if (in_array('menu-item-has-children', $classes, true)) {
            $classes[] = 'dropdown';
        }
    }
    return array_unique($classes);
}
add_filter('nav_menu_css_class', 'bnwp_nav_menu_css_class', 10, 4);

function bnwp_nav_menu_link_attributes($atts, $item, $args, $depth) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        $atts['class'] = trim(($atts['class'] ?? '') . ($depth > 0 ? ' dropdown-item' : ' nav-link'));
        if (in_array('menu-item-has-children', $item->classes, true) && $depth === 0) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['href'] = '#';
            $atts['role'] = 'button';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'bnwp_nav_menu_link_attributes', 10, 4);

function bnwp_nav_menu_submenu_css_class($classes, $args, $depth) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        $classes[] = 'dropdown-menu';
    }
    return array_unique($classes);
}
add_filter('nav_menu_submenu_css_class', 'bnwp_nav_menu_submenu_css_class', 10, 3);