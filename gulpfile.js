var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require("gulp-uglify");
var concat = require("gulp-concat");
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

//css
gulp.task('css', gulp.series(function () {
	return gulp.src(['./src/scss/imports/libs.scss', './src/scss/styles.scss'])
		.pipe(sass({
			outputStyle: 'compressed'
		}))
		.pipe(gulp.dest('src/css'));
}));

//js
gulp.task('js', gulp.series(function () {
	return gulp.src('./src/js/libs/*.js')
		.pipe(concat('all.js'))
		.pipe(gulp.dest('src/js'));
}));

//img
gulp.task('img', gulp.series(function () {
	return gulp.src('./src/img/*.{jpg,jpeg,png}')
		.pipe(imagemin({
			interlaced: true,
			progressive: true,
			optimizationLevel: 5,
			svgoPlugins: [{
				removeViewBox: true
			}]
		}));
}));

//watch
gulp.task('watch', gulp.series(function () {
	browserSync.init({
		watch: true,
		server: "./"
	});

	gulp.watch('./*.html').on("change", reload);
	gulp.watch('./src/scss/**/*.scss', gulp.parallel(['css'])).on("change", reload);
	gulp.watch('./src/js/**/*.js', gulp.parallel(['js'])).on("change", reload);
}));

//build
gulp.task('build', gulp.series(function () {
	return gulp.src('./src/**/*')
		.pipe(gulp.dest(['./app/wp-content/themes/dist']));
}));

//gulp-dev
gulp.task('dev', gulp.series(['css', 'js', 'img', 'watch']));

//gulp-build
gulp.task('build', gulp.series(['build']));