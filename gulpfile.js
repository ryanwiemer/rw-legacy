// Include gulp
var gulp = require('gulp');

// Include the Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');
var notify = require ('gulp-notify');
var lr = require('tiny-lr');
var livereload = require('gulp-livereload');


// Move and Minfiy Scripts from Bower
gulp.task ('move', function() {
    return gulp.src(['bower_components/jquery/dist/jquery.min.js', 'bower_components/slick.js/slick/slick.min.js', 'bower_components/fittext/fittext.js'])
        .pipe(gulp.dest('assets/js/'))
        .pipe(notify({ message: 'Bower components are moved!'}));
});


// Concatenate, Lint and Minify JS
gulp.task('scripts', function() {
    return gulp.src(['assets/js/scripts/*.js'])
        .pipe(concat('global.js'))
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .pipe(rename('global.min.js'))
        .pipe(gulp.dest('assets/js/'))
        //.pipe(notify({ message: 'Scripts are minified!'}))
        .pipe(livereload());
});

// Compile Sass & Minify CSS
gulp.task('sass', function() {
    return gulp.src(['assets/scss/style.scss'])
        .pipe(sass())
        .pipe(minifycss())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('assets/css/'))
        //.pipe(notify({ message: 'CSS is minified!'}))
        .pipe(livereload());
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/scss/*/*.scss', ['sass'])
    gulp.watch('assets/js/*/*.js', ['scripts']);
});

// Default Task
gulp.task('default', ['scripts', 'sass', 'watch']);
