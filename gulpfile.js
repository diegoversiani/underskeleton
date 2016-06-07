// Defining base pathes
var basePaths = {
    bower: './bower_components/',
    sass: './_sass/',
    fonts: './fonts/'
};

// Defining requirements
var gulp = require('gulp');
var rename = require('gulp-rename');

// Run: 
// gulp copy-assets. 
// Copy all needed dependency assets files from bower_component assets
// to corresponding dev folder.
// Run this task after bower install or bower update
gulp.task('copy-assets', function() {

  // skeleton-scss
  gulp.src(basePaths.bower + 'skeleton-scss/scss/**/*.scss')
    .pipe(gulp.dest(basePaths.sass + '/skeleton-scss'));

  // FontAwesome
  gulp.src(basePaths.bower + 'fontawesome/scss/**/*.scss')
    .pipe(gulp.dest(basePaths.sass + '/fontawesome'));
  gulp.src(basePaths.bower + 'fontawesome/fonts/**/*.*')
    .pipe(gulp.dest(basePaths.fonts));

});