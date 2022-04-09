const modalBtns = document.getElementsByClassName("demo-overlay");
const modal = document.querySelector(".demo_modal");

var toggleModal = function (event) {
    if(modal.classList.contains("open-modal")){
      return;
    }
    var target = event.target;
    console.log(target)
    var name = target.getAttribute('data-name');
    var slug = target.getAttribute('data-slug');
    var demo_url = target.getAttribute('data-demo_url');
    var description = target.getAttribute('data-description');
    var iframe = modal.querySelector(".modal-iframe");
    console.log(name, slug, demo_url);
    iframe.setAttribute("src", demo_url);
    iframe.setAttribute("title", name);
    modal.classList.add("open-modal");
  }

Array.from(modalBtns).forEach(function(element) {
  element.addEventListener('click', toggleModal);
});