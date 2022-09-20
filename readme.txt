=== grigora-blocks ===
Contributors: latracal
Tested up to: 6.0
Requires at least: 5.9
Requires PHP: 7.4
Version: 2.08.003
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Copyright: latracal

Grigora Blocks. Go to block theme for Bloggers, where you can start effortlessly. The theme supports dynamic sidebar, full-page, and wide-page layouts. Moreover, we've added 62 block styles for buttons, columns, lists, quotes, separators, and headings, making customization easier.

All the CSS is located in scss/ folder.

Command to create a export zip: git archive --format zip --output grigora-blocks.zip <branch-name>

== Installation ==
1. Visit “Appearance > Themes > Add New”
2. Search for “Grigora Blocks”
3. Install and Activate

License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

All files, unless otherwise stated, are released under the GNU General Public
License version 2.0 (http://www.gnu.org/licenses/gpl-2.0.html)

Grigora Blocks, Copyright 2019-2022 Latracal Solutions Private Limited.
Grigora Blocks is licensed under the GNU General Public License v2 or later.

== Changelog ==

All changes will be noted here

== v2.08.003 ==
Bug Fix: Removed the sidebar template area registry.

== v2.08.002 ==
Bug Fix: Hook name was echoed in block editor window.

== v2.08.001 ==
Major Addition: You can now add Google fonts on Theme Level.

== v2.07.001 ==
Bug Fix: Site Title styles were not working.

== v2.07.000 ==
Addition: Plugin recommendation tab.
Addition: 3 new templates - Page Builder - No Header, Page Builder - No Footer, Page Builder - Only Content
Improvement: Conditional inline CSS loading for block styles.
Improvement: Removed the block styles css from global.scss

== v2.06.000 ==
Change: Moved the patterns from patterns/ to grigora_patterns/ to avoid auto registration error.

== v2.05.005 ==
Bug fix: Fixed a major bug where button style "Button with effect background" was causing a pseudo element to span whole window.

== v2.05.004 ==
Addition: Page Builder Template for Page and Posts

== v2.05.003 ==
Addition: Style for group and column - "Shadow #2"
Improvement: Changed name of style - "Column with border" to "Column with border radius"
Improvement: WPforms base styling compatibility. ( scss/helpers/_compatibility.scss )

== v2.05.002 ==
Addition: Transparent search bar style
Bug fix: Transparent search input removed

== v2.05.001 ==
Addition: New Pattern (Slanting Cover) to replicate the screenhot
Addition: Translation-ready
Addition: RTL Ready
Addition: Input boxes css (scss/helpers/forms)
Addition: E-commerce support
Bug fix: Nested list margin bottom fix
Bug fix: Pingback and Traceback comments margin fix
Bug fix: Css fixes for list type of blocks
Bug fix: Input type search -> background color Transparent
Bug fix: Transparent header inside cover was forced to 100% width causing two lines in same row
Improvement: Hide commentbox on post, page if its empty or comments are not allowed
Improvement: Screenshot Tweaks
Improvement (devs): Load unminified css if debug true

== v2.04.001 ==
Major Update: CSS is now normalized and individual CSS is added to elements. ( scss/helpers/ )
Addition: lx-large font size added (2.25 rem)
Addition: No text decoration style for post-title
Addition: Seperator right align style
Addition: Image border style
Addition: Column & Group hover effect style
Addition: Style variation added (dark.json)
Addition (For devs): Removed VScode extension dependency. Used gulp automation for scss parsing and minification. Compiled css can be found in assets/css/ folder.
Bug fix: ul inside post content was not indented. Solution: Change the inherit post content to false
Bug fix: Comment avatar indentation fix
Bug fix: Check broken styles in editor window
Improvement: Make featured image clickable in archives page
Improvement: Increase the space between archive post meta and excerpt
Improvement: Fix the empty space after post content
Improvement: Set default font size for headings
Improvement: Fix footer color
Improvement: 4% to 2% top and bottom padding on sidebar - archives, index and search pages
Improvement (SEO): Single post heading to h1 - page, post

== v2.03.003 ==
1. Added meta data to pattern files to follow new gutenburg guidelines.
2. Shifted register-block-patterns.php from patterns/ to inc/
3. Added styles -
3.1 core/columns - No gap
3.2 core/cover - Image Zoom
3.3 core/image - Image Zoom

== v2.03.002 ==
1. Added styles -
1.1 core/navigation-link - Custom Link Button
1.2 core/site-title - No Underline
1.3 core/group - Hover Shadow
1.4 core/list - No Marker No Underline + Hover Effect
1.5 core/heading - No text decoration
1.6 core/separator - Align Left

== v2.03.001 ==
1. Rollback from 2.02x version which was adding demo import.
2. Fixed the forced 30px padding for sidebar. Now the sidebar group has padding assigned to its settings.

== v2.01.007 ==
1. Changed Screenshot Image
2. Added 7 More Footer Template Parts
3. Theme URI Updated

== v2.01.006 ==
1. Remote pattern images to local assets/images/ folder. ( https://themes.trac.wordpress.org/ticket/115430 )

== v2.01.005 ==
1. No Sidebar No Background Template for Posts and Pages

== v2.01.004 ==
1. Testimonial Patterns

== v2.01.002 ==
1. Css fix for main body classes
2. Hero patterns added
3. Transparent Header Hero patterns added
4. Fieldset form css added
5. Transparent header template part


= SVGs used in Grigora Blocks  =
Tags Icon in Tags Style 3: Bootstrap Icons library (bi-tag). MIT License ( https://github.com/twbs/icons/blob/main/LICENSE.md )
List Icon in List Style 3: Icon is created by the team and permits anyone to use it. GPLv2 License ( license.txt in same directory)
3 Icons in Seperator Stlye 1: Public Codepen. Pen Link: https://codepen.io/anthony-liddle/pen/eYpRavv  Mit License. ( https://blog.codepen.io/documentation/licensing/ )

= Normalize CSS =
Grigora Blocks uses Normalize CSS from https://github.com/tomusborne/generatepress/blob/master/sass/base/_reset-flex.scss.
Licensed under GPLv2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )

= Screenshot Licenses =
Screenshot image is snapshot of actual website created using Grigora Blocks. The above section is a cover block (added as a pattern in theme) while bottom one is simple 3 columns.

== Site Icon ==
The site icon is taken from bootstrap icon pack and added a linear gradient over it. 
Bootstrap Icons library (bi-boombox-fill). MIT License ( https://github.com/twbs/icons/blob/main/LICENSE.md )

== Screenshot images ==
Images from pxhere.com. CC0 Public Domain:
https://pxhere.com/en/photo/678391 - Cover Image
Banner illustrations used are created by Latracal Solutions and released under Creative Commons ( CC0 ) License. - https://wpgrigora.com/wp-content/uploads/2022/05/banner-illustration-2-800-min.png
Icons from iconfinder.com (Web Design Creatives). GPL License.
https://www.iconfinder.com/icons/35189/sscissor_icon - Column 1 Icon
https://www.iconfinder.com/icons/35204/clock_time_wait_icon - Column 2 Icon
https://www.iconfinder.com/icons/35125/hoo_icon - Column 3 Icon

== Theme Base ==
Grigora Block is derived from Full site editing starter theme by Carolina Nymark
https://fullsiteediting.com
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== External Images used in Hero patterns ==
Images from pxhere.com. CC0 Public Domain:
https://pxhere.com/en/photo/1656606 - Parallax Card + Centered Hero Cover
https://pxhere.com/en/photo/893290 - Request a Quote Hero Background
https://pxhere.com/en/photo/591898 - Color Hue Hero Background Cover
https://pxhere.com/en/photo/1014853 - Person Showcase Hero Background
https://pxhere.com/en/photo/557162 - Person Showcase Hero Portrait

== External Images used in Testimonial patterns ==
Images from pxhere.com. CC0 Public Domain:
https://pxhere.com/en/photo/145352 - Testimonial 1 Cover 1
https://pxhere.com/en/photo/64946 - Testimonial 1 Cover 2
https://pxhere.com/en/photo/836 - Testimonial 1 Cover 3
https://pxhere.com/en/photo/750013 - Testimonial 3 Face 1
https://pxhere.com/en/photo/625568 - Testimonial 3 Face 2
https://pxhere.com/en/photo/635897 - Testimonial 3 Face 3


