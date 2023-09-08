const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const rtlcss = require('gulp-rtlcss');
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');
const gutil = require('gulp-util');
const rename = require('gulp-rename');
const concat = require('gulp-concat');
const jshint = require('gulp-jshint');
const uglify = require('gulp-uglify');
const imagemin = require('gulp-imagemin');
const browserSync = require('browser-sync').create();

const onError = function(err) {
  console.log('An error occurred:', gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit('end');
};

// Sass
gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./'))
    .pipe(rtlcss()) // Convert to RTL
    .pipe(rename({ basename: 'rtl' })) // Rename to rtl.css
    .pipe(gulp.dest('./')) // Output RTL stylesheets (rtl.css)
    .pipe(browserSync.stream()); // Päivitä selain automaattisesti SCSS-muutosten jälkeen
});

// JavaScript
gulp.task('js', function() {
  return gulp.src(['./js/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('app.js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
    .pipe(browserSync.stream()); // Päivitä selain automaattisesti JS-muutosten jälkeen
});

// Images
gulp.task('images', function() {
  return gulp.src('./images/src/*')
    .pipe(plumber({ errorHandler: onError }))
    .pipe(imagemin({ optimizationLevel: 7, progressive: true }))
    .pipe(gulp.dest('./images/dist'))
    .pipe(browserSync.stream()); // Päivitä selain automaattisesti JS-muutosten jälkeen
});

// Watch
gulp.task('watch', function() {
  browserSync.init({
    files: ['./**/*.php', './sass/**/*.scss'],
    proxy: 'http://projekti.local/',
  });
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
  gulp.watch(['./js/*.js', '!./js/app.min.js'], gulp.series('js'));
  gulp.watch('images/src/*', gulp.series('images'));
});

gulp.task('default', gulp.series('sass', 'js', 'images', 'watch'));
gulp.task('start', gulp.series('sass', 'js', 'images'));
