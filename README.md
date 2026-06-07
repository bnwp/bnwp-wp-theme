# BNWP WikiConnect WordPress Theme

A custom WordPress theme for the **Bangla WikiConnect** website.

BNWP WikiConnect is a Bengali-first WordPress theme built for a Wikimedia/community platform. It supports project pages, team/persona profiles, simple Bengali/English content filtering, dark/light mode, custom archive templates, and a structured responsive homepage.

![BNWP WikiConnect WordPress Theme](https://raw.githubusercontent.com/md-muqtadir-fuad/bnwp-wp-theme/refs/heads/master/assets/uploads/bnwp-theme.png)

---

<a id="table-of-contents"></a>
## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Theme Information](#theme-information)
- [Installation](#installation)
  - [Install from WordPress Admin](#install-from-wordpress-admin)
  - [Install Manually](#install-manually)
- [Basic Theme Structure](#basic-theme-structure)
- [Important Files](#important-files)
- [Content Model](#content-model)
  - [Projects](#projects)
  - [Team Members / Personas](#team-members-personas)
  - [Team Taxonomy](#team-taxonomy)
- [Custom Meta Fields](#custom-meta-fields)
  - [Project Details](#project-details)
  - [Team Member Details](#team-member-details)
  - [Post Details](#post-details)
- [Language System](#language-system)
- [Required Pages](#required-pages)
- [Image Rules](#image-rules)
- [Development Workflow](#development-workflow)
- [Packaging Rules](#packaging-rules)
- [Troubleshooting](#troubleshooting)
  - [Theme does not appear in WordPress](#theme-does-not-appear-in-wordpress)
  - [Archive pages show 404](#archive-pages-show-404)
  - [Projects are not showing on the homepage](#projects-are-not-showing-on-the-homepage)
  - [Core team members are not showing on the homepage](#core-team-members-are-not-showing-on-the-homepage)
  - [Changes are not visible](#changes-are-not-visible)
- [Known Limitations](#known-limitations)
- [License Notice](#license-notice)
- [Repository Rules](#repository-rules)

---

<a id="features"></a>
## Features

- Bengali-first design with optional English content
- Custom post type for Projects
- Custom post type for Team Members / Personas
- Team taxonomy for grouping members
- Project and member archive pages
- Single project and single member profile pages
- Homepage sections for hero, stats, projects, core team, Facebook feed, and partners
- Simple `?lang=en` language switching
- Dark/light mode toggle
- Bootstrap 5.3 based responsive layout
- Custom metadata fields for projects, members, and posts

---

<a id="requirements"></a>
## Requirements

| Requirement | Version |
|---|---|
| WordPress | 6.0 or later |
| Tested up to | 6.5 |
| PHP | 7.4 or later |

Main dependencies:

- Bootstrap 5.3
- Bootstrap Icons
- WordPress Core APIs

---

<a id="theme-information"></a>
## Theme Information

| Item | Details |
|---|---|
| Theme Name | BNWP WikiConnect |
| Theme Folder | `bnwp-wikiconnect` |
| Text Domain | `bnwp` |
| Version | `1.1.0` |
| Primary Language | Bengali |
| Secondary Language | English |

---

<a id="installation"></a>
## Installation

<a id="install-from-wordpress-admin"></a>
### Install from WordPress Admin

1. Go to:

```text
Appearance → Themes → Add New → Upload Theme
```

2. Upload:

```text
bnwp-wikiconnect.zip
```

3. Click:

```text
Install Now → Activate
```

4. Refresh permalinks:

```text
Settings → Permalinks → Save Changes
```

<a id="install-manually"></a>
### Install Manually

Upload the theme folder to:

```text
wp-content/themes/bnwp-wikiconnect/
```

Then activate it from:

```text
Appearance → Themes
```

Correct path:

```text
wp-content/themes/bnwp-wikiconnect/style.css
```

Incorrect nested path:

```text
wp-content/themes/bnwp-wikiconnect/bnwp-wikiconnect/style.css
```

---

<a id="basic-theme-structure"></a>
## Basic Theme Structure

```text
bnwp-wikiconnect/
├── 404.php
├── archive-persona.php
├── archive-project.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page-contact.php
├── page-posts.php
├── page-search.php
├── search.php
├── single-persona.php
├── single-project.php
├── single.php
├── style.css
├── taxonomy-team.php
└── assets/
    ├── css/
    ├── js/
    └── uploads/
```

---

<a id="important-files"></a>
## Important Files

| File | Purpose |
|---|---|
| `style.css` | WordPress theme header and final CSS overrides |
| `functions.php` | Theme setup, assets, post types, taxonomies, meta fields, language logic |
| `header.php` | Logo, navigation, language switcher, dark/light toggle, search |
| `footer.php` | Footer logo, buttons, license notice, `wp_footer()` |
| `front-page.php` | Homepage layout |
| `archive-project.php` | Project archive page |
| `single-project.php` | Single project page |
| `archive-persona.php` | Team member archive page |
| `single-persona.php` | Single team member profile |
| `taxonomy-team.php` | Team-based member listing |

---

<a id="content-model"></a>
## Content Model

<a id="projects"></a>
### Projects

Custom post type:

```text
project
```

Archive URL:

```text
/projects/
```

Used for:

- homepage project cards
- project archive page
- single project pages

<a id="team-members-personas"></a>
### Team Members / Personas

Custom post type:

```text
persona
```

Archive URL:

```text
/persona/
```

Used for:

- homepage core team section
- member archive page
- team pages
- single member profiles

<a id="team-taxonomy"></a>
### Team Taxonomy

Taxonomy:

```text
team
```

Attached to:

```text
persona
```

Important team slugs:

| Team | Slug | URL |
|---|---|---|
| Core Team | `cot` | `/teams/cot/` |
| Technical Team | `technical` | `/teams/technical/` |
| Jury / Review Team | `jury` | `/teams/jury/` |

The homepage core team section shows only members assigned to:

```text
cot
```

---

<a id="custom-meta-fields"></a>
## Custom Meta Fields

<a id="project-details"></a>
### Project Details

Admin path:

```text
Projects → Add New/Edit Project → Project Details
```

| Field | Meta Key |
|---|---|
| Logo URL | `_bnwp_logo` |
| Cover URL | `_bnwp_cover` |
| Wiki URL | `_bnwp_wiki` |
| Lead | `_bnwp_lead` |
| Language | `_bnwp_language` |

<a id="team-member-details"></a>
### Team Member Details

Admin path:

```text
Team Members → Add New/Edit Team Member → Team Member Details
```

| Field | Meta Key |
|---|---|
| Display Name | `_bnwp_name` |
| Role | `_bnwp_role` |
| Wiki Username | `_bnwp_username` |
| Location | `_bnwp_location` |
| Email | `_bnwp_email` |
| Image URL | `_bnwp_img` |
| Short Bio | `_bnwp_bio` |
| Language | `_bnwp_language` |

Do not add `@` before the Wiki Username. The theme adds it automatically.

<a id="post-details"></a>
### Post Details

Admin path:

```text
Posts → Add New/Edit Post → BNWP Post Details
```

| Field | Meta Key |
|---|---|
| Author Wiki Username | `_bnwp_user` |
| Language | `_bnwp_language` |

Related posts on a persona page are matched by:

```text
persona _bnwp_username = post _bnwp_user
```

---

<a id="language-system"></a>
## Language System

The theme uses a simple query/meta-based language system. It is not a full multilingual plugin.

Default language:

```text
bn
```

English language URL format:

```text
?lang=en
```

Examples:

```text
/projects/           → Bengali projects
/projects/?lang=en   → English projects
/persona/            → Bengali team members
/persona/?lang=en    → English team members
```

The language meta key is:

```text
_bnwp_language
```

For translated pages, the theme expects slug pairs like:

```text
/about/
/about-en/
```

---

<a id="required-pages"></a>
## Required Pages

Create or verify these pages after activating the theme.

| Page | Suggested Slug | Template |
|---|---|---|
| Home | `/` | `front-page.php` |
| Contact | `/contact/` | `page-contact.php` |
| Posts / Blog | `/posts/` | `page-posts.php` |
| Search | `/search/` | `page-search.php` |
| About | `/about/` | normal page |
| Newsroom | `/newsroom/` | normal page |

Optional English versions can use `-en` slugs:

```text
/about-en/
/newsroom-en/
/posts-en/
```

---

<a id="image-rules"></a>
## Image Rules

Use direct image URLs for:

```text
_bnwp_logo
_bnwp_cover
_bnwp_img
```

Recommended:

```text
https://upload.wikimedia.org/wikipedia/commons/....png
```

Acceptable:

```text
https://commons.wikimedia.org/wiki/Special:FilePath/File_Name.png
```

Do not use normal file pages:

```text
https://commons.wikimedia.org/wiki/File:File_Name.png
```

For WordPress-hosted images, upload through:

```text
Media → Add New → Copy URL
```

---

<a id="development-workflow"></a>
## Development Workflow

Recommended branches:

```text
master → stable/live-ready
test   → experimental/development
```

Typical workflow:

```bash
git checkout test
git add .
git commit -m "Update theme"
git push
```

After testing:

```bash
git checkout master
git merge test
git push
```

---

<a id="packaging-rules"></a>
## Packaging Rules

The WordPress ZIP must contain exactly one top-level theme folder.

Correct:

```text
bnwp-wikiconnect.zip
└── bnwp-wikiconnect/
    ├── style.css
    ├── functions.php
    └── ...
```

Incorrect:

```text
bnwp-wikiconnect.zip
└── bnwp-wikiconnect/
    └── bnwp-wikiconnect/
        ├── style.css
        └── functions.php
```

Do not include:

```text
wp-admin/
wp-includes/
wp-content/plugins/
wp-content/uploads/
wp-config.php
node_modules/
.git/
.DS_Store
Thumbs.db
```

---

<a id="troubleshooting"></a>
## Troubleshooting

<a id="theme-does-not-appear-in-wordpress"></a>
### Theme does not appear in WordPress

Check that this file exists:

```text
wp-content/themes/bnwp-wikiconnect/style.css
```

Also confirm that `style.css` contains a valid WordPress theme header.

<a id="archive-pages-show-404"></a>
### Archive pages show 404

This applies to:

```text
/projects/
/persona/
/teams/cot/
```

Refresh permalinks:

```text
Settings → Permalinks → Save Changes
```

<a id="projects-are-not-showing-on-the-homepage"></a>
### Projects are not showing on the homepage

Check each Project post:

```text
Status: Published
Language: bn or en
Logo URL: valid image URL
Lead: not empty
```

<a id="core-team-members-are-not-showing-on-the-homepage"></a>
### Core team members are not showing on the homepage

Check each Team Member post:

```text
Status: Published
Language: bn or en
Team slug: cot
Image URL: valid image URL
```

<a id="changes-are-not-visible"></a>
### Changes are not visible

Clear:

```text
SpeedyCache
Browser cache
Hosting cache
Cloudflare cache, if connected
```

Then hard refresh the browser:

```text
Windows/Linux: Ctrl + F5
Mac: Cmd + Shift + R
```

---

<a id="known-limitations"></a>
## Known Limitations

- Language support is query/meta-based, not a full multilingual system.
- Translation matching depends on slug pairs such as `about` and `about-en`.
- Project and member image fields are plain text inputs.
- Some homepage sections are hard-coded in `front-page.php`.
- Facebook feed depends on Facebook's external script.
- Bootstrap Icons and Bootstrap JavaScript are loaded from CDN.

---

<a id="license-notice"></a>
## License Notice

The footer notice states that image and video content are released under CC BY-SA 4.0 unless a separate license is mentioned. Text content is treated as intellectual property of the site.

The footer year is generated dynamically:

```php
<?php echo esc_html(date_i18n('Y')); ?>
```

---

<a id="repository-rules"></a>
## Repository Rules

This repository should contain only the custom WordPress theme source.

Do not commit:

```text
full WordPress installation
database files
wp-config.php
plugin folders
private upload folders
server credentials
hosting credentials
```
