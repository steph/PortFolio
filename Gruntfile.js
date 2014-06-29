/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    // Task configuration.
    watch: {
       srcpublic: {
    	  options: {
              // Start a live reload server on the default port 35729
              livereload: true,
            },
            files: [
                    'src/**/*.css',
                    'src/**/*.html',
                    'src/**/*.js',
                    'src/**/*.php',
                    'src/**/*.phtml'
                   ]
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task.
  grunt.registerTask('default', ['watch']);

};
