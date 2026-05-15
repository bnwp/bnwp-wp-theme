<?php get_header(); ?>
<div class="container text-center py-5">
<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/uploads/error_404.svg'); ?>" alt="404" style="max-width:360px;">
<h1>পৃষ্ঠা পাওয়া যায়নি</h1>
<p>আপনি যে পৃষ্ঠাটি খুঁজছেন সেটি নেই বা সরানো হয়েছে।</p>
<a class="btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>">নীড়ে ফিরুন</a>
</div>
<?php get_footer(); ?>
