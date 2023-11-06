const ping = document.querySelector(".ping"),
mic = document.querySelector(".mic"),
search = document.getElementById("searchInput");

const recognition = new webkitSpeechRecognition();
recognition.lang = "id-ID"

recognition.addEventListener("result", (event) => {
    const transcript = event.results[0][0].transcript;
    console.log(transcript);
})

mic.addEventListener("click", function(e){
    ping.classList.toggle("d-none");
    if(!ping.classList.contains("d-none")){
        recognition.start();   
        search.placeholder = "Mendengarkan...";
        search.readOnly = true;
        console.log('Pengenalan suara dimulai.');
    }else{
        recognition.stop();
        search.placeholder = "Ketik untuk mencari...";
        search.readOnly = false;
        console.log('Pengenalan suara dihentikan.');
    }
});

console.log(recognition)