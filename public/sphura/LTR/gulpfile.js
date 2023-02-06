var gulp = require('gulp');
sass = require("gulp-sass"),
postcss = require("gulp-postcss");
autoprefixer = require("autoprefixer");
var sourcemaps = require('gulp-sourcemaps'); 
var browserSync = require('browser-sync').create(); 
cssbeautify = require('gulp-cssbeautify');
var beautify = require('gulp-beautify');



//_______ task for scss folder to css main style 
gulp.task('watch', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('public/assets/scss/**/*.scss') 
		.pipe(sourcemaps.init())                       
		.pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
		.pipe(sourcemaps.write(''))   
		.pipe(gulp.dest('public/assets/css'))
		.pipe(browserSync.reload({
		  stream: true
	}))
})

//_______task for style-dark
gulp.task('dark', function(){
   return gulp.src('public/assets/css/dark-style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('public/assets/css'));
		
});


//_______task for sidemenu
gulp.task('sidemenu', function(){
	return gulp.src('public/assets/css/sidemenu/sidemenu.scss')
		 .pipe(sourcemaps.init())
		 .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
		 .pipe(sourcemaps.write('.'))
		 .pipe(gulp.dest('public/assets/css/sidemenu'));
		 
 });
 
//_______task for sidemenu
gulp.task('menu2', function(){
	return gulp.src('public/assets/css/sidemenu/sidemenu2.scss')
		 .pipe(sourcemaps.init())
		 .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
		 .pipe(sourcemaps.write('.'))
		 .pipe(gulp.dest('public/assets/css/sidemenu'));
		 
 });
 
//_______task for sidemenu
gulp.task('menu3', function(){
	return gulp.src('public/assets/css/sidemenu/sidemenu3.scss')
		 .pipe(sourcemaps.init())
		 .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
		 .pipe(sourcemaps.write('.'))
		 .pipe(gulp.dest('public/assets/css/sidemenu'));
		 
 });


//_______task for sidemenu
gulp.task('menu4', function(){
	return gulp.src('public/assets/css/sidemenu/sidemenu4.scss')
		 .pipe(sourcemaps.init())
		 .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
		 .pipe(sourcemaps.write('.'))
		 .pipe(gulp.dest('public/assets/css/sidemenu'));
		 
 });


//_______task for sidemenu
gulp.task('menu-closed', function(){
	return gulp.src('public/assets/css/sidemenu/sidemenu-closed.scss')
		 .pipe(sourcemaps.init())
		 .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
		 .pipe(sourcemaps.write('.'))
		 .pipe(gulp.dest('public/assets/css/sidemenu'));
		 
 });

//_______task for style-dark
gulp.task('boxed', function(){
   return gulp.src('public/assets/css/boxed.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('public/assets/css'));
		
});

//_______task for style-dark
gulp.task('dark-boxed', function(){
   return gulp.src('public/assets/css/dark-boxed.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('public/assets/css'));
		
});


//_______task for style-dark
gulp.task('responsive', function(){
   return gulp.src('public/assets/css/sidemenu-responsive.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('public/assets/css'));
		
});

//_______task for style-dark
gulp.task('tabs', function(){
   return gulp.src('public/assets/css/sidemenu-responsive-tabs.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('public/assets/css'));
		
});


//_______task for Color
gulp.task('color', function(){
	return gulp.src('public/assets/css/colors/**/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass())
	.pipe(beautify.css({ indent_size: 4 }))	
	.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest('public/assets/css/colors'));
});



//_______task for skinmodes
gulp.task('skin', function(){
   return gulp.src('public/assets/css/skins.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('public/assets/css'));
		
})
 




