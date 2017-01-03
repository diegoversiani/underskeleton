// Defining base pathes
var basePaths = {
    bower: './bower_components/',
    js: './js-src/'
};

// browser-sync watched files
// automatically reloads the page when files changed
var browserSyncWatchFiles = [
    './css/**/*.min.css',
    './js/**/*.min.js',
    './**/*.php'
];
// browser-sync options
// see: https://www.browsersync.io/docs/options/
var browserSyncOptions = {
    proxy: "localhost/underskeleton/",
    notify: false
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
var ignore = require('gulp-ignore');
var rimraf = require('gulp-rimraf');
var browserSync = require('browser-sync').create();
var runSequence = require('run-sequence');
var autoprefixer = require('gulp-autoprefixer');

// Run: 
// gulp sass
// Compiles SCSS files in CSS
gulp.task('sass', function () {
  return gulp.src('./sass/*.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(gulp.dest('./css'));
});

// Run: 
// gulp watch
// Starts watcher. Watcher runs appropriate tasks on file changes
gulp.task('watch', function () {
  gulp.watch('./sass/**/*.scss', ['build-css']);
  gulp.watch('./js-src/**/*.js', ['build-scripts']);
});

// Run: 
// gulp build-css
// Builds css from scss and apply other changes.
gulp.task('build-css', function(callback){
  runSequence('cleancss', 'sass', 'autoprefixer', 'cssnano', callback);
});

// Run: 
// gulp nanocss
// Minifies CSS files
gulp.task('cssnano', function(){
  return gulp.src('./css/*.css')
    .pipe(plumber())
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano({discardComments: {removeAll: true}}))
    .pipe(gulp.dest('./css/'))
    .pipe(browserSync.stream());
}); 

gulp.task('cleancss', function() {
  return gulp.src('./css/*.css', { read: false }) // much faster 
    .pipe(rimraf());
});

gulp.task('autoprefixer', function(){
  return gulp.src(['./css/*.css', '!./css/*min.css'])
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./css/'));
});

// Run: 
// gulp browser-sync
// Starts browser-sync task for starting the server.
gulp.task('browser-sync', function() {
  browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});

// Run: 
// gulp watch-bs
// Starts watcher with browser-sync. Browser-sync reloads page automatically on your browser
gulp.task('watch-bs', ['browser-sync', 'watch'], function () { });

// Run: 
// gulp build-scripts. 
// Uglifies and concat all JS files into one
gulp.task('build-scripts', function() {
  gulp.src([
      basePaths.js + 'assets/_s/navigation.js',
      basePaths.js + 'assets/_s/skip-link-focus-fix.js'
    ])
    .pipe(concat('theme.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/'));

  gulp.src([
      basePaths.js + 'customizer*.js'
    ])
    .pipe(concat('customizer.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/'));
});
