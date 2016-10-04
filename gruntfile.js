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
        watch: {
            css: {
                files: 'scss/*/*.scss',
                tasks: ['sass', 'cssmin']
            }
        }
    });

    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-cssmin");

    grunt.registerTask('default', ['watch']);
};