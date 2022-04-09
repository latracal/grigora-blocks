const modalBtns = document.getElementsByClassName("demo-overlay");
const modal = document.querySelector(".demo_modal");

var toggleModal = function (event) {
	if (modal.classList.contains("open-modal")) {
		return;
	}
	var target = event.target;
	console.log(target);
	var name = target.getAttribute("data-name");
	var slug = target.getAttribute("data-slug");
	var demo_url = target.getAttribute("data-demo_url");
	var description = target.getAttribute("data-description");
	var iframe = modal.querySelector(".modal-iframe");
	console.log(name, slug, demo_url);
	iframe.setAttribute("src", demo_url);
	iframe.setAttribute("title", name);
	modal.classList.add("open-modal");
};

Array.from(modalBtns).forEach(function (element) {
	element.addEventListener("click", toggleModal);
});

var svg = document.querySelector(".modal_screen_size");
var icon = svg.getElementsByClassName("bi");
for (var i = 0; i < icon.length; i++) {
	icon[i].addEventListener("click", function () {
		var current = document.getElementsByClassName("active");
		current[0].classList = current[0].classList.add("active");
		this.classList += " active";
	});
}

const desktopView = document.querySelector(".bi-display");
const tabletView = document.querySelector(".bi-tablet-landscape");
const mobileView = document.querySelector(".bi-phone");
const iframe = document.querySelector(".modal-iframe");

desktopView.addEventListener("click", function () {
	if (iframe.classList.contains("tablet mobile")) {
		iframe.classList.remove("tablet mobile");
	} else {
		iframe.classList.add("desktop");
	}
});

tabletView.addEventListener("click", function () {
	if (iframe.classList.contains("desktop mobile")) {
		iframe.classList.remove("desktop mobile");
	} else {
		iframe.classList.add("tablet");
	}
});

mobileView.addEventListener("click", function () {
	if (iframe.classList.contains("desktop tablet")) {
		iframe.classList.remove("desktop tablet");
	} else {
		iframe.classList.add("mobile");
	}
});
