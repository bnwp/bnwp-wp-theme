<a id="bnwpbn"></a>
# বিএনডব্লিউপি উইকিসংযোগ ওয়ার্ডপ্রেস থিম

**বিএনডব্লিউপি উইকিসংযোগ** একটি কাস্টম ওয়ার্ডপ্রেস থিম। এটি বাংলা উইকিসংযোগ ওয়েবসাইটের জন্য তৈরি। থিমটিতে বাংলা-প্রথম নকশা, প্রকল্প পৃষ্ঠা, সদস্য বা পারসোনা প্রোফাইল, বাংলা-ইংরেজি ভাষা বদল, আলো-অন্ধকার মোড, কাস্টম আর্কাইভ, কাস্টম মেটা ফিল্ড এবং প্রতিক্রিয়াশীল বিন্যাস রয়েছে।

![উইকিসংযোগ ওয়ার্ডপ্রেস থিম](https://raw.githubusercontent.com/md-muqtadir-fuad/bnwp-wp-theme/refs/heads/master/assets/uploads/bnwp-theme.png)

## সূচিপত্র

[বিএনডব্লিউপি উইকিসংযোগ ওয়ার্ডপ্রেস থিম](#bnwpbn)

&nbsp;&nbsp;[১. সংক্ষিপ্ত পরিচিতি](#bn1)  
&nbsp;&nbsp;[২. থিম কোথায় থাকবে](#bn2)  
&nbsp;&nbsp;[৩. থিমের মূল ফাইল কাঠামো](#bn3)  
&nbsp;&nbsp;[৪. গুরুত্বপূর্ণ থিম ফাইল](#bn4)  
&nbsp;&nbsp;&nbsp;&nbsp;[`style.css`](#bn41)  
&nbsp;&nbsp;&nbsp;&nbsp;[`functions.php`](#bn42)  
&nbsp;&nbsp;&nbsp;&nbsp;[`header.php`](#bn43)  
&nbsp;&nbsp;&nbsp;&nbsp;[`footer.php`](#bn44)  
&nbsp;&nbsp;&nbsp;&nbsp;[`front-page.php`](#bn45)  
&nbsp;&nbsp;&nbsp;&nbsp;[`archive-project.php`](#bn46)  
&nbsp;&nbsp;&nbsp;&nbsp;[`single-project.php`](#bn47)  
&nbsp;&nbsp;&nbsp;&nbsp;[`archive-persona.php`](#bn48)  
&nbsp;&nbsp;&nbsp;&nbsp;[`single-persona.php`](#bn49)  
&nbsp;&nbsp;[৫. অ্যাসেট লোডের ক্রম](#bn5)  
&nbsp;&nbsp;[৬. কাস্টম পোস্ট টাইপ](#bn6)  
&nbsp;&nbsp;[৭. দল ট্যাক্সোনমি](#bn7)  
&nbsp;&nbsp;[৮. কাস্টম মেটা ফিল্ড](#bn8)  
&nbsp;&nbsp;[৯. ভাষা ব্যবস্থা](#bn9)  
&nbsp;&nbsp;[১০. ভাষা বদল যুক্তি](#bn10)  
&nbsp;&nbsp;[১১. ন্যাভিগেশন](#bn11)  
&nbsp;&nbsp;[১২. হেডার](#bn12)  
&nbsp;&nbsp;[১৩. ফুটার](#bn13)  
&nbsp;&nbsp;[১৪. আলো/অন্ধকার মোড](#bn14)  
&nbsp;&nbsp;[১৫. হোমপেজ কাঠামো](#bn15)  
&nbsp;&nbsp;[১৬. প্রকল্প আর্কাইভ ও একক প্রকল্প](#bn16)  
&nbsp;&nbsp;[১৭. সদস্য আর্কাইভ ও একক সদস্য](#bn17)  
&nbsp;&nbsp;[১৮. সিএসএস ফাইল ব্যবহারের নিয়ম](#bn18)  
&nbsp;&nbsp;[১৯. লোগো ফাইল](#bn19)  
&nbsp;&nbsp;[২০. মোবাইল প্যাডিং](#bn20)  
&nbsp;&nbsp;[২১. থিম ইনস্টলেশন](#bn21)  
&nbsp;&nbsp;[২২. ইনফিনিটিফ্রি লাইভ টেস্টিং](#bn22)  
&nbsp;&nbsp;[২৩. প্রয়োজনীয় পৃষ্ঠা তৈরি](#bn23)  
&nbsp;&nbsp;[২৪. প্রকল্প যোগ করার ধাপ](#bn24)  
&nbsp;&nbsp;[২৫. সদস্য যোগ করার ধাপ](#bn25)  
&nbsp;&nbsp;[২৬. ছবি ব্যবহারের নিয়ম](#bn26)  
&nbsp;&nbsp;[২৭. পার্মালিংক রিফ্রেশ](#bn27)  
&nbsp;&nbsp;[২৮. ক্যাশ পরিষ্কার](#bn28)  
&nbsp;&nbsp;[২৯. উন্নয়ন কর্মপ্রবাহ](#bn29)  
&nbsp;&nbsp;[৩০. জিপ বানানোর নিয়ম](#bn30)  
&nbsp;&nbsp;[৩১. সমস্যা ও সমাধান](#bn31)  
&nbsp;&nbsp;[৩২. নিরাপত্তা ও কোড নিয়ম](#bn32)  
&nbsp;&nbsp;[৩৩. বর্তমান সীমাবদ্ধতা](#bn33)  
&nbsp;&nbsp;[৩৪. ভবিষ্যৎ উন্নয়নের প্রস্তাব](#bn34)  
&nbsp;&nbsp;[৩৫. দ্রুত অ্যাডমিন রেফারেন্স](#bn35)  
&nbsp;&nbsp;[৩৬. লাইসেন্স নোটিশ](#bn36)  
&nbsp;&nbsp;[৩৭. রিপোজিটরি নিয়ম](#bn37)  
&nbsp;&nbsp;[৩৮. শেষ মন্তব্য](#bn38)

[English Version](#en)

&nbsp;&nbsp;[1. Project Overview](#en1)  
&nbsp;&nbsp;[2. Theme Folder Location](#en2)  
&nbsp;&nbsp;[3. Current Theme Structure](#en3)  
&nbsp;&nbsp;[4. Important WordPress Theme Files](#en4)  
&nbsp;&nbsp;[5. Asset Loading Order](#en5)  
&nbsp;&nbsp;[6. Custom Post Types](#en6)  
&nbsp;&nbsp;[7. Custom Taxonomy](#en7)  
&nbsp;&nbsp;[8. Custom Meta Fields](#en8)  
&nbsp;&nbsp;[9. Language System](#en9)  
&nbsp;&nbsp;[10. Translation Logic](#en10)  
&nbsp;&nbsp;[11. Navigation](#en11)  
&nbsp;&nbsp;[12. Header Behavior](#en12)  
&nbsp;&nbsp;[13. Footer Behavior](#en13)  
&nbsp;&nbsp;[14. Dark/Light Mode](#en14)  
&nbsp;&nbsp;[15. Homepage Structure](#en15)  
&nbsp;&nbsp;[16. Archive and Single Page Behavior](#en16)  
&nbsp;&nbsp;[17. CSS Files](#en17)  
&nbsp;&nbsp;[18. Logo Files](#en18)  
&nbsp;&nbsp;[19. Recommended Mobile Padding Patch](#en19)  
&nbsp;&nbsp;[20. Installation](#en20)  
&nbsp;&nbsp;[21. Live Testing on InfinityFree](#en21)  
&nbsp;&nbsp;[22. Content Setup Checklist](#en22)  
&nbsp;&nbsp;[23. Project Setup Checklist](#en23)  
&nbsp;&nbsp;[24. Team Member Setup Checklist](#en24)  
&nbsp;&nbsp;[25. Image Handling Rules](#en25)  
&nbsp;&nbsp;[26. Permalink Rules](#en26)  
&nbsp;&nbsp;[27. Cache Rules](#en27)  
&nbsp;&nbsp;[28. Development Workflow](#en28)  
&nbsp;&nbsp;[29. Packaging Rules](#en29)  
&nbsp;&nbsp;[30. Troubleshooting](#en30)  
&nbsp;&nbsp;[31. Security and Code Rules](#en31)  
&nbsp;&nbsp;[32. Known Limitations](#en32)  
&nbsp;&nbsp;[33. Recommended Future Improvements](#en33)  
&nbsp;&nbsp;[34. Quick Admin Reference](#en34)  
&nbsp;&nbsp;[35. License Notice](#en35)  
&nbsp;&nbsp;[36. Repository Rule](#en36)

---

<a id="bn1"></a>
## ১. সংক্ষিপ্ত পরিচিতি

| বিষয় | তথ্য |
|---|---|
| থিমের নাম | বিএনডব্লিউপি উইকিসংযোগ |
| থিম ফোল্ডার | `bnwp-wikiconnect` |
| টেক্সট ডোমেইন | `bnwp` |
| সংস্করণ | `1.1.0` |
| ন্যূনতম ওয়ার্ডপ্রেস | `6.0` |
| পরীক্ষিত ওয়ার্ডপ্রেস | `6.5` পর্যন্ত |
| ন্যূনতম পিএইচপি | `7.4` |
| প্রধান ভাষা | বাংলা |
| দ্বিতীয় ভাষা | ইংরেজি |
| প্রধান নির্ভরতা | বুটস্ট্র্যাপ ৫.৩, বুটস্ট্র্যাপ আইকন, ওয়ার্ডপ্রেস কোর এপিআই |

এই থিমের লক্ষ্য হলো বাংলা উইকিসংযোগের প্রকল্প, সদস্য, ব্লগ, সংবাদ, যোগাযোগ এবং সংগঠন-সম্পর্কিত তথ্যকে একটি পরিষ্কার ও প্রতিক্রিয়াশীল ওয়ার্ডপ্রেস সাইটে উপস্থাপন করা।

---

<a id="bn2"></a>
## ২. থিম কোথায় থাকবে

লাইভ সাইটে থিমের সঠিক অবস্থান:

```text
wp-content/themes/bnwp-wikiconnect/
```

স্থানীয় এক্সএএমপিপি ব্যবহারের ক্ষেত্রে উদাহরণ:

```text
C:\xampp\htdocs\bnwp\wp-content\themes\bnwp-wikiconnect
```

স্থানীয় পরীক্ষার ঠিকানা:

```text
http://localhost/bnwp
```

সঠিক কাঠামো:

```text
wp-content/themes/bnwp-wikiconnect/style.css
wp-content/themes/bnwp-wikiconnect/functions.php
wp-content/themes/bnwp-wikiconnect/front-page.php
```

ভুল কাঠামো:

```text
wp-content/themes/bnwp-wikiconnect/bnwp-wikiconnect/style.css
```

দ্বিতীয় কাঠামোটি ভুল, কারণ এতে থিম ফোল্ডারের ভেতরে আবার একই থিম ফোল্ডার ঢুকে গেছে। ওয়ার্ডপ্রেস তখন থিম ঠিকভাবে শনাক্ত করতে পারে না।

---

<a id="bn3"></a>
## ৩. থিমের মূল ফাইল কাঠামো

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
├── page.php
├── README.md
├── search.php
├── searchform.php
├── single-persona.php
├── single-project.php
├── single.php
├── style.css
├── taxonomy-team.php
└── assets/
    ├── css/
    │   ├── bootstrap5.3.mod.css
    │   ├── search.css
    │   ├── style.css
    │   └── theme.css
    ├── js/
    │   └── colormode.js
    └── uploads/
        ├── Bangla_WikiConnect_LOGO.png
        ├── Bangla_WikiConnect_Logo_-_BN.png
        ├── Bangla_WikiConnect_Logo_-_EN.png
        ├── Bangla_WikiConnect_Logo_small.png
        ├── WikiNandini_text_logo_2024.png
        ├── Wiki_Loves_Women_South_Asia.png
        ├── Wikimedia_Bangladesh_logo.png
        ├── Wikimedia_Foundation_logo_-_vertical.png
        ├── avatar-placeholder.png
        ├── avatar-placeholder.svg
        ├── error_404.png
        ├── error_404.svg
        └── favicon.png
```

---

<a id="bn4"></a>
## ৪. গুরুত্বপূর্ণ থিম ফাইল

<a id="bn41"></a>
### ৪.১ `style.css`

এটি থিমের মূল স্টাইলশিট। ওয়ার্ডপ্রেস এই ফাইল দেখে থিমের নাম, সংস্করণ এবং তথ্য শনাক্ত করে।

এই ফাইলের শুরুতে থিম হেডার থাকতে হবে:

```css
/*
Theme Name: BNWP WikiConnect
Theme URI: https://bnwp.org/
Description: WordPress conversion of the Bangla WikiConnect Hugo/static website. Includes templates for posts, projects and persona/team profiles.
Version: 1.1.0
Requires at least: 6.0
Tested up to: 6.5
Requires PHP: 7.4
License: GPLv2 or later
Text Domain: bnwp
*/
```

এই অংশটি ইংরেজি থাকলেও সমস্যা নেই, কারণ ওয়ার্ডপ্রেসের থিম শনাক্তকরণের জন্য এটি নির্দিষ্ট বিন্যাসে রাখা নিরাপদ।

দ্রুত সিএসএস সংশোধনের জন্য এই ফাইলের একদম নিচে নতুন সিএসএস যোগ করা ভালো। কারণ এটি সাধারণত অন্য সিএসএস ফাইলের পরে লোড হয়।

---

<a id="bn42"></a>
### ৪.২ `functions.php`

এটি থিমের প্রধান কার্যকরী ফাইল। এখানে থিমের বড় অংশের পিএইচপি যুক্তি থাকে।

এই ফাইলে রয়েছে:

- থিম সেটআপ
- সিএসএস ও জাভাস্ক্রিপ্ট লোড
- প্রকল্প কাস্টম পোস্ট টাইপ
- সদস্য বা পারসোনা কাস্টম পোস্ট টাইপ
- দল ট্যাক্সোনমি
- কাস্টম মেটা বক্স
- ভাষা শনাক্তকরণ
- ভাষা বদল
- আর্কাইভ ও অনুসন্ধানে ভাষা অনুযায়ী ফিল্টার
- ন্যাভিগেশন মেনুর বিকল্প ব্যবস্থা
- পাঠ সময় গণনা
- ছবি না থাকলে বিকল্প ছবি দেখানো

---

<a id="bn43"></a>
### ৪.৩ `header.php`

সাইটের উপরের অংশ নিয়ন্ত্রণ করে।

এই ফাইলে থাকে:

- সাইটের লোগো
- সাইটের নাম
- প্রধান ন্যাভিগেশন
- ভাষা বদল বোতাম
- আলো/অন্ধকার মোড বোতাম
- অনুসন্ধান ফর্ম
- মোবাইল মেনু

বর্তমান হেডার লোগো:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

---

<a id="bn44"></a>
### ৪.৪ `footer.php`

সাইটের নিচের অংশ নিয়ন্ত্রণ করে।

এই ফাইলে থাকে:

- লোগো
- সাইটের নাম
- সাইটের বর্ণনা
- যোগাযোগ বোতাম
- সদস্য বোতাম
- লাইসেন্স নোটিশ
- `wp_footer()` হুক

বর্তমান ফুটার লোগো:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

---

<a id="bn45"></a>
### ৪.৫ `front-page.php`

সাইটের হোমপেজ নিয়ন্ত্রণ করে।

হোমপেজে থাকে:

১. হিরো অংশ  
২. পরিসংখ্যান/উক্তি ক্যারোসেল  
৩. প্রকল্পসমূহ  
৪. মূল দল  
৫. ফেসবুক ফিড  
৬. সহযোগী/অংশীদার লোগো  

---

<a id="bn46"></a>
### ৪.৬ `archive-project.php`

সব প্রকল্প দেখানোর পৃষ্ঠা।

ঠিকানা:

```text
/projects/
```

---

<a id="bn47"></a>
### ৪.৭ `single-project.php`

একটি নির্দিষ্ট প্রকল্পের বিস্তারিত পৃষ্ঠা।

---

<a id="bn48"></a>
### ৪.৮ `archive-persona.php`

সব সদস্য বা পারসোনা দেখানোর পৃষ্ঠা।

ঠিকানা:

```text
/persona/
```

---

<a id="bn49"></a>
### ৪.৯ `single-persona.php`

একজন নির্দিষ্ট সদস্যের বিস্তারিত প্রোফাইল পৃষ্ঠা।

---

<a id="bn410"></a>
### ৪.১০ `taxonomy-team.php`

দল অনুযায়ী সদস্য দেখানোর পৃষ্ঠা।

উদাহরণ:

```text
/teams/cot/
/teams/technical/
/teams/jury/
```

---

<a id="bn411"></a>
### ৪.১১ `page-contact.php`

যোগাযোগ পৃষ্ঠার টেমপ্লেট।

---

<a id="bn412"></a>
### ৪.১২ `page-posts.php`

ব্লগ বা পোস্ট তালিকার পৃষ্ঠা।

---

<a id="bn413"></a>
### ৪.১৩ `page-search.php`

আলাদা অনুসন্ধান পৃষ্ঠার টেমপ্লেট।

---

<a id="bn414"></a>
### ৪.১৪ `search.php`

অনুসন্ধান ফলাফল দেখানোর টেমপ্লেট।

---

<a id="bn415"></a>
### ৪.১৫ `404.php`

পাতা না পাওয়া গেলে দেখানোর কাস্টম পৃষ্ঠা।

---

<a id="bn5"></a>
## ৫. অ্যাসেট লোডের ক্রম

অ্যাসেট লোড হয় `functions.php` ফাইলের `bnwp_enqueue_assets()` ফাংশনের মাধ্যমে।

লোডের ক্রম:

```text
১. assets/css/bootstrap5.3.mod.css
২. বুটস্ট্র্যাপ আইকন সিডিএন
৩. assets/css/theme.css
৪. assets/css/style.css
৫. root style.css
৬. বুটস্ট্র্যাপ জাভাস্ক্রিপ্ট সিডিএন
৭. assets/js/colormode.js
```

মূল `style.css` শেষে লোড হওয়ায়, দ্রুত ওভাররাইড বা ছোট সংশোধন সেখানে যোগ করাই সবচেয়ে নিরাপদ।

---

<a id="bn6"></a>
## ৬. কাস্টম পোস্ট টাইপ

থিমে দুটি কাস্টম পোস্ট টাইপ আছে।

---

<a id="bn61"></a>
### ৬.১ প্রকল্প

রেজিস্টার করা পোস্ট টাইপ:

```text
project
```

অ্যাডমিন মেনুতে নাম:

```text
Projects
```

আর্কাইভ ঠিকানা:

```text
/projects/
```

সমর্থিত বৈশিষ্ট্য:

```text
title
editor
excerpt
thumbnail
custom-fields
revisions
REST API
```

ব্যবহার হয়:

- হোমপেজের প্রকল্প কার্ডে
- প্রকল্প আর্কাইভে
- একক প্রকল্প পৃষ্ঠায়

---

<a id="bn62"></a>
### ৬.২ সদস্য বা পারসোনা

রেজিস্টার করা পোস্ট টাইপ:

```text
persona
```

অ্যাডমিন মেনুতে নাম:

```text
Team Members
```

আর্কাইভ ঠিকানা:

```text
/persona/
```

সমর্থিত বৈশিষ্ট্য:

```text
title
editor
excerpt
thumbnail
custom-fields
revisions
REST API
```

ব্যবহার হয়:

- হোমপেজের মূল দল অংশে
- সব সদস্যের আর্কাইভে
- দলভিত্তিক পৃষ্ঠায়
- একক সদস্য প্রোফাইলে

---

<a id="bn7"></a>
## ৭. দল ট্যাক্সোনমি

রেজিস্টার করা ট্যাক্সোনমি:

```text
team
```

যুক্ত আছে:

```text
persona
```

বেস ঠিকানা:

```text
/teams/
```

গুরুত্বপূর্ণ দল:

| দলের নাম | স্লাগ | ঠিকানা |
|---|---|---|
| মূল দল | `cot` | `/teams/cot/` |
| কারিগরি ও প্রযুক্তি দল | `technical` | `/teams/technical/` |
| পর্যালোচক দল | `jury` | `/teams/jury/` |

হোমপেজের মূল দল অংশ শুধু এই স্লাগের সদস্য দেখায়:

```text
cot
```

তাই “মূল দল” তৈরির সময় স্লাগ অবশ্যই হতে হবে:

```text
cot
```

---

<a id="bn8"></a>
## ৮. কাস্টম মেটা ফিল্ড

থিমে প্রকল্প, সদস্য এবং পোস্টের জন্য আলাদা কাস্টম ফিল্ড আছে।

---

<a id="bn81"></a>
### ৮.১ প্রকল্পের ফিল্ড

অ্যাডমিন অবস্থান:

```text
Projects → Add New/Edit Project → Project Details
```

| ফিল্ড | মেটা কী | কাজ |
|---|---|---|
| Logo URL | `_bnwp_logo` | প্রকল্পের লোগো |
| Cover URL | `_bnwp_cover` | প্রকল্পের বড় কভার ছবি |
| Wiki URL | `_bnwp_wiki` | প্রকল্পের বাইরের উইকি/মেটা লিংক |
| Lead | `_bnwp_lead` | ছোট বর্ণনা |
| Language | `_bnwp_language` | `bn` অথবা `en` |

বাংলা প্রকল্পের উদাহরণ:

```text
শিরোনাম:
উইকি লাভস উইমেন দক্ষিণ এশিয়া

Logo URL:
https://upload.wikimedia.org/wikipedia/commons/f/f5/Wiki_Loves_Women_South_Asia.svg

Cover URL:
[খালি রাখা যায়]

Wiki URL:
https://meta.wikimedia.org/wiki/Wiki_Loves_Women

Lead:
উইকি লাভস উইমেন দক্ষিণ এশিয়া উইকিপিডিয়ায় লিঙ্গ ব্যবধান হ্রাস করা এবং দক্ষিণ এশিয়ার নারীদের সম্পর্কে জীবনী তৈরির একটি উদ্যোগ।

Language:
bn
```

ছবির ক্ষেত্রে সরাসরি ছবির লিংক ব্যবহার করা ভালো।

ভালো:

```text
https://upload.wikimedia.org/wikipedia/commons/....png
```

গ্রহণযোগ্য:

```text
https://commons.wikimedia.org/wiki/Special:FilePath/File_Name.png
```

ভুল:

```text
https://commons.wikimedia.org/wiki/File:File_Name.png
```

কারণ শেষেরটি ছবির সরাসরি লিংক নয়, এটি একটি ওয়েবপৃষ্ঠা।

---

<a id="bn82"></a>
### ৮.২ সদস্য বা পারসোনা ফিল্ড

অ্যাডমিন অবস্থান:

```text
Team Members → Add New/Edit Team Member → Team Member Details
```

| ফিল্ড | মেটা কী | কাজ |
|---|---|---|
| Display Name | `_bnwp_name` | প্রদর্শিত পূর্ণ নাম |
| Role | `_bnwp_role` | দায়িত্ব বা ভূমিকা |
| Wiki Username | `_bnwp_username` | উইকি ব্যবহারকারীর নাম |
| Location | `_bnwp_location` | অবস্থান |
| Email | `_bnwp_email` | ইমেইল, চাইলে খালি রাখা যায় |
| Image URL | `_bnwp_img` | প্রোফাইল ছবি |
| Short Bio | `_bnwp_bio` | ছোট পরিচিতি |
| Language | `_bnwp_language` | `bn` অথবা `en` |

সদস্যের উদাহরণ:

```text
শিরোনাম:
ঐশিক রেহমান

Display Name:
ঐশিক রেহমান

Role:
মূল দল

Wiki Username:
Aishik Rehman

Location:
Bangladesh

Email:
[খালি রাখা যায়]

Image URL:
https://example.com/photo.jpg

Short Bio:
বাংলা উইকিসংযোগের মূল দলের সদস্য।

Language:
bn
Team:
মূল দল, slug: cot
```

`Wiki Username` ফিল্ডে `@` দেওয়া যাবে না।

সঠিক:

```text
Aishik Rehman
```

ভুল:

```text
@Aishik Rehman
```

কার্ডে থিম নিজে থেকেই `@` যোগ করে।

---

<a id="bn83"></a>
### ৮.৩ পোস্ট ফিল্ড

অ্যাডমিন অবস্থান:

```text
Posts → Add New/Edit Post → BNWP Post Details
```

| ফিল্ড | মেটা কী | কাজ |
|---|---|---|
| Author Wiki Username | `_bnwp_user` | লেখকের উইকি ব্যবহারকারীর নাম |
| Language | `_bnwp_language` | `bn` অথবা `en` |

একক সদস্য পৃষ্ঠায় সংশ্লিষ্ট ব্লগ পোস্ট দেখানোর জন্য মিলানো হয়:

```text
persona _bnwp_username = post _bnwp_user
```

তাই দুই জায়গার ব্যবহারকারীর নাম একদম একই হতে হবে।

---

<a id="bn9"></a>
## ৯. ভাষা ব্যবস্থা

থিমে সরল ভাষা ব্যবস্থা আছে। এটি পূর্ণ বহুভাষিক প্লাগইন নয়।

ডিফল্ট ভাষা:

```text
bn
```

ইংরেজি দেখার ঠিকানা:

```text
?lang=en
```

উদাহরণ:

```text
/projects/           → বাংলা প্রকল্প
/projects/?lang=en   → ইংরেজি প্রকল্প
/persona/            → বাংলা সদস্য
/persona/?lang=en    → ইংরেজি সদস্য
```

`bnwp_current_language()` ফাংশন বর্তমান ভাষা ফেরত দেয়:

```text
bn
```

অথবা:

```text
en
```

আর্কাইভ, টিম, অনুসন্ধান ও মূল তালিকাগুলো ভাষা অনুযায়ী ফিল্টার হয়। ফিল্টারের মেটা কী:

```text
_bnwp_language
```

---

<a id="bn10"></a>
## ১০. ভাষা বদল যুক্তি

ভাষা বদল করে `bnwp_translation_url()` ফাংশন।

একক পৃষ্ঠা বা পোস্টের ক্ষেত্রে বাংলা ও ইংরেজি স্লাগ এভাবে রাখা হয়েছে:

```text
/about/
/about-en/
```

ইংরেজিতে যাওয়ার সময় থিম চেষ্টা করে:

```text
বর্তমান-স্লাগ-en
```

বাংলায় ফেরার সময় থিম `-en` বাদ দেয়।

যদি অনুবাদ পৃষ্ঠা না থাকে, তাহলে থিম সংশ্লিষ্ট আর্কাইভ বা হোমপেজে পাঠায়।

---

<a id="bn11"></a>
## ১১. ন্যাভিগেশন

থিমে একটি প্রধান মেনু অবস্থান আছে:

```text
Primary Menu
```

অ্যাডমিনে মেনু তৈরি/সম্পাদনা:

```text
Appearance → Menus
```

যদি মেনু নির্ধারণ করা না থাকে, তাহলে থিম নিজস্ব বিকল্প মেনু দেখায়।

বাংলা বিকল্প মেনু:

```text
নীড়
পরিচিতি
বার্তাকক্ষ
ব্লগ
সদস্য
প্রকল্প
```

ইংরেজি বিকল্প মেনু:

```text
Home
About
Newsroom
Blog
Members
Projects
```

“সদস্য” মেনুর অধীনে থাকে:

```text
সকল সদস্য
মূল দল
কারিগরি ও প্রযুক্তি দল
পর্যালোচক দল
```

---

<a id="bn12"></a>
## ১২. হেডার

হেডারে রয়েছে:

- লোগো
- সাইটের নাম
- প্রধান মেনু
- ভাষা বদল বোতাম
- আলো/অন্ধকার মোড বোতাম
- অনুসন্ধান
- মোবাইল মেনু

বর্তমান হেডার লোগো:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

ব্যবহৃত সিএসএস ক্লাস:

```text
.bnwp-header-brand
.bnwp-header-logo
.bnwp-header-title
```

ডেস্কটপে কাঙ্ক্ষিত বিন্যাস:

```text
[লোগো] বাংলা উইকিসংযোগ
```

মোবাইলে কাঙ্ক্ষিত বিন্যাস:

```text
[ছোট লোগো] বাংলা উইকিসংযোগ
```

প্রস্তাবিত সিএসএস:

```css
.bnwp-header-brand {
    display: inline-flex !important;
    align-items: center;
    gap: 10px;
    text-decoration: none !important;
}

.bnwp-header-logo {
    width: 36px !important;
    height: auto !important;
    max-width: 36px !important;
    display: inline-block !important;
    flex-shrink: 0;
}

.bnwp-header-title {
    font-weight: 700;
    font-size: 1.35rem;
    line-height: 1.2;
}

@media (max-width: 576px) {
    .bnwp-header-brand {
        gap: 8px;
        margin-right: 0 !important;
    }

    .bnwp-header-logo {
        width: 30px !important;
        max-width: 30px !important;
    }

    .bnwp-header-title {
        font-size: 1.1rem;
    }
}
```

---

<a id="bn13"></a>
## ১৩. ফুটার

ফুটারে রয়েছে:

- লোগো
- সাইটের নাম
- সাইটের বর্ণনা
- যোগাযোগ বোতাম
- সদস্য বোতাম
- লাইসেন্স নোটিশ

বর্তমান ফুটার লোগো:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

ব্যবহৃত সিএসএস ক্লাস:

```text
.bnwp-footer-brand-logo
.bnwp-footer-actions
```

ডেস্কটপে কাঙ্ক্ষিত বিন্যাস:

```text
[লোগো] বাংলা উইকিসংযোগ
```

মোবাইলে কাঙ্ক্ষিত বিন্যাস:

```text
[লোগো]
বাংলা উইকিসংযোগ
```

ফুটার বোতাম অংশের প্রস্তাবিত কাঠামো:

```php
<div class="col-12 col-md-6 text-center text-md-end">
    <div class="bnwp-footer-actions">
        <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contact/')); ?>">
            যোগাযোগ
        </a>

        <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/persona/')); ?>">
            সদস্য
        </a>
    </div>
</div>
```

প্রস্তাবিত সিএসএস:

```css
.bnwp-footer-actions {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 12px;
}

.bnwp-footer-actions .btn {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    padding: 9px 18px !important;
    border-radius: 18px !important;
    margin: 0 !important;
    width: auto !important;
}

@media (max-width: 576px) {
    .bnwp-footer-actions {
        justify-content: center;
        gap: 10px;
        margin-top: 12px;
    }

    .bnwp-footer-actions .btn {
        padding: 8px 16px !important;
        border-radius: 16px !important;
    }
}
```

---

<a id="bn14"></a>
## ১৪. আলো/অন্ধকার মোড

আলো/অন্ধকার মোড নিয়ন্ত্রণ করে:

```text
assets/js/colormode.js
```

লোকাল স্টোরেজ কী:

```text
bnwp-theme
```

সমর্থিত মান:

```text
light
dark
```

স্ক্রিপ্টের কাজ:

১. আগে সংরক্ষিত পছন্দ দেখে  
২. না থাকলে সিস্টেম পছন্দ দেখে  
৩. `<html>` ট্যাগে `data-bs-theme` বসায়  
৪. আইকন বদলায়  
৫. বোতামে ক্লিক করলে সরাসরি আলো/অন্ধকার বদলায়  

ব্যবহৃত আইডি:

```text
colorModeTooglerBtn
theme-icon-active
```

এখানে সাবমেনু নেই। বোতামে ক্লিক করলেই মোড বদলে যায়।

---

<a id="bn15"></a>
## ১৫. হোমপেজ কাঠামো

হোমপেজ ফাইল:

```text
front-page.php
```

---

<a id="bn151"></a>
### ১৫.১ হিরো অংশ

এখানে থাকে:

- প্রধান বাংলা শিরোনাম
- পরিচিতিমূলক অনুচ্ছেদ
- দুটি ক্যাপসুল আকৃতির বোতাম
- প্রধান বাংলা উইকিসংযোগ লোগো

বোতাম র‍্যাপার:

```text
.front-hero-buttons
```

প্রস্তাবিত সিএসএস:

```css
.front-hero-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: flex-start !important;
    align-items: flex-start !important;
    text-align: left !important;
}

.front-hero-buttons .btn {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    width: auto !important;
    min-width: auto !important;
    max-width: none !important;
    padding: 12px 24px !important;
    border-radius: 24px !important;
    margin: 0 !important;
}

@media (max-width: 576px) {
    .front-hero-buttons {
        flex-direction: column;
        gap: 12px;
        width: auto !important;
        justify-content: flex-start !important;
        align-items: flex-start !important;
        margin-top: 18px;
    }

    .front-hero-buttons .btn {
        width: auto !important;
        min-width: auto !important;
        max-width: none !important;
        padding: 12px 24px !important;
        border-radius: 24px !important;
        align-self: flex-start !important;
        text-align: center;
    }
}
```

---

<a id="bn152"></a>
### ১৫.২ পরিসংখ্যান/উক্তি ক্যারোসেল

বর্তমান ক্যারোসেলে আছে:

```text
✨ এখন পর্যন্ত ১৬ লক্ষ+ শব্দ যোগ!
📝 ২০০০+ নিবন্ধ!
🖼️ ১০০+ চিত্র আপলোড!
👥 ২০+ আয়োজক!
🛠️ ২ টি কর্মশালা
📘 ২ টি টিউটোরিয়াল
```

এগুলো `front-page.php` ফাইলের `$quotes` অ্যারেতে লেখা আছে।

---

<a id="bn153"></a>
### ১৫.৩ প্রকল্পসমূহ অংশ

শিরোনাম:

```text
আমাদের প্রকল্পসমূহ
```

কোয়েরি:

```php
new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => 6,
    'meta_key' => '_bnwp_language',
    'meta_value' => bnwp_current_language()
));
```

ব্যবহৃত ফিল্ড:

```text
_bnwp_logo
_bnwp_lead
```

কার্ডে দেখায়:

- প্রকল্প লোগো
- প্রকল্প শিরোনাম
- “বিস্তারিত দেখুন” লিংক
- ছোট বর্ণনা

---

<a id="bn154"></a>
### ১৫.৪ মূল দল অংশ

শিরোনাম:

```text
মূল দল
```

কোয়েরি:

```php
new WP_Query(array(
    'post_type' => 'persona',
    'posts_per_page' => 12,
    'meta_key' => '_bnwp_language',
    'meta_value' => bnwp_current_language(),
    'tax_query' => array(array(
        'taxonomy' => 'team',
        'field' => 'slug',
        'terms' => 'cot'
    )),
));
```

হোমপেজে দেখাতে যা দরকার:

```text
Post Type: persona
Language: bn অথবা en
Team slug: cot
Image URL: বৈধ ছবি লিংক
Wiki Username: থাকলে ভালো
```

---

<a id="bn155"></a>
### ১৫.৫ ফেসবুক ফিড

হোমপেজে ফেসবুক পেজ প্লাগইন ব্যবহার করা হয়েছে।

পেজ:

```text
https://www.facebook.com/banglawikiconnect
```

ফেসবুক স্ক্রিপ্ট `header.php` ফাইলে লোড হয়।

---

<a id="bn156"></a>
### ১৫.৬ অংশীদার লোগো

হোমপেজে অংশীদার অংশে আছে:

```text
উইকিমিডিয়া ফাউন্ডেশন
উইকি নন্দিনী
উইকিমিডিয়া বাংলাদেশ
```

ছবি রাখা আছে:

```text
assets/uploads/
```

---

<a id="bn16"></a>
## ১৬. প্রকল্প আর্কাইভ ও একক প্রকল্প

<a id="bn161"></a>
### ১৬.১ প্রকল্প আর্কাইভ

ঠিকানা:

```text
/projects/
```

টেমপ্লেট:

```text
archive-project.php
```

ব্যবহৃত তথ্য:

```text
প্রকল্প শিরোনাম
_bnwp_lead
_bnwp_logo
permalink
```

বোতামের লেখা:

```text
বিস্তারিত দেখুন
```

বোতামের ক্লাস:

```text
.bnwp-capsule-btn
```

প্রস্তাবিত সিএসএস:

```css
.bnwp-project-archive-actions {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.bnwp-capsule-btn {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    padding: 10px 20px !important;
    border-radius: 20px !important;
    width: auto !important;
    min-width: auto !important;
    max-width: max-content !important;
    margin: 0 !important;
}

@media (max-width: 576px) {
    .bnwp-capsule-btn {
        padding: 9px 18px !important;
        border-radius: 18px !important;
        font-size: 0.95rem;
    }
}
```

---

<a id="bn162"></a>
### ১৬.২ একক প্রকল্প

টেমপ্লেট:

```text
single-project.php
```

ব্যবহৃত ফিল্ড:

```text
_bnwp_cover
_bnwp_lead
_bnwp_wiki
post content
```

যদি `_bnwp_wiki` দেওয়া থাকে, তাহলে পৃষ্ঠায় “উইকিতে দেখুন” ধরনের বাইরের লিংক দেখানো যায়।

---

<a id="bn17"></a>
## ১৭. সদস্য আর্কাইভ ও একক সদস্য

<a id="bn171"></a>
### ১৭.১ সদস্য আর্কাইভ

ঠিকানা:

```text
/persona/
```

টেমপ্লেট:

```text
archive-persona.php
```

কার্ডে ব্যবহৃত তথ্য:

```text
শিরোনাম
_bnwp_img
_bnwp_username
_bnwp_role
permalink
```

---

<a id="bn172"></a>
### ১৭.২ একক সদস্য

টেমপ্লেট:

```text
single-persona.php
```

ব্যবহৃত ফিল্ড:

```text
_bnwp_cover
_bnwp_img
_bnwp_name
_bnwp_role
_bnwp_username
_bnwp_email
_bnwp_location
_bnwp_bio
post content
```

সংশ্লিষ্ট ব্লগ দেখাতে মিলানো হয়:

```text
post _bnwp_user = persona _bnwp_username
```

---

<a id="bn18"></a>
## ১৮. সিএসএস ফাইল ব্যবহারের নিয়ম

থিমে দুটি গুরুত্বপূর্ণ সিএসএস ফাইল আছে।

<a id="bn181"></a>
### ১৮.১ মূল `style.css`

পথ:

```text
bnwp-wikiconnect/style.css
```

কাজ:

- থিম শনাক্তকরণ
- চূড়ান্ত সিএসএস ওভাররাইড
- দ্রুত সংশোধন
- মোবাইল প্যাচ

ছোট পরিবর্তনের জন্য এই ফাইলের শেষে সিএসএস যোগ করা ভালো।

---

<a id="bn182"></a>
### ১৮.২ প্রধান নকশা সিএসএস

পথ:

```text
bnwp-wikiconnect/assets/css/style.css
```

কাজ:

- প্রধান নকশা
- লেআউট
- মূল ভিজ্যুয়াল স্টাইল

দ্রুত পরীক্ষামূলক সংশোধনের জন্য এই ফাইল না ছোঁয়াই ভালো।

---

<a id="bn19"></a>
## ১৯. লোগো ফাইল

গুরুত্বপূর্ণ লোগো:

```text
assets/uploads/Bangla_WikiConnect_LOGO.png
assets/uploads/Bangla_WikiConnect_Logo_small.png
assets/uploads/Bangla_WikiConnect_Logo_-_BN.png
assets/uploads/Bangla_WikiConnect_Logo_-_EN.png
```

বর্তমান হেডার/ফুটার লোগো:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

হিরো অংশের বড় লোগো:

```text
assets/uploads/Bangla_WikiConnect_LOGO.png
```

লোগো হঠাৎ বড় হয়ে গেলে নির্দিষ্ট ক্লাস দিয়ে আকার নিয়ন্ত্রণ করতে হবে।

উদাহরণ:

```css
.bnwp-header-logo {
    width: 36px !important;
    max-width: 36px !important;
}

.bnwp-footer-brand-logo {
    width: 42px !important;
    max-width: 42px !important;
}
```

---

<a id="bn20"></a>
## ২০. মোবাইল প্যাডিং

মোবাইলে কনটেন্ট খুব কিনারায় লেগে গেলে মূল `style.css` ফাইলের শেষে যোগ করা যায়:

```css
@media (max-width: 576px) {
    main .container {
        padding-left: 24px !important;
        padding-right: 24px !important;
    }
}
```

প্রথমে `24px` ব্যবহার করা ভালো। দরকার হলে পরে `30px` করা যায়।

---

<a id="bn21"></a>
## ২১. থিম ইনস্টলেশন

<a id="bn211"></a>
### ২১.১ ওয়ার্ডপ্রেস অ্যাডমিন থেকে ইনস্টল

১. ওয়ার্ডপ্রেস অ্যাডমিনে যান।  
২. খুলুন:

```text
Appearance → Themes → Add New → Upload Theme
```

৩. আপলোড করুন:

```text
bnwp-wikiconnect.zip
```

৪. চাপুন:

```text
Install Now → Activate
```

৫. তারপর যান:

```text
Settings → Permalinks
```

৬. শুধু চাপুন:

```text
Save Changes
```

এতে পার্মালিংক রিফ্রেশ হবে।

---

<a id="bn212"></a>
### ২১.২ ফাইল ম্যানেজার বা এফটিপি দিয়ে ইনস্টল

থিম ফোল্ডার আপলোড করুন:

```text
wp-content/themes/bnwp-wikiconnect/
```

তারপর ওয়ার্ডপ্রেস অ্যাডমিন থেকে থিম সক্রিয় করুন:

```text
Appearance → Themes
```

---

<a id="bn22"></a>
## ২২. ইনফিনিটিফ্রি লাইভ টেস্টিং

ইনফিনিটিফ্রি ফাইল ম্যানেজারে সঠিক পথ:

```text
htdocs/wp-content/themes/bnwp-wikiconnect/
```

পুরনো থিম বদলানোর ধাপ:

১. দরকার হলে আগে অন্য থিম সক্রিয় করুন।  
২. পুরনো `bnwp-wikiconnect` ফোল্ডার মুছে দিন।  
৩. নতুন জিপ বা ফোল্ডার আপলোড করুন।  
৪. `themes/` ফোল্ডারের ভেতরে জিপ এক্সট্র্যাক্ট করুন।  
৫. নিশ্চিত করুন:

```text
htdocs/wp-content/themes/bnwp-wikiconnect/style.css
```

৬. এক্সট্র্যাক্টের পর জিপ মুছে দিন।  
৭. থিম সক্রিয় করুন।  
৮. ক্যাশ পরিষ্কার করুন।

---

<a id="bn23"></a>
## ২৩. প্রয়োজনীয় পৃষ্ঠা তৈরি

থিম চালুর পর নিচের পৃষ্ঠাগুলো তৈরি বা যাচাই করা ভালো।

| পৃষ্ঠা | প্রস্তাবিত স্লাগ | টেমপ্লেট |
|---|---|---|
| হোম | `/` | `front-page.php` |
| যোগাযোগ | `/contact/` | `page-contact.php` |
| পোস্ট/ব্লগ | `/posts/` | `page-posts.php` |
| অনুসন্ধান | `/search/` | `page-search.php` |
| পরিচিতি | `/about/` | সাধারণ পৃষ্ঠা |
| বার্তাকক্ষ | `/newsroom/` | সাধারণ পৃষ্ঠা |

ইংরেজি পৃষ্ঠা থাকলে স্লাগ এভাবে রাখা যায়:

| বাংলা পৃষ্ঠা | ইংরেজি পৃষ্ঠা |
|---|---|
| `/about/` | `/about-en/` |
| `/newsroom/` | `/newsroom-en/` |
| `/posts/` | `/posts-en/` |

---

<a id="bn24"></a>
## ২৪. প্রকল্প যোগ করার ধাপ

১. যান:

```text
Projects → Add New
```

২. শিরোনাম দিন।  
৩. দরকার হলে মূল কনটেন্ট লিখুন।  
৪. `Project Details` অংশ পূরণ করুন:

```text
Logo URL
Cover URL
Wiki URL
Lead
Language
```

৫. প্রকাশ করুন।  
৬. দেখুন:

```text
/projects/
```

৭. হোমপেজে দেখুন:

```text
আমাদের প্রকল্পসমূহ
```

প্রকল্প হোমপেজে না দেখালে যাচাই করুন:

```text
Status: Published
Language: bn
Logo URL: বৈধ
Lead: খালি নয়
```

---

<a id="bn25"></a>
## ২৫. সদস্য যোগ করার ধাপ

১. যান:

```text
Team Members → Add New
```

২. শিরোনাম দিন।  
৩. `Team Member Details` পূরণ করুন:

```text
Display Name
Role
Wiki Username
Location
Email
Image URL
Short Bio
Language
```

৪. দল নির্বাচন করুন।  
৫. হোমপেজের মূল দলে দেখাতে হলে দল স্লাগ হতে হবে:

```text
cot
```

৬. প্রকাশ করুন।  
৭. দেখুন:

```text
/persona/
/teams/cot/
```

---

<a id="bn26"></a>
## ২৬. ছবি ব্যবহারের নিয়ম

এই ফিল্ডগুলোতে সরাসরি ছবি লিংক ব্যবহার করুন:

```text
_bnwp_logo
_bnwp_cover
_bnwp_img
```

সবচেয়ে নিরাপদ পদ্ধতি:

```text
Media → Add New → Upload → Copy URL
```

ভালো ছবি লিংক সাধারণত শেষ হয়:

```text
.jpg
.jpeg
.png
.webp
.svg
```

যদি এসভিজি ঠিকমতো না দেখায়, পিএনজি ব্যবহার করা ভালো।

ভুল:

```text
https://commons.wikimedia.org/wiki/File:Example.svg
```

ভালো:

```text
https://commons.wikimedia.org/wiki/Special:FilePath/Example.svg
```

আরও ভালো:

```text
https://upload.wikimedia.org/wikipedia/commons/....svg
```

---

<a id="bn27"></a>
## ২৭. পার্মালিংক রিফ্রেশ

থিম সক্রিয় করার পর বা কাস্টম পোস্ট টাইপ/ট্যাক্সোনমি বদলানোর পর পার্মালিংক রিফ্রেশ করতে হবে।

যান:

```text
Settings → Permalinks → Save Changes
```

এটি ঠিক করে:

```text
/projects/
/persona/
/teams/cot/
```

---

<a id="bn28"></a>
## ২৮. ক্যাশ পরিষ্কার

লাইভ হোস্টিংয়ে থিম ফাইল বদলালে ক্যাশ পরিষ্কার করতে হবে।

পরিষ্কার করুন:

```text
SpeedyCache
Browser cache
Hosting cache
Cloudflare cache, যদি থাকে
```

হার্ড রিফ্রেশ:

```text
উইন্ডোজ/লিনাক্স: Ctrl + F5
ম্যাক: Cmd + Shift + R
```

---

<a id="bn29"></a>
## ২৯. উন্নয়ন কর্মপ্রবাহ

প্রস্তাবিত গিট কর্মপ্রবাহ:

```bash
git checkout test
```

পরিবর্তন শেষে:

```bash
git add .
git commit -m "Update theme"
git push
```

পরীক্ষা শেষ হলে:

```bash
git checkout master
git merge test
git push
```

প্রস্তাবিত ব্রাঞ্চ:

```text
master → স্থিতিশীল/লাইভের জন্য প্রস্তুত
test   → পরীক্ষা/উন্নয়ন
```

---

<a id="bn30"></a>
## ৩০. জিপ বানানোর নিয়ম

ওয়ার্ডপ্রেসে আপলোড করার জিপে একটিমাত্র মূল থিম ফোল্ডার থাকবে।

সঠিক:

```text
bnwp-wikiconnect.zip
└── bnwp-wikiconnect/
    ├── style.css
    ├── functions.php
    ├── header.php
    ├── footer.php
    └── ...
```

ভুল:

```text
bnwp-wikiconnect.zip
└── bnwp-wikiconnect/
    └── bnwp-wikiconnect/
        ├── style.css
        └── functions.php
```

জিপে পুরো ওয়ার্ডপ্রেস থাকবে না।

বাদ দিতে হবে:

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

জিপে শুধু থিম ফাইল থাকবে।

---

<a id="bn31"></a>
## ৩১. সমস্যা ও সমাধান

<a id="bn311"></a>
### ৩১.১ থিম ওয়ার্ডপ্রেসে দেখা যাচ্ছে না

যাচাই করুন:

```text
wp-content/themes/bnwp-wikiconnect/style.css
```

এই ফাইলে বৈধ থিম হেডার থাকতে হবে।

---

<a id="bn312"></a>
### ৩১.২ `/projects/` বা `/persona/` ঠিকানায় ৪০৪ দেখাচ্ছে

যান:

```text
Settings → Permalinks → Save Changes
```

---

<a id="bn313"></a>
### ৩১.৩ হোমপেজে প্রকল্প দেখা যাচ্ছে না

প্রতিটি প্রকল্পে যাচাই করুন:

```text
Status: Published
Language: bn অথবা en
Logo URL: বৈধ ছবি লিংক
Lead: খালি নয়
```

ভাষাও যাচাই করুন। বাংলা কনটেন্ট সাধারণ ঠিকানায় দেখা যায়। ইংরেজি কনটেন্ট দেখা যায়:

```text
?lang=en
```

---

<a id="bn314"></a>
### ৩১.৪ হোমপেজে মূল দল দেখা যাচ্ছে না

প্রতিটি সদস্যে যাচাই করুন:

```text
Status: Published
Language: bn অথবা en
Team slug: cot
Image URL: বৈধ ছবি লিংক
```

মূল বিষয়:

```text
team slug = cot
```

---

<a id="bn315"></a>
### ৩১.৫ ছবি দেখা যাচ্ছে না

ছবির লিংক সরাসরি ছবি কিনা যাচাই করুন।

ব্যবহার করবেন না:

```text
https://commons.wikimedia.org/wiki/File:Something.png
```

ব্যবহার করুন:

```text
https://commons.wikimedia.org/wiki/Special:FilePath/Something.png
```

অথবা ওয়ার্ডপ্রেস মিডিয়া লাইব্রেরিতে ছবি আপলোড করুন।

---

<a id="bn316"></a>
### ৩১.৬ লোগো বিশাল হয়ে যাচ্ছে

নির্দিষ্ট ক্লাস দিয়ে আকার ঠিক করুন।

উদাহরণ:

```css
.bnwp-footer-brand-logo {
    width: 42px !important;
    height: auto !important;
    max-width: 42px !important;
    display: inline-block !important;
    flex-shrink: 0;
}
```

---

<a id="bn317"></a>
### ৩১.৭ মোবাইলে বোতাম পুরো প্রস্থ নিয়ে নিচ্ছে

এই ধরনের সিএসএস সরিয়ে দিন:

```css
width: 100%;
align-items: stretch;
```

ব্যবহার করুন:

```css
width: auto !important;
align-items: flex-start !important;
```

---

<a id="bn318"></a>
### ৩১.৮ পরিবর্তন দেখা যাচ্ছে না

পরিষ্কার করুন:

```text
SpeedyCache
Browser cache
```

তারপর হার্ড রিফ্রেশ করুন।

---

<a id="bn32"></a>
## ৩২. নিরাপত্তা ও কোড নিয়ম

থিমে সাধারণ ওয়ার্ডপ্রেস নিরাপত্তা চর্চা ব্যবহার করা হয়েছে।

ব্যবহৃত নিরাপত্তা পদ্ধতি:

- সরাসরি ফাইল অ্যাক্সেস বন্ধ করতে `ABSPATH` পরীক্ষা
- URL আউটপুটে `esc_url()`
- টেক্সট আউটপুটে `esc_html()` ও `esc_attr()`
- মেটা সংরক্ষণের আগে nonce পরীক্ষা
- অটোসেভের সময় মেটা সংরক্ষণ না করা
- সম্পাদনার অনুমতি যাচাই

ওয়ার্ডপ্রেস কোর ফাইল সম্পাদনা করবেন না:

```text
wp-admin/
wp-includes/
```

শুধু থিম ফোল্ডারে কাজ করুন:

```text
wp-content/themes/bnwp-wikiconnect/
```

---

<a id="bn33"></a>
## ৩৩. বর্তমান সীমাবদ্ধতা

- ভাষা ব্যবস্থা মেটা/কোয়েরি ভিত্তিক, পূর্ণ বহুভাষিক প্লাগইন নয়।
- অনুবাদ মিল স্লাগের ওপর নির্ভর করে, যেমন `about` এবং `about-en`।
- প্রকল্প ও সদস্য ছবির ফিল্ড এখন সাধারণ টেক্সট ইনপুট।
- হোমপেজের কিছু অংশ সরাসরি `front-page.php` ফাইলে লেখা।
- ফেসবুক ফিড বাইরের স্ক্রিপ্টের ওপর নির্ভর করে।
- বুটস্ট্র্যাপ আইকন ও বুটস্ট্র্যাপ জাভাস্ক্রিপ্ট সিডিএন থেকে লোড হয়।

---

<a id="bn34"></a>
## ৩৪. ভবিষ্যৎ উন্নয়নের প্রস্তাব

ভবিষ্যতে করা যেতে পারে:

১. ছবি ফিল্ডে মিডিয়া আপলোডার বোতাম যোগ করা।  
২. হোমপেজ লেখা ও অংশীদার লোগো কাস্টমাইজারে নেওয়া।  
৩. স্লাগ-ভিত্তিক ভাষা বদলের বদলে পূর্ণ অনুবাদ ব্যবস্থা করা।  
৪. প্রকল্প ও সদস্য অংশে পেজিনেশন বা লোড-মোর যোগ করা।  
৫. সংগঠন ও প্রোফাইলের জন্য স্কিমা মার্কআপ যোগ করা।  
৬. সিডিএন বন্ধ থাকলে লোকাল ফাইল ফallback যোগ করা।  
৭. `languages/` ফোল্ডার ও `.pot` ফাইল যোগ করা।  
৮. থিম স্ক্রিনশট যোগ করা।  
৯. স্বয়ংক্রিয় প্যাকেজ স্ক্রিপ্ট তৈরি করা।  
১০. অ্যাডমিনে কনটেন্ট এন্ট্রির জন্য স্ক্রিনশটসহ নির্দেশিকা যোগ করা।

---

<a id="bn35"></a>
## ৩৫. দ্রুত অ্যাডমিন রেফারেন্স

<a id="bn35project"></a>
### প্রকল্প যোগ

```text
Projects → Add New
```

প্রয়োজনীয়:

```text
Title
Logo URL
Lead
Language
```

ঐচ্ছিক:

```text
Cover URL
Wiki URL
Content
```

---

<a id="bn35persona"></a>
### সদস্য যোগ

```text
Team Members → Add New
```

প্রয়োজনীয়:

```text
Title
Image URL
Language
Team
```

প্রস্তাবিত:

```text
Display Name
Role
Wiki Username
Location
Short Bio
```

---

<a id="bn35coreteam"></a>
### হোমপেজে মূল দলের সদস্য দেখানো

```text
Team Members → Add New/Edit
Team: মূল দল
Team slug: cot
Language: bn
Publish
```

---

<a id="bn35logo"></a>
### হেডার/ফুটার লোগো পরিবর্তন

বর্তমান লোগো:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

সম্পাদনার ফাইল:

```text
header.php
footer.php
```

আকার নিয়ন্ত্রণ:

```text
style.css
```

---

<a id="bn35cache"></a>
### ক্যাশ পরিষ্কার

```text
SpeedyCache → Clear Cache
Browser hard refresh
```

---

<a id="bn36"></a>
## ৩৬. লাইসেন্স নোটিশ

ফুটারে বর্তমানে বলা হয়েছে যে সাইটের চিত্র ও ভিডিও কনটেন্ট সিসি বাই-এসএ ৪.০ লাইসেন্সে প্রকাশিত, যদি না আলাদা লাইসেন্স উল্লেখ থাকে। পাঠ্য কনটেন্ট মেধাসত্ত্বের অন্তর্ভুক্ত বলে ধরা হয়েছে।

বর্তমান বছর স্বয়ংক্রিয়ভাবে দেখানো হয়:

```php
<?php echo esc_html(date_i18n('Y')); ?>
```

---

<a id="bn37"></a>
## ৩৭. রিপোজিটরি নিয়ম

এই রিপোজিটরিতে শুধু থিম ফাইল রাখা উচিত।

কমিট করা যাবে না:

```text
পুরো ওয়ার্ডপ্রেস ইনস্টলেশন
ডাটাবেস ফাইল
wp-config.php
প্লাগইন ফোল্ডার
ব্যক্তিগত আপলোড ফোল্ডার
সার্ভার পাসওয়ার্ড
হোস্টিং তথ্য
```

রিপোজিটরির লক্ষ্য:

```text
শুধু bnwp-wikiconnect থিম সোর্স
```

---

<a id="bn38"></a>
## ৩৮. শেষ মন্তব্য

এই থিমটি বাংলা উইকিসংযোগের নিজস্ব প্রয়োজন অনুযায়ী তৈরি। তাই সাধারণ ব্লগ থিমের মতো সবকিছু ডাইনামিক নয়। প্রকল্প, সদস্য, ভাষা এবং হোমপেজের কিছু অংশ নির্দিষ্ট কাঠামোর ওপর নির্ভর করে। পরিবর্তন করার সময় আগে স্থানীয় সাইটে পরীক্ষা করা ভালো, তারপর লাইভ সাইটে আপলোড করা উচিত।

----
<a id="en"></a>
### English version
<a id="enwp"></a>
# BNWP WikiConnect WordPress Theme

A custom WordPress theme for the **Bangla WikiConnect** website. The theme is built for a Bengali-first Wikimedia/community website with project pages, team/persona profiles, bilingual support, dark/light mode, custom archive templates, and a structured homepage.

---

<a id="en1"></a>
## 1. Project Overview

**Theme Name:** BNWP WikiConnect  
**Text Domain:** `bnwp`  
**Version:** `1.1.0`  
**Minimum WordPress:** `6.0`  
**Tested up to:** `6.5`  
**Minimum PHP:** `7.4`  
**Primary Language:** Bengali  
**Secondary Language:** English  
**Framework/Dependencies:** Bootstrap 5.3, Bootstrap Icons, WordPress core APIs

This theme converts the Bangla WikiConnect static/Hugo-style design into a WordPress theme. It includes custom content types for projects and team members, Bengali UI labels, front-page sections, language filtering, direct light/dark switching, custom metadata fields, and responsive styling.

---

<a id="en2"></a>
## 2. Theme Folder Location

For local development using XAMPP:

```text
C:\xampp\htdocs\bnwp\wp-content\themes\bnwp-wikiconnect
```

Local test URL:

```text
http://localhost/bnwp
```

For live hosting, the folder should be placed here:

```text
wp-content/themes/bnwp-wikiconnect/
```

Correct theme path example:

```text
wp-content/themes/bnwp-wikiconnect/style.css
wp-content/themes/bnwp-wikiconnect/functions.php
wp-content/themes/bnwp-wikiconnect/front-page.php
```

Wrong nested path example:

```text
wp-content/themes/bnwp-wikiconnect/bnwp-wikiconnect/style.css
```

---

<a id="en3"></a>
## 3. Current Theme Structure

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
├── page.php
├── README.md
├── search.php
├── searchform.php
├── single-persona.php
├── single-project.php
├── single.php
├── style.css
├── taxonomy-team.php
└── assets/
    ├── css/
    │   ├── bootstrap5.3.mod.css
    │   ├── search.css
    │   ├── style.css
    │   └── theme.css
    ├── js/
    │   └── colormode.js
    └── uploads/
        ├── Bangla_WikiConnect_LOGO.png
        ├── Bangla_WikiConnect_Logo_-_BN.png
        ├── Bangla_WikiConnect_Logo_-_EN.png
        ├── Bangla_WikiConnect_Logo_small.png
        ├── WikiNandini_text_logo_2024.png
        ├── Wiki_Loves_Women_South_Asia.png
        ├── Wikimedia_Bangladesh_logo.png
        ├── Wikimedia_Foundation_logo_-_vertical.png
        ├── avatar-placeholder.png
        ├── avatar-placeholder.svg
        ├── error_404.png
        ├── error_404.svg
        └── favicon.png
```

---

<a id="en4"></a>
## 4. Important WordPress Theme Files

<a id="en4stylecss"></a>
### `style.css`

Root stylesheet required by WordPress. It contains the theme metadata header and final CSS overrides.

Use this file for quick custom CSS overrides because it is loaded after the theme CSS files.

Theme header:

```css
/*
Theme Name: BNWP WikiConnect
Theme URI: https://bnwp.org/
Description: WordPress conversion of the Bangla WikiConnect Hugo/static website. Includes templates for posts, projects and persona/team profiles.
Version: 1.1.0
Requires at least: 6.0
Tested up to: 6.5
Requires PHP: 7.4
License: GPLv2 or later
Text Domain: bnwp
*/
```

<a id="en4functionsphp"></a>
### `functions.php`

Main theme logic file. It handles:

- theme setup
- asset loading
- custom post types
- custom taxonomy
- custom meta boxes
- language switching
- language filtering
- fallback navigation menu
- Bootstrap-compatible navigation classes
- reading time helper
- image fallback helper

<a id="en4headerphp"></a>
### `header.php`

Controls the site header, navigation, language toggle, dark/light toggle, search form, and mobile menu.

Current header includes:

- Bangla WikiConnect logo
- site title
- direct language switch button
- direct dark/light mode toggle button
- responsive Bootstrap navigation
- fallback menu if no WordPress menu is assigned

<a id="en4footerphp"></a>
### `footer.php`

Controls the footer brand, footer buttons, license notice, and WordPress footer hook.

Current footer includes:

- Bangla WikiConnect logo above title on mobile
- logo beside title on desktop
- contact button
- members button
- license/copyright text

<a id="en4frontpagephp"></a>
### `front-page.php`

Controls the homepage.

Homepage sections:

1. hero section
2. quote/stat carousel
3. projects section
4. core team section
5. Facebook feed
6. partner logos

<a id="en4archiveprojectphp"></a>
### `archive-project.php`

Shows the archive/listing page for all Project posts.

Default URL:

```text
/projects/
```

<a id="en4singleprojectphp"></a>
### `single-project.php`

Shows a single project detail page.

<a id="en4archivepersonaphp"></a>
### `archive-persona.php`

Shows all team members/personas.

Default URL:

```text
/persona/
```

<a id="en4singlepersonaphp"></a>
### `single-persona.php`

Shows a single team member profile.

<a id="en4taxonomyteamphp"></a>
### `taxonomy-team.php`

Shows team members filtered by team taxonomy.

Example URLs:

```text
/teams/cot/
/teams/technical/
/teams/jury/
```

<a id="en4pagecontactphp"></a>
### `page-contact.php`

Template for contact page.

<a id="en4pagepostsphp"></a>
### `page-posts.php`

Template for blog/news post listing.

<a id="en4pagesearchphp"></a>
### `page-search.php`

Template for dedicated search page.

<a id="en4searchphp"></a>
### `search.php`

Search results template.

<a id="en4404php"></a>
### `404.php`

Custom 404 page.

---

<a id="en5"></a>
## 5. Asset Loading Order

Assets are loaded in `functions.php` using `bnwp_enqueue_assets()`.

Load order:

```text
1. assets/css/bootstrap5.3.mod.css
2. Bootstrap Icons CDN
3. assets/css/theme.css
4. assets/css/style.css
5. root style.css
6. Bootstrap JS CDN
7. assets/js/colormode.js
```

Because root `style.css` is loaded last, final overrides should usually be placed at the bottom of root `style.css`.

---

<a id="en6"></a>
## 6. Custom Post Types

The theme registers two custom post types.

---

<a id="en61"></a>
### 6.1 Project

Registered post type:

```text
project
```

Admin menu label:

```text
Projects
```

Archive URL:

```text
/projects/
```

Supported features:

```text
title
editor
excerpt
thumbnail
custom-fields
revisions
REST API
```

Used in:

- homepage project cards
- project archive page
- single project page

---

<a id="en62"></a>
### 6.2 Team Member / Persona

Registered post type:

```text
persona
```

Admin menu label:

```text
Team Members
```

Archive URL:

```text
/persona/
```

Supported features:

```text
title
editor
excerpt
thumbnail
custom-fields
revisions
REST API
```

Used in:

- homepage core team section
- all members archive
- team taxonomy pages
- single member profile page

---

<a id="en7"></a>
## 7. Custom Taxonomy

<a id="en7teamtaxonomy"></a>
### Team Taxonomy

Registered taxonomy:

```text
team
```

Attached to:

```text
persona
```

Archive base:

```text
/teams/
```

Important team slugs:

| Team Name | Slug | URL |
|---|---|---|
| মূল দল | `cot` | `/teams/cot/` |
| কারিগরি ও প্রযুক্তি দল | `technical` | `/teams/technical/` |
| পর্যালোচক দল | `jury` | `/teams/jury/` |

The homepage core team section is hard-coded to show personas from the team slug:

```text
cot
```

So the core team term must use this slug:

```text
cot
```

---

<a id="en8"></a>
## 8. Custom Meta Fields

The theme uses custom meta fields for projects, personas, and posts.

---

<a id="en81"></a>
### 8.1 Project Details

Admin location:

```text
Projects → Add New/Edit Project → Project Details
```

Fields:

| Field Label | Meta Key | Purpose |
|---|---|---|
| Logo URL | `_bnwp_logo` | Logo used on homepage/archive cards |
| Cover URL | `_bnwp_cover` | Large background image on single project page |
| Wiki URL | `_bnwp_wiki` | External wiki/project link |
| Lead | `_bnwp_lead` | Short description used on homepage/archive |
| Language | `_bnwp_language` | `bn` or `en` |

Recommended Bengali project example:

```text
Title:
উইকি লাভস উইমেন দক্ষিণ এশিয়া

Logo URL:
https://upload.wikimedia.org/wikipedia/commons/f/f5/Wiki_Loves_Women_South_Asia.svg

Cover URL:
[optional]

Wiki URL:
https://meta.wikimedia.org/wiki/Wiki_Loves_Women

Lead:
উইকি লাভস উইমেন দক্ষিণ এশিয়া উইকিপিডিয়ায় লিঙ্গ ব্যবধান হ্রাস করা এবং দক্ষিণ এশিয়ার নারীদের সম্পর্কে জীবনী তৈরির একটি উদ্যোগ।

Language:
bn
```

Important image rule:

Use a direct image URL when possible.

Good:

```text
https://upload.wikimedia.org/wikipedia/commons/....png
```

Usually acceptable:

```text
https://commons.wikimedia.org/wiki/Special:FilePath/File_Name.png
```

Wrong for image fields:

```text
https://commons.wikimedia.org/wiki/File:File_Name.png
```

The wrong version is a webpage, not a direct image.

---

<a id="en82"></a>
### 8.2 Team Member Details

Admin location:

```text
Team Members → Add New/Edit Team Member → Team Member Details
```

Fields:

| Field Label | Meta Key | Purpose |
|---|---|---|
| Display Name | `_bnwp_name` | Full display name on single profile |
| Role | `_bnwp_role` | Team role/designation |
| Wiki Username | `_bnwp_username` | Wikimedia username, without `@` |
| Location | `_bnwp_location` | Location/country/city |
| Email | `_bnwp_email` | Optional email address |
| Image URL | `_bnwp_img` | Profile photo URL |
| Short Bio | `_bnwp_bio` | Short profile description |
| Language | `_bnwp_language` | `bn` or `en` |

Recommended member example:

```text
Title:
ঐশিক রেহমান

Display Name:
ঐশিক রেহমান

Role:
মূল দল

Wiki Username:
Aishik Rehman

Location:
Bangladesh

Email:
[optional]

Image URL:
https://example.com/photo.jpg

Short Bio:
বাংলা উইকিসংযোগের মূল দলের সদস্য।

Language:
bn
Team:
মূল দল, slug: cot
```

Do not add `@` in the Wiki Username field.

Correct:

```text
Aishik Rehman
```

Wrong:

```text
@Aishik Rehman
```

The theme adds `@` automatically on cards.

---

<a id="en83"></a>
### 8.3 Post Details

Admin location:

```text
Posts → Add New/Edit Post → BNWP Post Details
```

Fields:

| Field Label | Meta Key | Purpose |
|---|---|---|
| Author Wiki Username | `_bnwp_user` | Connects post to a persona profile |
| Language | `_bnwp_language` | `bn` or `en` |

The single persona page shows related blog posts by matching:

```text
persona _bnwp_username = post _bnwp_user
```

So the username must match exactly.

---

<a id="en9"></a>
## 9. Language System

The theme uses a simple query-based language system.

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
/persona/            → Bengali members
/persona/?lang=en    → English members
```

The helper function `bnwp_current_language()` returns:

```text
bn
```

or:

```text
en
```

The theme filters main archive/search queries by the meta key:

```text
_bnwp_language
```

This means Project, Persona, Blog, Team, and Search results are filtered by language.

---

<a id="en10"></a>
## 10. Translation Logic

The language switcher uses `bnwp_translation_url()`.

For single pages/posts/projects/personas:

- Bengali slug: `example-page`
- English slug: `example-page-en`

When switching to English, the theme tries:

```text
current-slug-en
```

When switching back to Bengali, the theme removes:

```text
-en
```

Example pair:

```text
/about/
/about-en/
```

If a matching translated page does not exist, the switcher falls back to a relevant archive or the homepage.

---

<a id="en11"></a>
## 11. Navigation

The theme registers one WordPress menu location:

```text
Primary Menu
```

Admin path:

```text
Appearance → Menus
```

or, in block-based menu management:

```text
Appearance → Editor / Navigation
```

If no menu is assigned, the theme uses `bnwp_primary_menu_fallback()`.

Fallback Bengali menu:

```text
নীড়
পরিচিতি
বার্তাকক্ষ
ব্লগ
সদস্য
প্রকল্প
```

Fallback English menu:

```text
Home
About
Newsroom
Blog
Members
Projects
```

The Members menu includes dropdown links for:

```text
সকল সদস্য
মূল দল
কারিগরি ও প্রযুক্তি দল
পর্যালোচক দল
```

---

<a id="en12"></a>
## 12. Header Behavior

The header contains:

- brand logo
- site title
- language switch button
- dark/light toggle button
- mobile menu toggle
- search form
- primary menu/fallback menu

Current header brand logo file:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

Header logo CSS classes:

```text
.bnwp-header-brand
.bnwp-header-logo
.bnwp-header-title
```

Expected desktop layout:

```text
[logo] বাংলা উইকিসংযোগ
```

Expected mobile layout:

```text
[small logo] বাংলা উইকিসংযোগ
```

---

<a id="en13"></a>
## 13. Footer Behavior

The footer contains:

- brand logo
- site name
- site description
- contact button
- members button
- license/copyright notice

Current footer logo file:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

Footer logo CSS class:

```text
.bnwp-footer-brand-logo
```

Expected desktop layout:

```text
[logo] বাংলা উইকিসংযোগ
```

Expected mobile layout:

```text
[logo]
বাংলা উইকিসংযোগ
```

Footer buttons should use capsule styling if the footer action wrapper is added:

```text
.bnwp-footer-actions
```

Recommended footer action block:

```php
<div class="col-12 col-md-6 text-center text-md-end">
    <div class="bnwp-footer-actions">
        <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contact/')); ?>">
            যোগাযোগ
        </a>

        <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/persona/')); ?>">
            সদস্য
        </a>
    </div>
</div>
```

Recommended CSS:

```css
.bnwp-footer-actions {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 12px;
}

.bnwp-footer-actions .btn {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    padding: 9px 18px !important;
    border-radius: 18px !important;
    margin: 0 !important;
    width: auto !important;
}

@media (max-width: 576px) {
    .bnwp-footer-actions {
        justify-content: center;
        gap: 10px;
        margin-top: 12px;
    }

    .bnwp-footer-actions .btn {
        padding: 8px 16px !important;
        border-radius: 16px !important;
    }
}
```

---

<a id="en14"></a>
## 14. Dark/Light Mode

Dark/light mode is handled by:

```text
assets/js/colormode.js
```

Storage key:

```text
bnwp-theme
```

Supported values:

```text
light
dark
```

The script:

1. checks localStorage
2. checks system preference if no saved theme exists
3. sets `data-bs-theme` on the `<html>` element
4. changes the icon between sun and moon
5. toggles theme directly when the button is clicked

The dark/light button is direct-click only. It does not use a dropdown.

Button ID:

```text
colorModeTooglerBtn
```

Icon ID:

```text
theme-icon-active
```

---

<a id="en15"></a>
## 15. Homepage Structure

Homepage file:

```text
front-page.php
```

---

<a id="en151"></a>
### 15.1 Hero Section

Contains:

- main Bengali headline
- introductory paragraph
- two capsule buttons
- main Bangla WikiConnect logo

Button wrapper:

```text
.front-hero-buttons
```

Recommended button CSS:

```css
.front-hero-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: flex-start !important;
    align-items: flex-start !important;
    text-align: left !important;
}

.front-hero-buttons .btn {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    width: auto !important;
    min-width: auto !important;
    max-width: none !important;
    padding: 12px 24px !important;
    border-radius: 24px !important;
    margin: 0 !important;
}

@media (max-width: 576px) {
    .front-hero-buttons {
        flex-direction: column;
        gap: 12px;
        width: auto !important;
        justify-content: flex-start !important;
        align-items: flex-start !important;
        margin-top: 18px;
    }

    .front-hero-buttons .btn {
        width: auto !important;
        min-width: auto !important;
        max-width: none !important;
        padding: 12px 24px !important;
        border-radius: 24px !important;
        align-self: flex-start !important;
        text-align: center;
    }
}
```

---

<a id="en152"></a>
### 15.2 Quote/Stats Carousel

The homepage carousel currently includes:

```text
✨ এখন পর্যন্ত ১৬ লক্ষ+ শব্দ যোগ!
📝 ২০০০+ নিবন্ধ!
🖼️ ১০০+ চিত্র আপলোড!
👥 ২০+ আয়োজক!
🛠️ ২ টি কর্মশালা
📘 ২ টি টিউটোরিয়াল
```

These are hard-coded in `front-page.php` inside the `$quotes` array.

---

<a id="en153"></a>
### 15.3 Projects Section

Title:

```text
আমাদের প্রকল্পসমূহ
```

Query:

```php
new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => 6,
    'meta_key' => '_bnwp_language',
    'meta_value' => bnwp_current_language()
));
```

Fields used:

```text
_bnwp_logo
_bnwp_lead
```

Card content:

- project logo
- project title
- বিস্তারিত দেখুন link
- trimmed lead text

---

<a id="en154"></a>
### 15.4 Core Team Section

Title:

```text
মূল দল
```

Query:

```php
new WP_Query(array(
    'post_type' => 'persona',
    'posts_per_page' => 12,
    'meta_key' => '_bnwp_language',
    'meta_value' => bnwp_current_language(),
    'tax_query' => array(array(
        'taxonomy' => 'team',
        'field' => 'slug',
        'terms' => 'cot'
    )),
));
```

Required to show on homepage:

```text
Post Type: persona
Language: bn or en
Team slug: cot
Image URL: valid image URL
Wiki Username: optional but recommended
```

---

<a id="en155"></a>
### 15.5 Facebook Feed

The homepage includes a Facebook Page plugin for:

```text
https://www.facebook.com/banglawikiconnect
```

The Facebook SDK is loaded in `header.php`.

---

<a id="en156"></a>
### 15.6 Partners Section

The partners section is hard-coded in `front-page.php` and includes:

```text
Wikimedia Foundation
WikiNandini
Wikimedia Bangladesh
```

Images are stored in:

```text
assets/uploads/
```

---

<a id="en16"></a>
## 16. Archive and Single Page Behavior

<a id="en16projectarchive"></a>
### Project Archive

URL:

```text
/projects/
```

Template:

```text
archive-project.php
```

Each project card uses:

```text
Project title
_bnwp_lead
_bnwp_logo
permalink
```

Button text:

```text
বিস্তারিত দেখুন
```

Button class:

```text
.bnwp-capsule-btn
```

---

<a id="en16singleproject"></a>
### Single Project

Template:

```text
single-project.php
```

Uses:

```text
_bnwp_cover
_bnwp_lead
_bnwp_wiki
post content
```

If `_bnwp_wiki` exists, the page shows:

```text
উইকিতে দেখুন
```

---

<a id="en16personaarchive"></a>
### Persona Archive

URL:

```text
/persona/
```

Template:

```text
archive-persona.php
```

Each card uses:

```text
title
_bnwp_img
_bnwp_username
_bnwp_role
permalink
```

---

<a id="en16singlepersona"></a>
### Single Persona

Template:

```text
single-persona.php
```

Uses:

```text
_bnwp_cover
_bnwp_img
_bnwp_name
_bnwp_role
_bnwp_username
_bnwp_email
_bnwp_location
_bnwp_bio
post content
```

Also shows related blog posts where:

```text
post _bnwp_user = persona _bnwp_username
```

---

<a id="en17"></a>
## 17. CSS Files

There are two important CSS locations.

<a id="en171"></a>
### 17.1 Root `style.css`

Path:

```text
bnwp-wikiconnect/style.css
```

Purpose:

- WordPress theme identification
- final override CSS
- quick fixes
- responsive patches

Use this file for most manual changes.

---

<a id="en172"></a>
### 17.2 Main Theme CSS

Path:

```text
bnwp-wikiconnect/assets/css/style.css
```

Purpose:

- main theme visual design
- base layout styling
- original theme-specific styles

Do not use this for quick fixes unless the change belongs to the main design system.

---

<a id="en18"></a>
## 18. Logo Files

Important logo assets:

```text
assets/uploads/Bangla_WikiConnect_LOGO.png
assets/uploads/Bangla_WikiConnect_Logo_small.png
assets/uploads/Bangla_WikiConnect_Logo_-_BN.png
assets/uploads/Bangla_WikiConnect_Logo_-_EN.png
```

Current header/footer logo:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

Hero logo:

```text
assets/uploads/Bangla_WikiConnect_LOGO.png
```

If an image becomes too large, check for global CSS affecting all images. The theme has:

```css
img {
  max-width: 100%;
}
```

If needed, control specific logos with dedicated classes:

```css
.bnwp-header-logo {
    width: 36px !important;
    max-width: 36px !important;
}

.bnwp-footer-brand-logo {
    width: 42px !important;
    max-width: 42px !important;
}
```

---

<a id="en19"></a>
## 19. Recommended Mobile Padding Patch

For better mobile spacing, add this to root `style.css`:

```css
@media (max-width: 576px) {
    main .container {
        padding-left: 24px !important;
        padding-right: 24px !important;
    }
}
```

Use `24px` first. Increase to `30px` only if the layout still feels cramped.

---

<a id="en20"></a>
## 20. Installation

<a id="en201"></a>
### 20.1 Install Through WordPress Admin

1. Go to WordPress admin.
2. Open:

```text
Appearance → Themes → Add New → Upload Theme
```

3. Upload:

```text
bnwp-wikiconnect.zip
```

4. Click:

```text
Install Now → Activate
```

5. Visit:

```text
Settings → Permalinks
```

6. Click:

```text
Save Changes
```

This refreshes rewrite rules for:

```text
/projects/
/persona/
/teams/cot/
```

---

<a id="en202"></a>
### 20.2 Install Through File Manager/FTP

Upload the theme folder to:

```text
wp-content/themes/bnwp-wikiconnect/
```

Then activate it from:

```text
Appearance → Themes
```

---

<a id="en21"></a>
## 21. Live Testing on InfinityFree

Recommended path:

```text
htdocs/wp-content/themes/bnwp-wikiconnect/
```

If replacing an old copy:

1. Activate another theme temporarily if needed.
2. Delete old theme folder.
3. Upload new ZIP/folder.
4. Extract ZIP inside `themes/`.
5. Confirm correct path:

```text
htdocs/wp-content/themes/bnwp-wikiconnect/style.css
```

6. Delete the ZIP after extraction.
7. Activate theme from WordPress admin.
8. Clear cache.

---

<a id="en22"></a>
## 22. Content Setup Checklist

After activating the theme, create or verify these pages/posts.

<a id="en22requiredpages"></a>
### Required Pages

| Page | Suggested Slug | Template |
|---|---|---|
| Home | `/` | `front-page.php` |
| Contact | `/contact/` | `page-contact.php` |
| Posts/Blog | `/posts/` | `page-posts.php` |
| Search | `/search/` | `page-search.php` |
| About | `/about/` | normal page |
| Newsroom | `/newsroom/` | normal page |

<a id="en22optionalenglishpages"></a>
### Optional English Pages

| Bengali Page | English Page |
|---|---|
| `/about/` | `/about-en/` |
| `/newsroom/` | `/newsroom-en/` |
| `/posts/` | `/posts-en/` |

---

<a id="en23"></a>
## 23. Project Setup Checklist

For each project:

1. Go to:

```text
Projects → Add New
```

2. Add title.
3. Add content if needed.
4. Fill Project Details:

```text
Logo URL
Cover URL
Wiki URL
Lead
Language
```

5. Publish.
6. Check:

```text
/projects/
```

7. Check homepage section:

```text
আমাদের প্রকল্পসমূহ
```

---

<a id="en24"></a>
## 24. Team Member Setup Checklist

For each member:

1. Go to:

```text
Team Members → Add New
```

2. Add title.
3. Fill Team Member Details:

```text
Display Name
Role
Wiki Username
Location
Email
Image URL
Short Bio
Language
```

4. Assign a team taxonomy.
5. For homepage core team, assign:

```text
Team name: মূল দল
Team slug: cot
```

6. Publish.
7. Check:

```text
/persona/
/teams/cot/
```

---

<a id="en25"></a>
## 25. Image Handling Rules

Use direct image URLs in these fields:

```text
_bnwp_logo
_bnwp_cover
_bnwp_img
```

Best source:

```text
Media → Add New → Upload → Copy URL
```

Good URL endings:

```text
.jpg
.jpeg
.png
.webp
.svg
```

If SVG does not display correctly, use PNG instead.

Do not use normal webpage URLs as image URLs.

Wrong:

```text
https://commons.wikimedia.org/wiki/File:Example.svg
```

Better:

```text
https://commons.wikimedia.org/wiki/Special:FilePath/Example.svg
```

Best:

```text
https://upload.wikimedia.org/wikipedia/commons/....svg
```

---

<a id="en26"></a>
## 26. Permalink Rules

After activating or changing custom post type/taxonomy code, always flush permalinks:

```text
WordPress Admin → Settings → Permalinks → Save Changes
```

This fixes 404 errors for:

```text
/projects/
/persona/
/teams/cot/
```

---

<a id="en27"></a>
## 27. Cache Rules

When editing theme files on a live host, clear cache after every major change.

Clear:

```text
SpeedyCache
Browser cache
Hosting cache, if available
Cloudflare cache, if connected
```

Hard refresh shortcuts:

```text
Windows/Linux: Ctrl + F5
Mac: Cmd + Shift + R
```

---

<a id="en28"></a>
## 28. Development Workflow

Recommended Git workflow:

```bash
git checkout test
```

Make changes, then:

```bash
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

Recommended branches:

```text
master → stable/live-ready
test   → experimental/development
```

---

<a id="en29"></a>
## 29. Packaging Rules

When creating a ZIP for WordPress upload, the ZIP should contain exactly one top-level theme folder:

```text
bnwp-wikiconnect.zip
└── bnwp-wikiconnect/
    ├── style.css
    ├── functions.php
    ├── header.php
    ├── footer.php
    └── ...
```

Do not package like this:

```text
bnwp-wikiconnect.zip
└── bnwp-wikiconnect/
    └── bnwp-wikiconnect/
        ├── style.css
        └── functions.php
```

Do not include the full WordPress installation.

Exclude:

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

The distributed ZIP should include only theme files.

---

<a id="en30"></a>
## 30. Troubleshooting

<a id="en30themedoesnotappearinwordpress"></a>
### Theme does not appear in WordPress

Check:

```text
wp-content/themes/bnwp-wikiconnect/style.css
```

The file must contain a valid WordPress theme header.

---

<a id="en30siteshows404onprojectsorpersona"></a>
### Site shows 404 on `/projects/` or `/persona/`

Go to:

```text
Settings → Permalinks → Save Changes
```

---

<a id="en30homepagedoesnotshowprojectposts"></a>
### Homepage does not show Project posts

Check each Project post:

```text
Status: Published
Language: bn or en
Logo URL: valid direct image URL
Lead: not empty
```

Also check current language. Bengali content appears on normal URL. English content appears with:

```text
?lang=en
```

---

<a id="en30homepagedoesnotshowcoreteammembers"></a>
### Homepage does not show core team members

Check each Team Member post:

```text
Status: Published
Language: bn or en
Team slug: cot
Image URL: valid direct image URL
```

The homepage core team query depends on:

```text
team slug = cot
```

---

<a id="en30imagenotshowing"></a>
### Image not showing

Check whether the URL is a direct image URL.

Do not use:

```text
https://commons.wikimedia.org/wiki/File:Something.png
```

Use:

```text
https://commons.wikimedia.org/wiki/Special:FilePath/Something.png
```

or upload image to WordPress Media Library.

---

<a id="en30logobecomeshuge"></a>
### Logo becomes huge

Use a specific logo class with fixed width.

Example:

```css
.bnwp-footer-brand-logo {
    width: 42px !important;
    height: auto !important;
    max-width: 42px !important;
    display: inline-block !important;
    flex-shrink: 0;
}
```

---

<a id="en30buttonbecomesfullwidthonmobile"></a>
### Button becomes full-width on mobile

Remove CSS like:

```css
width: 100%;
align-items: stretch;
```

Use:

```css
width: auto !important;
align-items: flex-start !important;
```

---

<a id="en30changesnotvisible"></a>
### Changes not visible

Clear:

```text
SpeedyCache
Browser cache
```

Then hard refresh.

---

<a id="en31"></a>
## 31. Security and Code Rules

The theme follows common WordPress safety practices:

- direct file access blocked with `ABSPATH` checks
- URLs escaped using `esc_url()`
- text escaped using `esc_html()` and `esc_attr()`
- meta save protected with nonce verification
- autosave ignored during meta save
- edit permission checked before saving metadata

Do not edit WordPress core files:

```text
wp-admin/
wp-includes/
```

Only edit the theme folder:

```text
wp-content/themes/bnwp-wikiconnect/
```

---

<a id="en32"></a>
## 32. Known Limitations

- Language support is query/meta based, not a full multilingual plugin system.
- Translation matching depends on slug pairs like `about` and `about-en`.
- Project and persona fields are simple text inputs, not media selectors.
- Some homepage sections are hard-coded in `front-page.php`.
- Facebook feed depends on Facebook external script availability.
- Bootstrap Icons and Bootstrap JS are loaded from CDN.

---

<a id="en33"></a>
## 33. Recommended Future Improvements

Useful future upgrades:

1. Add media uploader buttons for Logo URL, Cover URL, and Image URL fields.
2. Move homepage text and partner logos into Customizer or Options page.
3. Add proper translation fields instead of slug-based language switching.
4. Add pagination or load-more for homepage projects/team members.
5. Add schema markup for organization and profiles.
6. Add fallback for external CDN assets.
7. Add `languages/` folder with `.pot` file for real translation workflow.
8. Add theme screenshot.
9. Add proper build/package script that excludes `.git` automatically.
10. Add documentation screenshots for admin content entry.

---

<a id="en34"></a>
## 34. Quick Admin Reference

<a id="en34addproject"></a>
### Add Project

```text
Projects → Add New
```

Required fields:

```text
Title
Logo URL
Lead
Language
```

Optional fields:

```text
Cover URL
Wiki URL
Content
```

---

<a id="en34addteammember"></a>
### Add Team Member

```text
Team Members → Add New
```

Required fields:

```text
Title
Image URL
Language
Team
```

Recommended fields:

```text
Display Name
Role
Wiki Username
Location
Short Bio
```

---

<a id="en34addcoreteammembertohomepage"></a>
### Add Core Team Member to Homepage

```text
Team Members → Add New/Edit
Team: মূল দল
Team slug: cot
Language: bn
Publish
```

---

<a id="en34editheaderfooterlogo"></a>
### Edit Header/Footer Logo

Logo file currently used:

```text
assets/uploads/Bangla_WikiConnect_Logo_small.png
```

Edit in:

```text
header.php
footer.php
```

Control size in:

```text
style.css
```

---

<a id="en34clearcache"></a>
### Clear Cache

```text
SpeedyCache → Clear Cache
Browser hard refresh
```

---

<a id="en35"></a>
## 35. License Notice

Footer notice currently states that images and video content are released under CC BY-SA 4.0 unless a separate license is mentioned, while text content is treated as intellectual property of the site.

Current footer year is generated dynamically using:

```php
<?php echo esc_html(date_i18n('Y')); ?>
```

---

<a id="en36"></a>
## 36. Repository Rule

This repository should contain only the custom theme files.

Do not commit:

```text
Full WordPress installation
Database files
wp-config.php
plugin folders
upload folders with private media
server credentials
hosting credentials
```