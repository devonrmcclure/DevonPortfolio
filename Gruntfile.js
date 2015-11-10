module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            css: {
                files: 'public/css/less/*',
                tasks: ['less:development']
            },
            js: {
                files: 'public/js/app/*',
                tasks: ['browserify']
            }
        },
        less: {
            development: {
                files: {
                    "public/css/style.css": "public/css/less/main.less"
                }
            },
            production: {
                files: {
                    "public/css/style.css": "public/css/less/main.less"
                },
                compress: true,
            }
        },
        browserify: {
            options: {},
            'public/js/app.js': ['public/js/app/**/*.js']
        }
    });


    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-browserify');

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build-dev', ['less:development']);
    grunt.registerTask('build-prod', ['less:production']);

};