$(document).ready(function(){
	$("#headerAlertAction").click(function(){
		$("#headerAlert .container").toggleClass('d-none');
		$("#headerAlert").toggleClass('d-none-anm');
		return false;
	});
	$('#headerAlertCloseAction').click(function(){
		$("#headerAlert").addClass('d-none-anm');
		$("#headerAlert .container").addClass('d-none');
	});
	$("#topbarSearchAction").click(function(){
		$("#topNavbar").addClass('visibility-hidden');
		// $("#topbarSearchFormBox").addClass('visibility-hidden');
		$("#topbarSearchFormBox").removeClass('d-none');
		$("#topbarSearchFormBox").addClass('visibility-visible');
		return false;
	});
	$("#topbarSearchFormBoxCloseAction").click(function(){
		$("#topNavbar").removeClass('visibility-hidden');
		$("#topbarSearchFormBox").addClass('d-none');
	});
	$("#quickStartAction").click(function(){
		$(this + 'a').toggleClass("active");
	});
	$("#mobileViewSeachBarAction").click(function(){
		$(".mobile-header-search-form").toggleClass('custom-serach-bar-animation');
	});
	
});