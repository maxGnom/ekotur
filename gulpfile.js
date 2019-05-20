const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const watch = require('gulp-watch');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const del = require('del');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();

const styles_ = [
	'./src/css/bootstrap.css',
	'./src/css/bootstrap-theme.css',
	'./src/css/bootstrap-timepicker.css',
	'./src/css/bootstrap-datepicker.css',
	'./bower_components/swiper/dist/css/swiper.css',
	'./src/css/slicebox.css',
	'./src/css/preloader.css',
	'./src/css/styles.css',
	'./src/css/tours.css',
	'./src/css/melexes.css',
	'./src/css/offers.css',
	'./src/css/intro.css',
	'./src/css/header.css',
	'./src/css/footer.css',
	'./src/css/contacts.css',
	'./src/css/form-question.css',
	'./src/css/form-book.css',
	'./src/css/ekotur-curiosity.css',
	'./src/css/cityinfo.css'
]

const styles_index_ = [
	'./src/css/bootstrap.css',
	'./src/css/bootstrap-theme.css',
	'./src/css/bootstrap-timepicker.css',
	'./src/css/bootstrap-datepicker.css',
	'./src/css/preloader.css',
	'./src/css/styles.css',
	'./src/css/offers.css',
	'./src/css/intro.css',
	'./src/css/header.css',
	'./src/css/contacts.css',
	'./src/css/form-question.css',
	'./src/css/form-book.css'
]

const styles_tours_ = [
	'./src/css/bootstrap.css',
	'./src/css/bootstrap-theme.css',
	'./src/css/bootstrap-timepicker.css',
	'./src/css/bootstrap-datepicker.css',
	'./src/css/preloader.css',
	'./src/css/styles.css',
	'./src/css/contacts.css',
	'./src/css/form-book.css',
	'./src/css/tours.css',
	'./src/css/intro.css',
	'./src/css/header.css'
]

const styles_cityinfo_ = [
	'./src/css/bootstrap.css',
	'./src/css/bootstrap-theme.css',
	'./src/css/preloader.css',
	'./src/css/styles.css',
	'./src/css/intro.css',
	'./src/css/header.css',
	'./src/css/cityinfo.css'
]

const styles_melexes_ = [
	'./bower_components/swiper/dist/css/swiper.css',
	'./src/css/preloader.css',
	'./src/css/intro.css',
	'./src/css/styles.css',
	'./src/css/melexes.css',
	'./src/css/header.css'
]

const styles_curiosity_ = [
	'./bower_components/swiper/dist/css/swiper.css',
	'./src/css/preloader.css',
	'./src/css/styles.css',
	'./src/css/header.css',
	'./src/css/intro.css',
	'./src/css/ekotur-curiosity.css'
]


const scripts_curiosity_ = [
	'./bower_components/jquery/dist/jquery.min.js',
	'./src/js/modernizr.custom.46884.js',
	'./src/js/preloader-plugin.js',
	'./src/js/preloader-init.js',
	'./bower_components/swiper/dist/js/swiper.min.js',
	'./src/js/menu.js'
]
const scripts_melexes_ = [
	'./bower_components/jquery/dist/jquery.min.js',
	'./src/js/modernizr.custom.46884.js',
	'./src/js/preloader-plugin.js',
	'./src/js/preloader-init.js',
	'./bower_components/swiper/dist/js/swiper.min.js',
	'./src/js/menu.js'
]
const scripts_city_info_ = [
	'./bower_components/jquery/dist/jquery.min.js',
	'./src/js/preloader-plugin.js',
	'./src/js/preloader-init.js',
	'./src/js/menu.js',
	'./src/js/cityinfo.js'
]
const scripts_index_ = [
	'./bower_components/jquery/dist/jquery.min.js',
	'./src/js/modernizr.custom.46884.js',
	'./bower_components/jquery-form-validator/form-validator/jquery.form-validator.min.js',
	'./bower_components/Scrollify/jquery.scrollify.js',
	'./src/js/bootstrap.min.js',
	'./bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
	'./src/js/datepicker-init.js',
	'./src/js/bootstrap-timepicker.min.js',
	'./src/js/timepicker-init.js',
	'./src/js/change-font-size-placeholder.js',
	'./src/js/menu.js',
	'./src/js/form-valid.js',
	'./src/js/price-calculator.js',
	'./src/js/scrollify-init.js',
	'./src/js/short-description-toggle.js',
	'./src/js/title-print.js',
	'./src/js/preloader-plugin.js',
	'./src/js/ajax-php-mail.js',
	'./src/js/preloader-init.js'
]
const scripts_tours_ = [
	'./bower_components/jquery/dist/jquery.min.js',
	'./src/js/modernizr.custom.46884.js',
	'./bower_components/jquery-form-validator/form-validator/jquery.form-validator.min.js',
	'./src/js/bootstrap.min.js',
	'./bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
	'./src/js/datepicker-init.js',
	'./src/js/bootstrap-timepicker.min.js',
	'./src/js/timepicker-init.js',
	'./src/js/change-font-size-placeholder.js',
	'./src/js/menu.js',
	'./src/js/form-valid.js',
	'./src/js/form-book-showing.js',
	'./src/js/price-calculator.js',
	'./src/js/short-description-toggle.js',
	'./src/js/map-create.js',
	'./src/js/tours-manage.js',
	'./src/js/preloader-plugin.js',
	'./src/js/ajax-php-mail.js',
	'./src/js/preloader-init.js'	
]

