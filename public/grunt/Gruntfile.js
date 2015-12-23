'use strict';

module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
      '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
      '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
      '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
      ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',

    clean: {
      all:['dist'],
      html:['html/*.html'],
      css:['css/*.html'],
      js:['js/*.js'],
      img:['img/']
    },

    copy: {
      src:{
        files:[
          {expand: true, cwd: 'src', src: ['images/*.{png,jpg,jpeg,gif}'], dest: 'dist/html'}
        ]
      }
    },

    concat: {
      options: {
        separator:';',
        banner: '<%= banner %>',
        stripBanners: true
      },
      js: {
        src:['js/*.js'],
        dest: 'dist/<%= pkg.name %>.js'
      },
      css: {
        src:['css/*.css'],
        dest: 'dist/<%= pkg.name %>.css'
      },
      dist: {
        src: ['js/*.js'],
        dest: 'dist/<%= pkg.name %>.js'
      }

    },

    uglify: {
      options: {
        banner: '<%= banner %>'
      },
      dist: {
        src: '<%= concat.dist.dest %>',
        dest: 'dist/<%= pkg.name %>.min.js'
      }
    },

    jshint: {
      options: {
        jshintrc: true
      },
      gruntfile: {
        src: 'Gruntfile.js'
      },
      src: {
        src: ['js/**/*.js']
      }
    },

    sass: {
      dist: {
        options: {
          style: 'nested' // nested, compact, compressed, expanded.
        },
        files: {
          'tian.css': 'tian.scss'
        }
      },
      dev: {
        options:{
          noCache:true,
          style:'expanded'
        },
        files:{
          '../css/backstage.main.css': 'css/backstage.main.scss'
        }
      }
    },

    cssmin: {
      dist: {
        files: [{
          expand: true,
          cwd: 'release/css',
          src: ['css/*.css', '!*.min.css'],
          dest: 'css',
          ext: '.min.css'
        }]
      }
    },

    watch: {
      gruntfile: {
        files: '<%= jshint.gruntfile.src %>',
        tasks: ['jshint:gruntfile']
      },
      src: {
        files: '<%= jshint.src.src %>',
        tasks: ['jshint:src']
      },
      dev_sass: {
        files: 'css/backstage.main.scss',
        tasks: ['sass:dev'],
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('default', ['jshint', 'clean', 'concat', 'uglify']);

  //grunt.registerTask('dev_sass',['sass:dev']);


};
