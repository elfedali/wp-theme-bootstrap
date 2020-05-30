'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const Fiber = require('fibers');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const rename = require('gulp-rename');
const plumber = require('gulp-plumber');
const del = require('del');
const cssnano = require('gulp-cssnano');
const browserSync = require('browser-sync').create();

sass.compiler = require('node-sass');

// Import  gulp config
const configFile = require('./gulpconfig.json');
const paths = configFile.paths;


// ConfigFile
gulp.task('paths', function (done) {
	console.log(configFile);
	done();
})
// Browser sync
gulp.task('bs', function (done) {
	browserSync.init(configFile.browserSyncWatchFiles,configFile.browserSyncOptions);
	done()
});



// Compile sass
gulp.task('css', function () {
	return gulp.src(paths.sass)
		.pipe(sourcemaps.init({ loadMaps: true }))
		.pipe(plumber())
		.pipe(sass({ outputStyle: "expanded" }))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.css))
		.pipe(browserSync.stream())
});
// Minify
gulp.task('minifycss', function () {
	return gulp.src(paths.css + '/theme.css')
		.pipe(sourcemaps.init({ loadMaps: true }))
		.pipe(
			plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit('end');
				}
			})
		)
		.pipe(rename({ suffix: '.min' }))
		.pipe(cssnano())
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest(paths.css));
});

/**
 * Compile javascript
 *
 */
function js(done) {
	// body omitted
	done();
}


// Clean up
function clean(done) {
	console.log("clean up day !")

	return del([
		paths.css + "/theme.css",
		paths.css + "/theme.min.css",
		paths.css + "/theme.min.css.map",
	]);

	done();
}
exports.clean = clean

// Watch files
gulp.task('watch', function () {
	gulp.watch(paths.sass, gulp.series(['css','minifycss']));
	//gulp.watch("./assets/js/**/*", gulp.series(scriptsLint, scripts));
});

gulp.task( 'watch-bs', gulp.parallel( 'bs', 'watch' ) );
