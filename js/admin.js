const modalBtns = document.getElementsByClassName("demo-overlay");
const modalClose = document.getElementsByClassName("close");
const modal = document.querySelector(".demo_modal");

var toggleModal = function (event) {
	if (modal.classList.contains("open-modal")) {
		return;
	}
	var target = event.target;
	var name = target.getAttribute("data-name");
	var slug = target.getAttribute("data-slug");
	var demo_url = target.getAttribute("data-demo_url");
	var description = target.getAttribute("data-description");
	var iframe = modal.querySelector(".modal-iframe");
	iframe.setAttribute("src", demo_url);
	iframe.setAttribute("title", name);
	modal.classList.add("open-modal");
};

Array.from(modalBtns).forEach(function (element) {
	element.addEventListener("click", toggleModal);
});

var toggleModalClose = function (event) {
	if (modal.classList.contains("open-modal")) {
		modal.classList.remove("open-modal");
	}
	var target = event.target;
	modal.classList.remove("open-modal");
};

Array.from(modalClose).forEach(function (element) {
	element.addEventListener("click", toggleModalClose);
});

var svg = document.querySelector(".modal_screen_size");
if(svg){
  var icon = svg.getElementsByClassName("bi");
  if(icon){
    for (var i = 0; i < icon.length; i++) {
      icon[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].classList = current[0].classList.add("active");
        this.classList += " active";
      });
    }
  }
}


const desktopView = document.querySelector(".bi-display");
const tabletView = document.querySelector(".bi-tablet-landscape");
const mobileView = document.querySelector(".bi-phone");
const iframe = document.querySelector(".modal-iframe");

if(desktopView){
  desktopView.addEventListener("click", function () {
    if (iframe.classList.contains("tablet")) {
      iframe.classList.remove("tablet");
    }
    if (iframe.classList.contains("mobile")) {
      iframe.classList.remove("mobile");
    }
    iframe.classList.add("desktop");
  });
}

if(tabletView){
  tabletView.addEventListener("click", function () {
    if (iframe.classList.contains("desktop")) {
      iframe.classList.remove("desktop");
    }
    if (iframe.classList.contains("mobile")) {
      iframe.classList.remove("mobile");
    }
    iframe.classList.add("tablet");
  });
}

if(mobileView){
  mobileView.addEventListener("click", function () {
    if (iframe.classList.contains("desktop")) {
      iframe.classList.remove("desktop");
    }
    if (iframe.classList.contains("tablet")) {
      iframe.classList.remove("tablet");
    }
    iframe.classList.add("mobile");
  });
}



var sel = document.getElementById('grigora-templates-select');
var singles = document.getElementsByClassName("grigora-templates-single");

if(sel){
  sel.onchange = function(e) {
    var selectedvalue = this[this.selectedIndex].text;
    for (let i = 0; i < singles.length; i++) {
      const element = singles[i];
      var categories = JSON.parse(element.getAttribute("data-category"));
      if(selectedvalue === "All"){
        element.classList.remove("cat_filter");
      }
      else if (!categories.includes(selectedvalue)){
        element.classList.add("cat_filter");
      }
      else{
        element.classList.remove("cat_filter");
      }
    }  
  };
}



const inputsrc = document.getElementById('grigora-templates-input');

const inputHandler = function(e) {
  var textinput = e.target.value;
  for (let i = 0; i < singles.length; i++) {
    const element = singles[i];
    var name = element.getAttribute("data-name");
    if(name.toLowerCase().includes(textinput.toLowerCase())){
      element.classList.remove("text_filter");
    }
    else{
      element.classList.add("text_filter");
    }
  }
}

if(inputsrc){
  inputsrc.addEventListener('input', inputHandler);
  inputsrc.addEventListener('propertychange', inputHandler);
}
