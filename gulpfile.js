var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var rename = require("gulp-rename");

//sass
gulp.task('sass', function () {
    return gulp.src(['scss/*.scss', 'scss/**/*.scss', 'scss/**/**/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest('assets/css/'));
});

//sass-minify
gulp.task('sass-minify', function () {
    return gulp.src(['scss/*.scss', 'scss/**/*.scss', 'scss/**/**/*.scss'])
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(rename(function (path) {
            path.extname = ".min.css"
          }))
        .pipe(gulp.dest('assets/css/'));
});

//sass sidebar
gulp.task('sass-sidebar', function () {
  return gulp.src(['inc/sidebar/scss/*.scss'])
      .pipe(sass())
      .pipe(gulp.dest('inc/sidebar/assets/css/'));
});

//sass-minify sidebar
gulp.task('sass-minify-sidebar', function () {
  return gulp.src(['inc/sidebar/scss/*.scss'])
      .pipe(sass({outputStyle: 'compressed'}))
      .pipe(rename(function (path) {
          path.extname = ".min.css"
        }))
      .pipe(gulp.dest('inc/sidebar/assets/css/'));
});

// watch
gulp.task('watch', function() {
  gulp.watch('scss/*.scss', gulp.series('sass', 'sass-minify'));
  gulp.watch('scss/**/*.scss', gulp.series('sass', 'sass-minify'));
  gulp.watch('scss/**/**/*.scss', gulp.series('sass', 'sass-minify'));
  gulp.watch('inc/sidebar/scss/*.scss', gulp.series('sass', 'sass-sidebar'));
  gulp.watch('inc/sidebar/scss/**/*.scss', gulp.series('sass', 'sass-minify-sidebar'));
});

// Default task
gulp.task('default', gulp.series('sass', 'sass-minify', 'sass-sidebar', 'sass-minify-sidebar', 'watch'));