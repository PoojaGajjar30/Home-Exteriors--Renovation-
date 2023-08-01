/*
Author       : Dreamguys
Template Name: Truelysell - Service Marketplace
Version      : 1.0
*/

(function($) {
	"use strict";

	if ($(window).width() > 767) {
		if($('.theiaStickySidebar').length > 0) {
			$('.theiaStickySidebar').theiaStickySidebar({
			  // Settings
			  additionalMarginTop: 125
			});
		}
	}
	
	// Sidebar
	
	if($(window).width() <= 991) {
		var Sidemenu = function() {
			this.$menuItem = $('.main-nav a');
		};

		function init() {
			var $this = Sidemenu;
			$('.main-nav a').on('click', function(e) {
				if($(this).parent().hasClass('has-submenu')) {
					e.preventDefault();
				}
				if(!$(this).hasClass('submenu')) {
					$('ul', $(this).parents('ul:first')).slideUp(350);
					$('a', $(this).parents('ul:first')).removeClass('submenu');
					$(this).next('ul').slideDown(350);
					$(this).addClass('submenu');
				} else if($(this).hasClass('submenu')) {
					$(this).removeClass('submenu');
					$(this).next('ul').slideUp(350);
				}
			});
		}

	// Sidebar Initiate
	init();
	}

	// Mobile menu sidebar overlay
	
	$('body').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btn', function() {
		$('main-wrapper').toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').addClass('menu-opened');
		$('.header').removeClass('navbar-fixed');
		return false;
	});
	
	$(document).on('click', '.sidebar-overlay', function() {
		$('html').removeClass('menu-opened');
		$(this).removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});
	
	$(document).on('click', '#menu_close', function() {
		$('html').removeClass('menu-opened');
		$('.sidebar-overlay').removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});
	
	// Content div min height set
	
	function resizeInnerDiv() {
		var height = $(window).height();	
		var header_height = $(".header").height();
		var footer_height = $(".footer").height();
		var breadcrumb_height = $(".breadcrumb-bar").height();
		var setheight = height - header_height;
		var trueheight = setheight - footer_height;
		var trueheight2 = trueheight - breadcrumb_height;
		$(".content").css("min-height", trueheight2);
	}
	
	if($('.content').length > 0 ){
		resizeInnerDiv();
	}

	$(window).resize(function(){
		if($('.content').length > 0 ){
			resizeInnerDiv();
		}
	});
	
	// Owl Carousel
	
	if($('.service-slider').length > 0 ){
		$('.service-slider').owlCarousel({
			items:3,
			margin:30,
			dots:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1
				},
				768:{
					items:2
				},
				1170:{
					items:3	,
					loop:false
				}
			}
		});	
	}
	
	if($('.popular-slider').length > 0 ){
		$('.popular-slider').owlCarousel({
			items:3,
			margin:30,
			dots:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1
				},
				768:{
					items:2
				},
				1170:{
					items:2
				}
			}
		});	
	}
	
	if($('.images-carousel').length > 0 ){
		$('.images-carousel').owlCarousel({
			loop: true,
			center: true,
			margin: 10,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1,
					loop: false,
					margin: 20
				}
			}
		})
	}
	
    // Membership Add More

    $(".membership-info").on('click','.trash', function () {
    	$(this).closest('.membership-cont').remove();
    	return false;
    });

    $(".add-membership").on('click', function () {
    	var membershipcontent = '<div class="row form-row membership-cont">' +
    	'<div class="col-12 col-md-10 col-lg-6">' +
    	'<div class="form-group">' +
    	'<input type="text" class="form-control" name="service_offered[]" id="field1">' +
    	'</div>' +
    	'</div>' +
    	'<div class="col-12 col-md-2 col-lg-2">' +
    	'<a href="#" class="btn btn-danger trash"><i class="far fa-times-circle"></i></a>' +
    	'</div>' +
    	'</div>';
    	$(".membership-info").append(membershipcontent);
    	return false;
    });
	
	// Datetimepicker
	
	if($('.datetimepicker').length > 0) {
		$('.datetimepicker').datetimepicker({
			format: 'DD-MM-YYYY',
			minDate: new Date(),
			icons: {
				up: "fas fa-angle-up",
				down: "fas fa-angle-down",
				next: 'fas fa-angle-right',
				previous: 'fas fa-angle-left'
			}
		});
	}

	// Datepicker
	
	if($('.datepicker').length > 0) {
		$('.datepicker').datepicker({
				dateFormat: 'dd-mm-yy',
				minDate: new Date(),	
				icons: {
					up: "fas fa-angle-up",
					down: "fas fa-angle-down",
					next: 'fas fa-angle-right',
					previous: 'fas fa-angle-left'
				}, onSelect: function(dateText) {
			}
		});
	}

	// Chat

	var chatAppTarget = $('.chat-window');
	(function() {
		if ($(window).width() > 991)
			chatAppTarget.removeClass('chat-slide');
		
		$(document).on("click",".chat-window .chat-users-list a.media",function () {
			if ($(window).width() <= 991) {
				chatAppTarget.addClass('chat-slide');
			}
			return false;
		});
		$(document).on("click","#back_user_list",function () {
			if ($(window).width() <= 991) {
				chatAppTarget.removeClass('chat-slide');
			}	
			return false;
		});
	})();
	
	$(window).on('load',function(){
		$('.page-loading').fadeOut();
	});
	
})(jQuery);