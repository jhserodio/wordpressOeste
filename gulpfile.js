/*==========================================================================
TASKS CONFIGURATION
==========================================================================*/

// REQUIRES

var gulp = require('gulp');
  //postcss requires
var postcss        = require('gulp-postcss'),
    sourcemaps     = require('gulp-sourcemaps'),
    precss         = require('precss'),
    autoprefixer   = require('autoprefixer'),
    nano           = require('cssnano'),
    comments       = require('postcss-discard-comments'),
    normalize      = require('postcss-normalize'),
    calc           = require('postcss-calc'),
    lost           = require('lost'),
    cssvariables   = require('postcss-css-variables'),
    customMedia    = require('postcss-custom-media'),
    selectors      = require('postcss-custom-selectors'),
    color          = require('postcss-color-function'),
  // utilities
    concat         = require('gulp-concat'),
    watch          = require('gulp-watch'),
    copy           = require('gulp-copy-rex'),
    plumber        = require('gulp-plumber');

// GLOBAL VARIABLES
var src            = "./assets/",
    src_css        = src + "styles/style.css",
    wtc            = src + 'styles/**/*.css',
    wtc_scripts    = src + 'scripts/**/*',
    src_scripts    = src + "scripts/",
    dest           = "./";


// style task
gulp.task('postcss', function () {
  var processors = [
    color,
    cssvariables,
    selectors,
    customMedia,
    normalize,
    precss,
    lost,
    calc,
    // comments({removeAll: true}),
    // nano,
    autoprefixer({brownsers: ['last 4 version']})
  ];

  return gulp.src(src_css)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(sourcemaps.write("map"))
    .pipe(gulp.dest(dest));
});


// watch
gulp.task('watch', function(){
  gulp.watch(wtc, ['postcss']);
})


// default task
gulp.task('default', ['postcss', 'watch']);
