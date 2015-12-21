'use strict';

module.exports = function (grunt) {
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.initConfig({
    less: {
      master: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2,
          sourceMap: true
        },
        files: {
          'css/master.css': 'css/master.less'
        }
      }
    },
    watch: {
      less: {
        options: {
          livereload: true
        },
        files: [
          'css/**/*.less'
        ],
        tasks: ['less:master']
      }
    }
  });

  grunt.registerTask('default', ['less']);
};
