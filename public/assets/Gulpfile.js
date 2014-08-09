var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');

gulp.task('sass', function () {
    gulp.src('sass/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'))
        .pipe(livereload());
});

gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['sass']);
});


// The default task (called when you run `gulp` from cli)
gulp.task('default', ['sass']);