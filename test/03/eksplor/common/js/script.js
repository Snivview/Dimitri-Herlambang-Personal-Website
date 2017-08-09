// JavaScript Document
function onReady(callback) {
	var intervalID = window.setInterval(checkReady, 1000);
	function checkReady() {
		if (document.getElementsByTagName('body')[0] !== undefined) {
			window.clearInterval(intervalID);
			callback.call(this);
		}
	}
}
function show(id, value) {
	document.getElementById(id).style.display = value ? 'block' : 'none';
}
onReady(function () {
	show('wrap', true);
	show('loading', false);
});
function openMenu() {
    document.getElementById("mySidenavB").style.width = "250px";
}
function closeMenu() {
    document.getElementById("mySidenavB").style.width = "0";
}
function openNav() {
	document.getElementById("mySidenav").style.width = "100%";
	document.getElementById("closebtn").style.display = "block";
}
function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("closebtn").style.display = "none";
}
new LazyLoad();
$(document).ready(function(){
	/* moving wheels */
	$(window).scroll(function() {
		var theta = $(window).scrollTop() / 50 % Math.PI;
		$('.moving').css({ transform: 'rotate(' + theta + 'rad)' });
	});
	/* moving car */
	var $horizontal = $('#horizontal');
	$(window).scroll(function () {
		var s = $(this).scrollTop(),
			d = $(document).height(),
			c = $(this).height();
		scrollPercent = (s / (d - c));
		var position = (scrollPercent * ($(document).width() - $horizontal.width()));
		$horizontal.css({
			'left': position
		});
	});
	/* night mode */
	$("#nightMode").click(function(){
		$(".div-image p, .div-text p, .text-lead p, h3").toggleClass("night-text");
		$(".div-borderB").toggleClass("night-line");
		$(".text-quote").toggleClass("night-border");
		$(".div-imageB div").toggleClass("shadow");
		$("img").toggleClass("night-image");
		$("#section_3, html").toggleClass("night-background");
		$("#light").delay("slow").toggleClass("show");
	});
	$(".link-mapCaption").hover(function()	{$(this).find('a.link-mapPointer').toggleClass("blink");});
	$("#btn-banten").hover(function()		{$('#map-banten a.link-mapPointer').toggleClass("blink");});
	$("#btn-cirebon").hover(function()		{$('#map-cirebon a.link-mapPointer').toggleClass("blink");});
	$("#btn-semarang").hover(function()		{$('#map-semarang a.link-mapPointer').toggleClass("blink");});
	$("#btn-demak").hover(function()		{$('#map-demak a.link-mapPointer').toggleClass("blink");});
});