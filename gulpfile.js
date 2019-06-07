const { src, dest, watch } = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');
const mozjpeg = require('imagemin-mozjpeg');
const browserSync = require('browser-sync').create();

function css() {
    return src('./scss/*.scss', { sourcemaps: true })
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(minifyCSS())
        .pipe(dest('./'), { sourcemaps: true })
        .pipe(browserSync.stream());
}

function js() {
    return src(['node_modules/jquery/dist/jquery.min.js', 'node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/slick-carousel/slick/slick.min.js', './js/main.js'], { sourcemaps: true })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('build.min.js'))
        .pipe(dest('./js'), { sourcemaps: true })
        .pipe(browserSync.stream());
}

function assets() {
    return src('./assets', { sourcemaps: true })
        .pipe(imagemin([
            pngquant({quality: [0.5, 0.5]}),
            mozjpeg({quality: 50})
        ]))
        .pipe(dest('./assets'), { sourcemaps: true })
}

function browser() {
    browserSync.init({
        proxy: 'accvent.com',
        files: [
            './**/*.php'
        ]
    });

    watch('./scss/**/*.scss', css);
    watch('./js/main.js', js);
    watch('./assets', assets).on('change', browserSync.reload);
}



exports.css = css;
exports.js = js;
exports.assets = assets;
exports.default = browser;