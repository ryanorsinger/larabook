var gulp = require('gulp');

var sass = require('gulp-sass');

// var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
    gulp.src('assets/sass/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('./public/css'));
});
