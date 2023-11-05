const ping = document.querySelector(".ping"),
mic = document.querySelector(".mic"),
search = document.getElementById("searchInput");

const recognition = new webkitSpeechRecognition();

recognition.addEventListener("result", (event) => {
    const transcript = event.results[0][0].transcript;
    console.log(transcript);
})

mic.addEventListener("click", function(e){
    // ping.classList.toggle("d-none");
    // if(!ping.classList.contains("d-none")){
    //     recognition.start();   
    //     console.log('Pengenalan suara dimulai.');
    // }else{
    //     recognition.stop();
    //     console.log('Pengenalan suara dihentikan.');
    // }

    // console.log("jaidsdkl")
    alert("Jadii")
});

console.log(mic)