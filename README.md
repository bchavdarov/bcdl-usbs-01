[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

BCDL Underscores and Bootstrap starter theme
===

Starter theme compiled from Underscores and Bootstrap. 


Installation
---------------
The installation is the same as described in:

- [https://github.com/Automattic/_s](https://github.com/Automattic/_s)
- [https://github.com/twbs/bootstrap](https://github.com/twbs/bootstrap)

for development first clone the repository then run

<code>npm install</code>

This will install all dependencies, including Bootstrap.

### Creating custom style
Only edit <code>sass/_custom.scss</code> to create new styles. They will be compiled into theme.css



### Requirements

`_s` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start (from Underscores)

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: _s` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `_S_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.


### Available CLI commands (from Underscores and me)

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `Composer lint:php` : checks all PHP files for syntax errors.
- `Composer make-pot` : generates a .pot file in the `language/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run bcdlcss` : compiles the BCDL theme SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

These are the tools offered from Underscores, Bootstrap and me. Enjoy and make a good theme.

# bcdl-usbs-01
