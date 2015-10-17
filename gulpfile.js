// Include gulp
var gulp = require('gulp');

// Include The Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var bourbon = require('node-bourbon');
var neat = require('node-neat');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

gulp.task('browser-sync', function() {
  //watch files
  var files = [
    'assets/css/*.css',
    'assets/js/*.js',
    '*.php'
  ];
  //initialize browsersync
  browserSync.init(files, {
  //browsersync with a php server
  proxy: "ryanwiemer.dev",
  notify: false,
  open: false
  });
});

// Move and Minfiy Scripts from Bower
gulp.task ('move', function() {
  gulp.src(['bower_components/PACE/pace.js'])
    .pipe(uglify())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('assets/js/vendor/'));
});

// Lint JS
gulp.task('scripts', function() {
  gulp.src(['assets/js/scripts/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(browserSync.reload({stream:true}));
});

// Concat JS
gulp.task('concat', function() {
  gulp.src(['assets/js/vendor/pace.min.js','assets/js/scripts/global.js'])
    .pipe(concat('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js/'));
});

// Compile Sass & Minify CSS
gulp.task('sass', function() {
  gulp.src(['assets/scss/style.scss'])
    .pipe(sass({
        includePaths: require('node-neat').includePaths
     }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(minifycss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/css/'))
    .pipe(browserSync.reload({stream:true}));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/scss/*/*.scss', ['sass'])
    gulp.watch('assets/js/*/*.js', ['scripts','concat'])
    gulp.watch('.php').on('change', reload);
});

// Default Task
gulp.task('default', ['scripts', 'sass','concat','browser-sync','watch']);
