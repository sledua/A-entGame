var syntax        = 'sass';
var gulp           = require('gulp'),
		sass           = require('gulp-sass'),
		browserSync    = require('browser-sync'),
		cleanCSS       = require('gulp-clean-css'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify")

		gulp.task('browser-sync', function() {
			browsersync({
				server: {
					baseDir: 'app'
				},
				notify: false,
				// open: false,
				// tunnel: true,
				// tunnel: "projectname", //Demonstration page: http://projectname.localtunnel.me
			})
		});
		
		gulp.task('styles', function() {
			return gulp.src('app/'+syntax+'/**/*.'+syntax+'')
			.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
			.pipe(rename({ suffix: '.min', prefix : '' }))
			.pipe(autoprefixer(['last 15 versions']))
			.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
			.pipe(gulp.dest('app/css'))
			.pipe(browsersync.reload( {stream: true} ))
		});
		
		gulp.task('js', function() {
			return gulp.src([
				'app/js/main.js', // Always at the end
				])
			.pipe(concat('main.min.js'))
			 .pipe(uglify()) // Mifify js (opt.)
			.pipe(gulp.dest('app/js'))
			.pipe(browsersync.reload({ stream: true }))
		});
		
		gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
			gulp.watch('app/'+syntax+'/**/*.'+syntax+'', ['styles']);
			gulp.watch(['libs/**/*.js', 'app/js/common.js'], ['js']);
			gulp.watch('app/*.html', browsersync.reload)
		});
		
		gulp.task('default', ['watch']);