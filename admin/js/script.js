const imgShow = document.getElementById("gsa");
const showLetter = document.querySelectorAll(".y");
const close = document.getElementById("close");
const body = document.querySelector("body");
const as = document.querySelector(".as");
const pic = document.querySelector(".pic");
const t = document.querySelector(".t");
const p = document.querySelector(".p");

showLetter.forEach(item => {
    item.addEventListener("click", function(e){
        e.preventDefault();
        imgShow.classList.remove("d-none");
        pic.src = `img/${item.dataset.image}`;
        detectImageOrientation(pic.src);
    });
})

close.addEventListener("click", function(e){
    imgShow.classList.add("d-none");
})

function detectImageOrientation(imageUrl) {
    var img = new Image();
    
    img.onload = function() {
        var width = this.naturalWidth;
        var height = this.naturalHeight;
    
            if (width > height) {
                pic.style.width = "700px";
            } else if (width < height) {
                pic.style.width = "400px";
            }
        };
    img.src = imageUrl;
}

window.addEventListener('load', function(){
    if(window.innerWidth <= 767.98){
        t.style.width = "600px";
        p.style.overflowX = "auto";
    }else{
        t.style.width = "1100px";
        p.style.overflowX = "hidden";
    }
});