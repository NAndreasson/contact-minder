var gulp = require('gulp');
var sass = require('gulp-sass')

gulp.task('sass', function () {
    gulp.src('sass/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'));
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['sass']);