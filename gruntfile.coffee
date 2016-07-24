module.exports = (grunt) ->

  # Project configuration
  grunt.initConfig

    clean:
      js: [
        'assets/javascripts/shared/shared.js'
        'assets/javascripts/pages/pages.js'
      ]

    coffee:
      compile:
        options:
          join: true
        files: [
          'assets/javascripts/shared/shared.js': 'assets/javascripts/shared/_*.coffee'
          'assets/javascripts/pages/pages.js': 'assets/javascripts/pages/_*.coffee'
        ]

    concat:
      dist:
        src: [
          # Manual dependency ordering (put specific files first)
          'assets/javascripts/vendor/headroom.min.js'
          'assets/javascripts/vendor/jQuery.headroom.min.js'
          'assets/javascripts/vendor/*.js'
          'assets/javascripts/shared/*.js'
          'assets/javascripts/pages/*.js'
        ]
        dest: 'assets/javascripts/majestic.min.js'

    uglify:
      dist:
        src: '<%= concat.dist.dest %>'
        dest: '<%= concat.dist.dest %>' # Stomp over the file

    autoprefixer:
      dist:
        options:
          browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
        src: ['assets/stylesheets/majestic.min.css']

    notify:
      sass:
        options:
          title: "Task Complete"
          message: "SASS finished compiling!"

    sass:
      dist:
        options:
          style: 'compressed'
          quiet: false
          sourcemap: 'auto'
          loadPath: require('node-neat').includePaths
        files: ['assets/stylesheets/majestic.min.css': 'assets/stylesheets/majestic.scss']

    watch:
      options:
        livereload: true
      stylesheets:
        files: ['assets/stylesheets/**/*.scss']
        tasks: ['sass', 'autoprefixer']
      coffeescripts:
        files: ['assets/javascripts/**/*.coffee']
        tasks: ['coffee', 'concat', 'uglify']
      javascripts:
        files: [
          'assets/javascripts/pages/**/*.js'
          'assets/javascripts/shared/**/*.js'
          'assets/javascripts/vendor/**/*.js'
        ]
        tasks: ['concat', 'uglify', 'clean']

    svgmin:
      options:
        plugins: [
          { removeViewBox: false }
          { removeUselessStrokeAndFill: true }
          { cleanupIDs: false }
        ]
      dist:
        files:
          'assets/images/sprite.svg' : 'assets/images/sprite.svg'

    svgstore:
      options:
        formatting:
          indent_size: 2
      default:
        files:
          'assets/images/sprite.svg': 'assets/images/sprite/*.svg'


  # Load all Grunt tasks automatically
  require('load-grunt-tasks') grunt

  # Register tasks
  grunt.registerTask 'default', ['sass', 'autoprefixer', 'watch', 'coffee', 'concat', 'uglify', 'clean']
  grunt.registerTask 'scripts', ['coffee', 'concat', 'uglify', 'clean']
  grunt.registerTask 'styles', ['sass', 'autoprefixer']
  grunt.registerTask 'sprite', ['svgstore', 'svgmin']
