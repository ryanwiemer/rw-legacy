// Include gulp
var gulp = require('gulp');

// Include the Plugins
var webpack = require('webpack');
var webpackStream = require('webpack-stream');
var webpackConfig = require('./webpack.config.js');
var sass = require('gulp-sass');
var bourbon = require('node-bourbon');
var neat = require('node-neat');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

// Start Up browser-sync
gulp.task('browser-sync', function() {
  var files = [
    'dist/css/*.css',
    'dist/js/*.js',
    '*.php'
  ];
  browserSync.init(files, {
    proxy: "ryanwiemer.dev",
    notify: false,
    open: false
  });
});

// Move Pace
gulp.task ('move-pace', function() {
  return gulp.src('src/js/vendor/pace.min.js')
    .pipe(gulp.dest('dist/js/'));
});

// Compile JS
gulp.task('js', function() {
  return gulp.src('src/js/scripts.js')
    .pipe(webpackStream(webpackConfig), webpack)
    .pipe(gulp.dest('dist/js'));
});

// Compile Sass & Minify CSS
gulp.task('sass', function() {
  gulp.src(['src/scss/style.scss'])
  .pipe(sass({
    includePaths: require('node-neat').includePaths
  }))
  .pipe(autoprefixer('last 2 version'))
  .pipe(cleanCSS())
  .pipe(rename({ suffix: '.min' }))
  .pipe(gulp.dest('dist/css/'))
  .pipe(browserSync.reload({stream:true}));
});

// Watch Files For Changes
gulp.task('watch', function() {
  gulp.watch('src/scss/*/*.scss', ['sass'])
  gulp.watch('src/js/*/*.js', ['js'])
  gulp.watch('.php').on('change', reload);
});

// Default Task
gulp.task('default', ['move-pace','sass','browser-sync','watch']);
