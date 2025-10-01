let img_title = document.querySelectorAll(".gambar img");
let audio_title = img_title.id;

function playAudio(audio_title){
    const prefix = "audio_full/aud/";
    var format = "";
    const audioObject = document.getElementsByTagName("audio")[0];
    const play_pause_btn = document.getElementById("play_pause");
    if (audio_title == "Godzilla 1984 Roar") {
        format = ".wav";
        audioObject.type = "audio/wav";
    } else {
        format = ".mp3";
        audioObject.type = "audio/mp3";

    }
    audioObject.src = prefix + audio_title + format;
    play_pause_btn.textContent = "Pause Audio";
}

function mute_audio(){
    const audioObject = document.getElementsByTagName("audio")[0];
    const mute_btn = document.getElementById("mute");
    if (audioObject.src == "") {
        window.alert("No Currently Playing Audio");
    } else {
        if (audioObject.muted === false) {
            audioObject.muted = true;
            mute_btn.textContent = "Unmute Audio";
        } else {
            audioObject.muted = false;
            mute_btn.textContent = "Mute Audio";
        }
    }
}

function play_pause_audio(){
    const audioObject = document.getElementsByTagName("audio")[0];
    const play_pause_btn = document.getElementById("play_pause");
    if (audioObject.paused === false) {
        audioObject.pause();
        audioObject.paused = true;
        play_pause_btn.textContent = "Play Audio";
    } else {
        if(audioObject.src != ""){
            audioObject.play();
            audioObject.paused = false;
            play_pause_btn.textContent = "Pause Audio";
        } else {
            window.alert("No Currently Playing Audio");
        }
    }
}

const audioObject = document.getElementsByTagName("audio")[0];
const play_pause_btn = document.getElementById("play_pause");

audioObject.addEventListener("ended", function() {
    play_pause_btn.textContent = "Play Audio";
});

function stop_audio() {
    const audioObject = document.getElementsByTagName("audio")[0];
    const play_pause_btn = document.getElementById("play_pause");
    const mute_btn = document.getElementById("mute");
    if (audioObject.src == "") {
        window.alert("No Currently Playing Audio");
    } else {
        audioObject.pause();
        audioObject.currentTime = 0;  
        play_pause_btn.textContent = "Play Audio";
        mute_btn.textContent = "Mute Audio";
    }
}