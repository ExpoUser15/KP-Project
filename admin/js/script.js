const imgShow = document.getElementById("gsa");
const showLetter = document.querySelectorAll(".y");
const close = document.getElementById("close");
const body = document.querySelector("body");
const as = document.querySelector(".as");
const pic = document.querySelector(".pic");

showLetter.forEach(item => {
    console.log(item.dataset)
    item.addEventListener("click", function(e){
        e.preventDefault();
        imgShow.classList.remove("d-none");
    });
})

close.addEventListener("click", function(e){
    imgShow.classList.add("d-none");
})

const dismiss = document.querySelector(".dismiss");
const ba = document.querySelectorAll(".ba");
dismiss.addEventListener("click", function(e){
    e.preventDefault();
    ba.forEach(item => {
        if(item.dataset.id == 1){
            item.checked = false;
        }
    })
})

function detectImageOrientation(imageUrl) {
    var img = new Image();
  
    img.onload = function() {
      var width = this.naturalWidth;
      var height = this.naturalHeight;

      if (width > height) {
          pic.style.width = "600px";
        } else if (width < height) {
            pic.style.height = "500px";
        }
    };
  
    img.src = imageUrl;
  }
  
detectImageOrientation(pic.src);