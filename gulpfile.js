var gulp           = require('gulp'),
		browserSync    = require('browser-sync')


gulp.task('browser-sync', function() {
	browserSync({
		proxy: "aentGame.loc",
		notify: false
	});
});

gulp.task('watch', ['php', 'browser-sync'], function() {
	gulp.watch('index.php', ['php']);
	gulp.watch('index.php', browserSync.reload);
});

gulp.task('default', ['watch']);
