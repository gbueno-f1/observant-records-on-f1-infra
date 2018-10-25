module.exports = function (grunt) {
    'use strict';
    grunt.config.merge({});
    grunt.registerTask('default', [
        'build',
        'build',
        'concurrent:watch',
        'concurrent:watch'
    ]);
};