function sassCompile(){
	return gulp.src('./src/sass/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass().on('error', sass.logError))
	.pipe(sourcemaps.write('./'))
	.pipe(gulp.dest('./src/css/'))
}

function clean() {
	return del(['./build/*']);
}

function styles_index(){
	return gulp.src(styles_index_)
	.pipe(concat('styles.index.bundle.css'))
	.pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(cleanCSS({
    	level: 2
    }))
    .pipe(gulp.dest('./build'))
}

function styles_tours(){
	return gulp.src(styles_tours_)
	.pipe(concat('styles.tours.bundle.css'))
	.pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(cleanCSS({
    	level: 2
    }))
    .pipe(gulp.dest('./build'))
} 

function styles_curiosity(){
	return gulp.src(styles_curiosity_)
	.pipe(concat('styles.curiosity.bundle.css'))
	.pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(cleanCSS({
    	level: 2
    }))
    .pipe(gulp.dest('./build'))
}

function styles_melexes(){
	return gulp.src(styles_melexes_)
	.pipe(concat('styles.melexes.bundle.css'))
	.pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(cleanCSS({
    	level: 2
    }))
    .pipe(gulp.dest('./build'))
}
function styles_cityinfo(){
	return gulp.src(styles_cityinfo_)
	.pipe(concat('styles.cityinfo.bundle.css'))
	.pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(cleanCSS({
    	level: 2
    }))
    .pipe(gulp.dest('./build'))
}

function scripts_index() {
	return gulp.src(scripts_index_)
	.pipe(concat('scripts.index.bundle.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./build'))
}
function scripts_curiosity() {
	return gulp.src(scripts_curiosity_)
	.pipe(concat('scripts.curiosity.bundle.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./build'))
}
function scripts_melexes() {
	return gulp.src(scripts_melexes_)
	.pipe(concat('scripts.melexes.bundle.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./build'))
}
function scripts_tours() {
	return gulp.src(scripts_tours_)
	.pipe(concat('scripts.tours.bundle.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./build'))
}
function scripts_cityinfo() {
	return gulp.src(scripts_city_info_)
	.pipe(concat('scripts.cityinfo.bundle.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./build'))
}

function scripts_melexes() {
	return gulp.src(scripts_melexes_)
	.pipe(concat('scripts.melexes.bundle.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./build'))
}


function watch_(){
    gulp.watch("./src/sass/*.scss").on('change', sassCompile);
    gulp.watch("./src/css/*.css").on('change', sassCompile);
    gulp.watch("./src/js/*.js").on('change', sassCompile);
};

gulp.task('clean', clean);
gulp.task('sass-compile', sassCompile);
gulp.task('styles_index', styles_index);
gulp.task('styles_melexes', styles_melexes);
gulp.task('styles_tours', styles_tours);
gulp.task('styles_curiosity', styles_curiosity);
gulp.task('styles_cityinfo', styles_cityinfo);
gulp.task('scripts_index', scripts_index);
gulp.task('styles', gulp.series(sassCompile, gulp.parallel('styles_index', 'styles_tours', 'styles_curiosity', 'styles_cityinfo', 'styles_melexes')));
gulp.task('scripts', gulp.parallel(scripts_index, scripts_curiosity, scripts_melexes, scripts_tours, scripts_cityinfo));
gulp.task('watch', watch_);
gulp.task('build', gulp.series(clean, gulp.parallel('styles', 'scripts')));
gulp.task('dev', gulp.series('build', 'watch'));