var	gulp = require('gulp'),
	sass = require('gulp-sass'),
	plumber = require('gulp-plumber'),
	notify = require('gulp-notify'),
	php = require('gulp-connect-php'),
	browserSync = require('browser-sync').create(),
	autoprefixer = require('gulp-autoprefixer');


function customPlumber (errTitle) { 
	return plumber({
		errorHandler: notify.onError({
			title: errTitle || "Error running Gulp",
			message: "Error: warning warning!"
		})
	});
}


//==============================================================
//
// SASS
//
//==============================================================

gulp.task('sass', function() {
	return gulp.src('sass/**/*.+(sass|scss)')
	.pipe(customPlumber('Error Running Sass'))
	.pipe(sass())
	.pipe(autoprefixer())
	.pipe(gulp.dest('dest/css'))
})


//==============================================================
//
// PHP Server
//
//=============================================================
gulp.task('php', function() {
    php.server({ base: 'dest', port: 8010, keepalive: true});
});


//==============================================================
//
// Browser Sync
//
//==============================================================

// gulp.task('browserSync', function() { 
// 	browserSync.init({
// 	   proxy: 'yo-test.local:8888',
// 	   browser: 'firefox'
// 	})
// })

gulp.task('browserSync', ['php'], function() {
    browserSync.init({
        index: "/dist/index.php",
        proxy: 'http://ud30.lndo.site:8000/',
        // port: 8080,
        open: true,
        notify: false,
        browser: 'firefox'
    });
});



//==============================================================
//
// WATCHER
//
//==============================================================

gulp.task('watch', ['sass'], function(){
	gulp.watch('sass/**/*.+(sass|scss)', ['sass']);
	gulp.watch(['sass/**/*.+(sass|scss)', 'dest/**/*.php']).on('change', browserSync.reload);
})

gulp.task('default', ['browserSync', 'sass', 'watch'])

