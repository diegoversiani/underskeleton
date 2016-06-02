// Defining base pathes
var basePaths = {
    bower: './bower_components/',
    sass: './_sass/',
    fonts: './fonts/'
};

// Defining requirements
var gulp = require('gulp');
// var plumber = require('gulp-plumber');
// var sass = require('gulp-sass');
// var watch = require('gulp-watch');
// var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
// var concat = require('gulp-concat');
// var uglify = require('gulp-uglify');
// var merge2 = require('merge2');
// var ignore = require('gulp-ignore');
// var rimraf = require('gulp-rimraf');

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