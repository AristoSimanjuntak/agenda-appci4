$(function() {
	$('.main-sidebar .with-sub').on('click', function(e) {
		e.preventDefault();
		$(this).parent().toggleClass('show');
		$(this).parent().siblings().removeClass('show');
	})
	$(document).on('click touchstart', function(e) {
		e.stopPropagation();
		// closing of sidebar menu when clicking outside of it
		if (!$(e.target).closest('.main-header-menu-icon').length) {
			var sidebarTarg = $(e.target).closest('.main-sidebar').length;
			if (!sidebarTarg) {
				$('body').removeClass('main-sidebar-show');
			}
		}
	});
	
	$(document).on('click', '#mainSidebarToggle' ,function(event) {
		event.preventDefault();
		if (window.matchMedia('(min-width: 768px)').matches) {
			$('body').toggleClass('main-sidebar-hide');
		} else {
			$('body').toggleClass('main-sidebar-show');
		}
	});
	$(document).on('click',".side-menu" ,function(event) {
		$('body').addClass('main-sidebar-open');
	});
	
	$(document).on('click',".main-content" ,function(event) {
		$('body').removeClass('main-sidebar-open');
	});
	
	//Mobile menu 
	jQuery(document).ready(function($) {
	  var alterClass = function() {
		var ww = document.body.clientWidth;
		if (ww < 768) {
		  $('body').removeClass('main-sidebar-hide');
		} else if (ww >= 767) {
		  $('body').addClass('main-sidebar-hide');
		};
	  };
	  $(window).resize(function(){
		alterClass();
	  });
	  //Fire it when the page first loads:
	  alterClass();
	});
  
	
	// ______________main-sidebar Active Class
	$(document).ready(function() {
		$(".main-sidebar .nav li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) { 
				$(this).addClass("active");
				$(this).parent().addClass("show");
				$(this).parent().parent().prev().addClass("active"); 
				$(this).parent().parent().addClass("open"); 
				$(this).parent().parent().prev().addClass("show"); 
				$(this).parent().parent().parent().addClass("show"); 
				$(this).parent().parent().parent().parent().addClass("open"); 
				$(this).parent().parent().parent().parent().prev().addClass("active"); 
				$(this).parent().parent().parent().parent().parent().addClass("show"); 
				$(this).parent().parent().parent().parent().parent().parent().prev().addClass("active"); 
				$(this).parent().parent().parent().parent().parent().parent().parent().addClass("show"); 
			}
		});
	});
	
	
	/*---Scroling ---*/
	//P-scroll
	new PerfectScrollbar('.side-menu', {
		suppressScrollX: true
	});
	
});