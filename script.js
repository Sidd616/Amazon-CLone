const imgs = document.querySelectorAll('#slider ul img');
const prev_btn = document.querySelector('.control_prev');
const next_btn = document.querySelector('.control_next');

let n = 0

function changeSlide() {
    for (let i = 0; i < imgs.length; i++) {
        if (i === n) {
            imgs[i].style.opacity = 1; // Set opacity of current image to 1
            imgs[i].style.display = "block";
        } else {    
            imgs[i].style.opacity = 0; // Set opacity of other images to 0
             imgs[i].style.display = "none";
        }
    }
}

changeSlide();

setInterval(() => {
    n = (n + 1) % imgs.length; // Increment n and wrap around if necessary
    changeSlide();
}, 5000);

prev_btn.addEventListener("click", (e) => {
    if (n > 0) {
        n--;
    }
    else{
        n = imgs.length - 1;
    }
    changeSlide();
})

next_btn.addEventListener("click", (e) => {
    if (n < imgs.length-1) {
        n++;
    }else{
        n = 0;
    }
    changeSlide();
})


const scrollContainer = document.querySelectorAll(".products");
for (const item of scrollContainer) {
    item.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    item.scrollLeft += evt.deltaY;
});
}
