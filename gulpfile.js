// Defining base pathes
var basePaths = {
    bower: './bower_components/',
    dev: './src/'
};

// Defining requirements
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var merge2 = require('merge2');
var ignore = require('gulp-ignore');
var rimraf = require('gulp-rimraf');

// Run: 
// gulp sass
// Compiles SCSS files in CSS
gulp.task('sass', function () {
    gulp.src('./sass/*.scss')
        .pipe(plumber())
        .pipe(sass())
        .pipe(gulp.dest('./css'));
});

// Run: 
// gulp watch
// Starts watcher. Watcher runs gulp sass task on changes
gulp.task('watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
    gulp.watch('./css/theme.css', ['cssnano']);
});

// Run: 
// gulp nanocss
// Minifies CSS files
gulp.task('cssnano', ['cleancss'], function(){
  return gulp.src('./css/*.css')
    .pipe(plumber())
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano({discardComments: {removeAll: true}}))
    .pipe(gulp.dest('./css/'));
}); 

gulp.task('cleancss', function() {
  return gulp.src('./css/*.min.css', { read: false }) // much faster 
    .pipe(ignore('theme.css'))
    .pipe(rimraf());
});

// Run: 
// gulp scripts. 
// Uglifies and concat all JS files into one
gulp.task('scripts', function() {
  gulp.src([
    basePaths.dev + 'js/theme.js'
    ])
    .pipe(concat('theme.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/'));
});

// Run: 
// gulp copy-assets. 
// Copy all needed dependency assets files from bower_component assets
// to `basePaths.dev` folder.
// Run this task after bower install or bower update
gulp.task('copy-assets', function() {

  // normalize.css
  gulp.src(basePaths.bower + 'normalize.css/normalize.css')
    .pipe(gulp.dest(basePaths.dev + '/normalize.css'));

  // skeleton-scss
  gulp.src(basePaths.bower + 'skeleton-scss/scss/**/*.scss')
    .pipe(gulp.dest(basePaths.dev + '/skeleton-scss'));



});