www.ryanwiemer.com
==
Custom WordPress theme for www.ryanwiemer.com
- Version: 0.1.0

##Development Dependencies
- [node.js](http://nodejs.org/)
- [bower](http://bower.io/)
- [gulp.js](http://gulpjs.com/)
- [sass](http://sass-lang.com/)
- [bourbon](http://bourbon.io/)
- [bourbon neat](http://neat.bourbon.io/)

##Workflow
The source code for this websites is here on GitHub. The code checked into this repo contains the Wordpress theme files only. When developing this site I usually follow the steps below:
- 1. I use Gulp as my task manager when developing. Gulp runs in the background and watches for changes which I use in connection with Live Reload. Common tasks include concatenating and minifying files, compiling Sass into CSS, as well as linting JavaScript files. View my simple [gulpfile.js](https://github.com/ryanwiemer/rw/blob/master/gulpfile.js).
- 2. I use MAMP to handle my local server environment and Atom.io as my preferred text editor.  
- 3. Once satisfied with the changes I push to GitHub and use DeployHQ to get my changes up on my Staging environment.
- 4. After some more testing and bug fixes I use DeployHQ again to push to the Live Environment.

##Links
- [Welcome to www.ryanwiemer.com](http://stage.ryanwiemer.com/welcome-blog/)
- [Style Guide](http://www.ryanwiemer.com/style-guide)

##Copyright
- All rights Reserved
- Copyright 2014 Ryan Wiemer
- Open Source tools used are under the restrictions of their specific licensing
