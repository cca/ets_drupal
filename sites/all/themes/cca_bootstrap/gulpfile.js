var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');

gulp.task('default', function () {
  gulp.src('./less/style.less')
    .pipe(watch())
    .pipe(less())
    .pipe(gulp.dest('./css'));
});
