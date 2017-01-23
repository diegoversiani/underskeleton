# Underskeleton

Mobile Friendly, fast and easy to work with. Underskeleton is the WordPress Starter Theme for your next WordPress Theme or Website. It has beautiful typography, custom colors options and a whole set of editing options in the content editor.

Underskeleton is designed to be a starter/base theme and comes with many developer tools. 


Visit the Project Website: http://getunderskeleton.com


Why Underskeleton?

- 11% of internet users use only mobile
- only 10% on internet users use only desktop
- since 2015 people search more on mobile devices than desktop
- you only have 8 seconds to make an impression, make your page load fast

## Stable version

The `master` branch is used for ongoing changes and integration of feature branches.

The stable version is aways the latest release and the version you get at WordPress Themes Directory, [see releases](https://github.com/diegoversiani/underskeleton/releases).

## Changelog
        == v1.0.5 January 23rd 2017 ==
               - Add WooCommerce support.
               - Fix footer sidebars/widget areas.

        == v1.0.4 January 23rd 2017 ==
               - Add it-IT Translation (thanks to @Enrico204).
               - Add editor formats for Layout, Text Columns, Color blocks and Buttons.
               - Mark widget areas as DEPRECATED for future removal: 'Homepage Before Content', 'Homepage After Content', 'Posts Lists'.
               - Update theme description.
               - Update pt-BR Translation.
               - Fix code block styles inside pre elements.
               - Fixed tertiary color css.
               - Fixed BrowserSync pattern to watch files in subfolders.
               - Fixed npm dependencies for dev tools.

        == v1.0.3 December 13th 2016 ==
               - Add back `header text color` core functionality.
               - Remove `post-formats` support.
               - Remove `search-form` from html5 theme support as theme includes custom search form.
               - Remove custom logo for login page - plugin territory.
               - Fixed custom header image feature.
               - Fixed editor-style enqueue.
               - Fixed escaping issues.
               - Fixed translation issues.
               - Fixed theme tags.

        == v1.0.1 December 10th 2016 ==
               - Change license information for WordPress Theme Directory.
               - Add full-width page template.
               - Add color settings to customizer.
               - Fixed enqueue editor styles.

        == v1.0.0 September 22nd 2016 ==
               - Lauched theme downloader in the website http://getunderskeleton.com/download
               - Prepared theme for theme downloader
               - Change licence to GPL, matching WordPress and making licensing easier to understand
               - Add footer widget areas
               - Add default styling to navigation links
               - Add settings to allow change of container on header, content and footer
               - Add scss files for various elements
               - Add custom logo to login page, being same user's selected custom logo
               - Add Customizer Selective Refresh support for Widgets
               - Add homepage template with widget areas
               - Add editor styles to match theme's styles
               - Fixed date field styles to match other input types
               - Fixed textarea height to match number of rows when specified
               - Fixed image alignment inside page or post content
               - Remove 'Raleway' as default font-family, changed to sans-serif

        == v0.1.2 June 16th 2016 ==
               - Add Custom Logo theme support for WordPress 4.5+
               - Add pt-BR Translation.
               - Minor fixes and tweaks.

        == v0.1.1 May 2nd 2016 ==
               - First stable version, with minor fixes from previous.

## Features

- Widgets Selective Refresh, Custom Logo and Editor Style support
- Translation ready, comes with en-US and pt-BR.
- Combines Underscore’s PHP/JS files and Skeleton Boilerplate HTML/CSS.
- Single minified CSS and JS file for all the basic stuff.
- Simple RTL file.
- Jetpack ready.
- Ready for development with npm, bower, gulp, browser-sync and css autoprefixer

#### Features to come

Things we plan to include in later versions.

- Skin and Bones, pieces of layout and functionality you can add to your theme with ease.
- WooCommerce support.

Have a feature request? Please [open an issue](https://github.com/diegoversiani/underskeleton/issues) at Github!

## Installation

Create your copy of Underskeleton and name it to your taste at [getunderskeleton.com/download](http://getunderskeleton.com/download), copy from [latest release](https://github.com/diegoversiani/underskeleton/releases). Then:

- Login to your WordPress backend
- Go to Appearance → Themes → Add New → Upload Theme
- Select your theme file → Install Now
- Activate the theme


#### Manual Installation

- Download Underskeleton zip file from GitHub
- Extract files and change the folder name from `underskeleton-master` to `underskeleton` (or one of your choice)
- Upload it into your WordPress themes subfolder: `/wp-content/themes/`
- Login to your WordPress backend
- Go to Appearance → Themes
- Activate the Underskeleton theme

##### Changing theme identification

To change Underskeleton theme identification to your own you need to replace any 'underskeleton' text with your theme id and, optionally, replace the theme name as well.

- Open the project in the editor of your choice (i.e [Sublime Text](https://www.sublimetext.com/))
- Replace all 'underskeleton' matches with 'your_theme_id' (**case sensitive**) ([screenshot](http://getunderskeleton.com/images/replace_all_id.png))
- Optionally, replace all 'Underskeleton' matches with 'Your Theme Name' (**case sensitive**) ([screenshot](http://getunderskeleton.com/images/replace_all_name.png))
- That is it.

## Folder structure

Most of the folder structure is inherited from _s. Its files are well documented, have a look ;)

Bellow are just Underskeleton's file structure

```
underskeleton/
  └── css                            
    └── theme.css         // Theme styles, Skeleton and Underskeleton stuff, include your styles 
    └── theme.min.css     // Minified version of theme styles, this is the file served to the browser. 
  └── js
    └── assets            // Folder for assets from other projects, ie _s.
    └── *.js              // Uncompiled underskeleton scripts
  └── sass
    └── theme             // Uncompiled Sass files for your theme
    └── theme.scss        // Uncompiled theme scss files that basically @imports all other scss files
  └── style.css           // WordPress theme identification file
  ...
```

## Developer Tools

Underskeleton is developed with NPM, Bower, Gulp, SASS, Browser Sync and Css Autoprefixer. You can develop without these tools, but its just a lot faster with them ;)

#### Installing Dependencies
- Make sure you have installed `Node.js`, `Bower`, and `Browser-Sync` on your computer globally. To install Bower and Browser-Sync, run*:
```
# May require root/administrator permissions

$ npm install -g bower
$ npm install -g browser-sync
```
- Open your terminal and browse to the location of your Underskeleton copy
- Run these comands:
```
# install node.js packages, install bower dependencies, copy assets to source folder

$ npm install
$ bower install
```

#### Running
To work and compile your SASS and JS files on the fly, run:

`$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in `/gulpfile.js` file in the beginning of the file:
```javascript
var browserSyncOptions = {
    proxy: "localhost/underskeleton/", // <----- CHANGE HERE
    notify: false
};
```
- then run: `$ gulp watch-bs`

If you just want to build once:

`$ gulp build-css` or
`$ gulp build-scripts`

#### Want to contribute?

Underskeleton is in it's early stages and a lot has to be done yet.

Watch or Star the repository and join [our newsletter](http://eepurl.com/cgTUhv). Fork the project, make the change you want to see. Or email me at [diegoversiani@gmail.com](mailto:diegoversiani@gmail.com).

## Credits and License

Underskeleton WordPress Theme, Copyright 2016 Diego Versiani
Underskeleton is distributed under the terms of the GNU GPL

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* Skeleton-Sass http://github.com/WhatsNewSaes/Skeleton-Sass/, (C) 2016 Seth Coelen, [MIT](http://opensource.org/licenses/MIT)
* Skeleton http://github.com/dhg/Skeleton/, (C) 2014 Dave Gamache, [MIT](http://opensource.org/licenses/MIT)

## Acknowledgement

Skeleton was created by [Dave Gamache](https://twitter.com/dhg) for a better web.

Skeleton-Sass was created by [Seth Coelen](http://sethcoelen.com) for a better Skeleton.

Underskeleton was created by [Diego Versiani](http://diegoversiani.me) for a better WordPress.

<a href='https://ko-fi.com/A0212ZQ' target='_blank'><img height='32' style='border:0px;height:32px;' src='https://az743702.vo.msecnd.net/cdn/kofi3.png?v=a' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>