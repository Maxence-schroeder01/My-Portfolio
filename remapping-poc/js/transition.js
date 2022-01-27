  /* -------------------------------- 

Primary transition 

-------------------------------- */
$(".acceuil").click(function (event) {
	event.preventDefault();

	$("body").fadeOut(500);
    window.location.assign("./index.php")
});
$(".About").click(function (event) {
	event.preventDefault();

	$("body").fadeOut(500);
    window.location.assign("pages/about.php")
});
$(".portfolio").click(function (event) {
	event.preventDefault();

	$("body").fadeOut(500);
    window.location.assign("pages/portfolio.php")
});
$(".contact").click(function (event) {
	event.preventDefault();

	$("body").fadeOut(500);
    window.location.assign("pages/contact.php")
});
  /* -------------------------------- 

Secondary transitions

-------------------------------- */
$(".acceuil-s").click(function (event) {
	event.preventDefault();

	$("body").fadeOut(500);
    window.location.assign("../index.php")
});
$(".About-s").click(function (event) {
	event.preventDefault();

	$("body").fadeOut(500);
    window.location.assign("./about.php")
});
$(".portfolio-s").click(function (event) {
	event.preventDefault();

	$("body").fadeOut(500);
    window.location.assign("./portfolio.php")
});
$(".contact-s").click(function (event) {
	event.preventDefault();

	$("body").fadeOut(500);
    window.location.assign("./contact.php")
});
  /* -------------------------------- 

END TRANSITIONS

-------------------------------- */