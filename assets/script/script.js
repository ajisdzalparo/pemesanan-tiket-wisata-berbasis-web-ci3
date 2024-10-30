let lastImage = document.getElementsByClassName("last-img")[0];
let midImage = document.getElementsByClassName("mid-img")[0];
let firstImage = document.getElementsByClassName("first-img")[0];
let birdsImage = document.getElementsByClassName("birds-img")[0];
let urbanEscapes = document.querySelector("#landing #quote");
let title = document.querySelector(".title");
let button = document.querySelector("#landing #cta");

/// Fungsi yang dijalankan saat scroll untuk layar <= 1199px
function handleScrollSmallScreen() {
	let value = window.scrollY;
	lastImage.style.top = value * 0.7 + "px";
	urbanEscapes.style.marginTop = value * 0.4 + "px";
	midImage.style.top = value * 0.3 + "px";
	firstImage.style.top = value * 0 + "px";
	birdsImage.style.left = value * 0.4 + "px";
	button.style.marginTop = value * 0.3 + "px";
	title.style.marginTop = value * 0.4 + "px";
}

function handleScrollLargeScreen() {
	let value = window.scrollY;
	urbanEscapes.style.left = value * 0.3 + "px";
	urbanEscapes.style.marginTop = value * 0.3 + "px";
	urbanEscapes.style.marginBottom = value * 0.3 + "px";
	lastImage.style.top = value * 0.7 + "px";
	midImage.style.top = value * 0.4 + "px";
	firstImage.style.top = value * 0 + "px";
	birdsImage.style.left = value * 0.4 + "px";
	button.style.marginTop = value * 0.2 + "px";
	title.style.marginTop = value * 0.3 + "px";
}

function checkScreenSize() {
	if (window.matchMedia("(max-width: 1140px)").matches) {
		window.removeEventListener("scroll", handleScrollLargeScreen);
		window.addEventListener("scroll", handleScrollSmallScreen);
	} else {
		window.removeEventListener("scroll", handleScrollSmallScreen);
		window.addEventListener("scroll", handleScrollLargeScreen);
	}
}

checkScreenSize();

window.addEventListener("resize", checkScreenSize);

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides((slideIndex += n));
}

function currentSlide(n) {
	showSlides((slideIndex = n));
}

function showSlides(n) {
	let i;
	let slides = document.getElementsByClassName("mySlides");
	let dots = document.getElementsByClassName("dot");
	if (n > slides.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].classList.remove("active");
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex - 1].classList.add("active");
	dots[slideIndex - 1].className += " active";
}

// Define the autoSlide function
function autoSlide() {
	plusSlides(1);
}

// Automatically show the next slide every 5 seconds using a named function
const intervalId = setInterval(autoSlide, 5000);
