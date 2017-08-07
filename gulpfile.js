'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var imagemin = require('gulp-imagemin');
var svgstore = require('gulp-svgstore');
var svgmin = require('gulp-svgmin');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();

// CSS
gulp.task('style', function() {
  gulp.src('assets/sass/**/*.scss')
    .pipe(plumber())
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(postcss([
      autoprefixer({browsers: [
        'last 2 versions'
      ]})
    ]))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

// Images
gulp.task('images', function() {
  return gulp.src('assets/img/**/*.{png,jpg,gif}')
    .pipe(imagemin([
      imagemin.optipng({optimizationLevel: 3}),
      imagemin.jpegtran({progressive: true})
    ]))
    .pipe(gulp.dest('img'));
});

// SVG sprite
gulp.task('svg-sprite', function() {
  return gulp.src('assets/img/svg-icons/*.svg')
    .pipe(svgmin())
    .pipe(svgstore({
      inlineSvg: true
    }))
    .pipe(rename('sprite.svg'))
    .pipe(gulp.dest('img'));
});

// Browser Sync
gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: 'vitrajstudio:8888'
  });

  gulp.watch('assets/sass/**/*.scss', ['style']);
  gulp.watch('*.php').on('change', browserSync.reload);
});

gulp.task('default', ['style', 'browser-sync']);