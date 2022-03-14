=== grigora ===
Contributors: latracal
Tested up to: 5.9
Requires at least: 5.9
Requires PHP: 7.2
Version: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Copyright: latracal

A full site editing theme.

== Guide ==

=== Folder structure ===

- Assets. Images, JavaScript, and CSS files.
- Inc. Filters, fonts, block variations, registered block styles.
- Parts. HTML template parts.
- Patterns. Block pattern examples (register and unregister patterns and pattern categories.)
- Styles. Global style variations.
- Templates. HTML block templates.

functions.php -Used to enqueue styles and add theme support.
index.php     -Required to activate the theme.
style.css     -Required to activate the theme.
theme.json    -Settings and default styles.
license.txt   -GPL v2
readme.txt    -Information about the theme.
screenshot.png

=== Tooling ===

You can install the tools by opening yor terminal in the themes root folder
and entering the following commands:
npm install
composer install

==== CSS ====

This theme includes both human-readable and minified CSS inside the assets/css folder.
For improved performance, the theme loads the minified CSS on the front and in the editor.


To compare your code against the CSS coding standards, use the command: npm run lint:css

==== PHP ====

To compare your code against the PHP coding standards,
use the command: composer standards:check

For PHPStan analysis, use the command: composer analyze

==== JavaScript ====

To compare your code against the JavasCript coding standards,
use the command: npm run lint:js

== Changelog ==
1.0.0 Initial release

== Licence ==
grigora is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources used to build this theme ==

* Twenty Twenty-Two WordPress theme (C) WordPress.org
License: GNU General Public License v2.0 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* Q WordPress theme (C) Ari Stathopoulos
License: GNU General Public License v2.0 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* Underscores https://underscores.me/, (C) Automattic, Inc.
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

* Webfonts Loader https://github.com/WPTT/webfont-loader
License: MIT
License URI: https://github.com/WPTT/webfont-loader/blob/master/LICENSE

* Full site editing starter theme by Carolina Nymark
https://fullsiteediting.com
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Images
Images from pxhere.com. Public domain:
https://pxhere.com/en/photo/927190 -woman with curly hair
https://pxhere.com/en/photo/1049910 -woman with t-shirt
https://pxhere.com/en/photo/1604358 -woman with headphones
