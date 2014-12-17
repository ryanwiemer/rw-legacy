www.ryanwiemer.com
==
Custom WordPress theme for www.ryanwiemer.com
- Version: 1.0.0

##Development Dependencies
- [node.js](http://nodejs.org/)
- [bower](http://bower.io/)
- [gulp.js](http://gulpjs.com/)
- [sass](http://sass-lang.com/)
- [bourbon](http://bourbon.io/)
- [bourbon neat](http://neat.bourbon.io/)

##Workflow
The source code for this website is contained here on GitHub. The code checked into this repo contains the WordPress theme files only. When developing this site I usually follow the following steps:
- 1. I use Gulp as my task manager when developing. Gulp runs in the background and watches for changes which I use along with Live Reload on my browser. Common tasks include concatenating and minifying files, compiling Sass into CSS, as well as linting JavaScript files. View my simple [gulpfile.js](https://github.com/ryanwiemer/rw/blob/master/gulpfile.js).
- 2. I use MAMP to handle my local server environment and Atom.io as my preferred text editor.  
- 3. Once satisfied with an update I push it to the Dev branch on GitHub.
- 4. After some additional testing I merge the changes into the Master branch and use DeployHQ to push it to the live environment.

##Links
- [Welcome to the Blog](http://ryanwiemer.com/blog/welcome-blog/)

##Copyright
- All rights reserved
- Copyright 2014 Ryan Wiemer
- Open source tools used are under the restrictions of their specific licensing
