$(document).ready(function () {
	$(".menubar").click(function () {
		$("#sidebar").toggleClass('active');
		$(".cc").toggleClass("ccoff");
		$(".tableSize").toggleClass("ctableSize");
	});

	$(".nav-link").click(function () {
		$(this).addClass("linkActived");
		$(this).removeClass("linkActived");

	});
});
