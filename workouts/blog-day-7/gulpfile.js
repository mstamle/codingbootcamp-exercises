const   gulp = require('gulp');
        sass = require('gulp-sass');

// Whenever I run the task 'build',
// it will require the tasks 'compile-css',...
gulp.task('build', ['compile-css','copy-html','copy-img']);

//Build does it once, but watch will keep watching and
// updating my files as I tweak the src

gulp.task('watch', function(){
    gulp.watch('src/scss/*.scss',['compile-css']);
    gulp.watch('src/*.html',['copy-html']);
    gulp.watch('src/img/*',['copy-img']);
});

gulp.task('compile-css',function() {
    return gulp.src('src/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('dist/css')
);
});

gulp.task('copy-html',function() {
    return gulp.src('src/*.html').pipe(
        gulp.dest('dist')
    );
});

gulp.task('copy-img',function() {
    return gulp.src('src/img/*').pipe(
        gulp.dest('dist/img')
    );
});

