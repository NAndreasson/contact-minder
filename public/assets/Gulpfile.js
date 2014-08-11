var gulp = require('gulp');

var sass = require('gulp-sass');
var livereload = require('gulp-livereload');

var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

gulp.task('sass', function () {
    gulp.src('sass/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'))
        .pipe(livereload());
});

gulp.task('scripts', function() {
    gulp.src('js/**/*.js')
        .pipe(concat('main.js'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});

gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['sass']);
});


// The default task (called when you run `gulp` from cli)
gulp.task('default', ['sass']);