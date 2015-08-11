////http://habrahabr.ru/post/250569/

'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    rigger = require('gulp-rigger'),
//   uglify = require('gulp-uglify'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload;

var path = {
    build: {
        html: '../',
        js: '../static/js/'
    },
    src: {
        html: '../templates/index.html',
        js: '../static/js/partials/app.min.js'
    },
    watch: {
        html: '../templates/*.html',
        js: '../static/js/partials/*.js'
    }
};

var config = {
    server: {
        baseDir: "../",
        index: "index.htm"
    },
    tunnel: true,
    host: 'localhost',
    port: 8000,
    logPrefix: "Frontend"
};

gulp.task('webserver', function () {
    browserSync(config)
});



gulp.task('html:build', function () {
    gulp.src(path.src.html)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.html));
});


gulp.task('js:build', function () {
    gulp.src(path.src.js) //Найдем наш main файл
        .pipe(rigger()) //Прогоним через rigger
        //      .pipe(uglify()) //Сожмем наш js
        .pipe(gulp.dest(path.build.js)) //Выплюнем готовый файл в build
        .pipe(reload({stream: true})); //И перезагрузим сервер
});



gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('build', [
    'html:build',
    'js:build'
]);


gulp.task('watch', function () {
    watch([path.watch.html], function (event, cb) {
        gulp.start('html:build');
    });

    watch([path.watch.js], function (event, cb) {
        gulp.start('js:build');
    });
});

gulp.task('default', ['build', 'webserver', 'watch']);