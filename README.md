# Underskeleton

Underscores ( _s ) + Skeleton Boilerplate = Fast to load with a minimalist css grid for your next WordPress Theme.

## Changelog

        == v0.1.2 June 16th 2016 ==
               - Add Custom Logo theme support for WordPress 4.5+
               - Add pt-BR Translation.
               - Minor fixes and tweaks.

        == v0.1.1 May 2nd 2016 ==
               - First stable version, with minor fixes from previous.

        == v0.1.0 May 1st 2016 ==
               - First version.

## About

Underskeleton is a starter theme with minimalist, dead simple css grid system and just enough styling to get starter with your next awesome WordPress theme.

It got most of the _s PHP and JS files + Skeleton styles and grid system.

#### Want to contribute?

Underskeleton is in it's early stages and a lot has to be done yet.

Watch or Star the repository to keep up to date. Fork the project, make the change you want to see. Or send me an e-mail on [diegoversiani@gmail.com](mailto:diegoversiani@gmail.com).

## Features

- Combines Underscore’s PHP/JS files and Skeleton Boilerplate HTML/CSS.
- Comes with [Skeleton-Sass 2.0.4](https://github.com/WhatsNewSaes/Skeleton-Sass) (by [Seth Coelen](http://sethcoelen.com/)) that features a stable version of Skeleton 2.0.4 by [Dave Gamache](http://www.davegamache.com).
- Uses a single and minified CSS file for all the basic styling.
- Uses a single and minified JS file for all the basic theme's scripts.
- Simple RTL file.
- Jetpack ready.
- Translation ready.

#### Features to come

Things we plan to include in later versions.

- WooCommerce support.
- A website to download the project with your new theme identification, just as [underscores.me](http://underscores.me) does.

Have you got a feature request? Please [open an issue](https://github.com/diegoversiani/underskeleton/issues) on Github!

## Installation

- Download Underskeleton zip file
- Extract files and change the folder `underskeleton-master` to `underskeleton` (or one of your choice)
- Upload it into your WordPress themes subfolder: `/wp-content/themes/`
- Login to your WordPress backend
- Go to Appearance → Themes
- Activate the Underskeleton theme

#### Changing theme identification

To change Underskeleton theme identification to your own you need to replace any 'underskeleton' text with your theme id and, optionally, replace the theme name as well.

- Open the project in the editor of your choice (i.e [Sublime Text](https://www.sublimetext.com/))
- Replace all 'underskeleton' matches with 'your_theme_id' (**case sensitive**)
<img src='http://getunderskeleton.com/images/replace_all_id.png'>
- Optionally, replace all 'Underskeleton' matches with 'Your Theme Name' (**case sensitive**)
<img src='http://getunderskeleton.com/images/replace_all_id.png'>
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
    └── underskeleton.js  // Uncompiled underskeleton custom scripts
  └── sass
    └── theme             // Uncompiled Sass files for your theme
    └── theme.scss        // Uncompiled theme scss files that basically @imports all other scss files
  └── src                 // Dependencies files
  └── style.css           // WordPress theme identification file
  ...
```

## Developer Tools

Underskeleton is developed with NPM, Bower, Gulp, SASS and Browser Sync. You can develop without these tools, but its just a lot faster with them ;)

### Installing Dependencies
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
$ gulp copy-assets
```

### Running
To work and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in `/gulpfile.js` file in the beginning of the file:
```javascript
var browserSyncOptions = {
    proxy: "localhost/underskeleton/", // <----- CHANGE HERE
    notify: false
};
```
- then run: `$ gulp watch-bs`

## License

Underskeleton is distributed under the terms of Open Source MIT License (http://opensource.org/licenses/mit-license.php).

Any third party softwares included in this project are licensed by their own creators.

## Acknowledgement

Skeleton was created by [Dave Gamache](https://twitter.com/dhg) for a better web.

Skeleton-Sass was created by [Seth Coelen](http://sethcoelen.com) for a better Skeleton.

Underskeleton was created by [Diego Versiani](http://diegoversiani.me) for a better WordPress.

<a href='https://ko-fi.com/A0212ZQ' target='_blank'><img height='32' style='border:0px;height:32px;' src='https://az743702.vo.msecnd.net/cdn/kofi3.png?v=a' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>