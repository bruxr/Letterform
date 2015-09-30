var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minify = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('styles', function() {
	return gulp.src('./sass/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(minify())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
	gulp.watch('./sass/**/*.scss', ['styles']);
});