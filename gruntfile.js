module.exports = function(grunt) {
    grunt.initConfig({
        sass: {
            dist: {
                options: {
                    lineNumbers: true
                },
                files: {
                    "css/styles.css": "scss/styles.scss"
                }
            }
        },
        cssmin: {
            target: {
                files: {
                    "css/styles.min.css" : "css/styles.css"
                }
            }
        },
        uglify: {
            my_target: {
                files: {
                    'js/scripts.min.js': ['node_modules/jquery/dist/jquery.min.js', 'node_modules/gsap/src/minified/TweenMax.min.js', 'js/src/*.js']
                }
            }
        },
        watch: {
            css: {
                files: 'scss/*/*.scss',
                tasks: ['sass', 'cssmin']
            },
            scripts: {
                files: 'js/src/*.js',
                tasks: ['uglify']
            }
        }
    });

    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-contrib-uglify");

    grunt.registerTask('default', ['watch']);
};