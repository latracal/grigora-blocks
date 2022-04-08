seperators = document.getElementsByClassName('wp-block-separator');

for (let i = 0; i < seperators.length; i++) {
    const seperator = seperators[i];
    if(
        seperator.classList.contains("has-background")
        ){
        if(seperator.classList.contains("is-style-grigora-separator-2")){
            var style = window.getComputedStyle(seperator);
            var color = style.getPropertyValue('color');
            if(color){
                seperator.style.background = `-webkit-gradient(radial, 50% 0, 10, 50% 0, 40, from(${color}), color-stop(0.49, ${color}), color-stop(0.51, #fff), to(white))`;
                seperator.style.backgroundSize = "49px 100%";
            }
        }
        else if(seperator.classList.contains("is-style-grigora-separator-3")){
            var style = window.getComputedStyle(seperator);
            var color = style.getPropertyValue('color');
            if(color){
                seperator.style.background = `-webkit-gradient(radial, 50% 100%, 10, 50% 100%, 40, from(${color}), color-stop(0.49, ${color}), color-stop(0.51, #fff), to(white))`;
                seperator.style.backgroundSize = "49px 100%";
            }
        }
        else if(seperator.classList.contains("is-style-grigora-separator-4")){
            var style = window.getComputedStyle(seperator);
            var color = style.getPropertyValue('color');
            if(color){
                seperator.style.background = `linear-gradient(to right bottom, ${color} 49%, #fff 50%),linear-gradient(-50deg, #fff 16px, #000 0)`;
            }
        }
        else if(seperator.classList.contains("is-style-grigora-separator-5")){
            var style = window.getComputedStyle(seperator);
            var color = style.getPropertyValue('color');
            if(color){
                seperator.style.background = `linear-gradient(to right bottom, #fff 49%, ${color} 50%)`;
            }
        }
    }
}

const modalBtn = document.querySelector(".view-btn");
const modal = document.querySelector(".demo_modal");

modalBtn.addEventListener("click", function () {
    modal.classList.add("open-modal");
  });