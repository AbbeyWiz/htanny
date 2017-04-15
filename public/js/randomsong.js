
var lastSong = null;
var selection = null;
var playlist = ["{{asset('audio/0.mp3')}}", "{{asset('audio/1.mp3')}}", "{{asset('audio/2.mp3')}}"]; // List of Songs
var player = document.getElementById("audioplayer"); // Get Audio Element
player.autoplay=true;
player.addEventListener("ended", selectRandom); // Run function when song ends

function selectRandom(){
while(selection == lastSong){ // Repeat until different song is selected
  selection = Math.floor(Math.random() * playlist.length);
}
lastSong = selection; // Remember last song
player.src = playlist[selection]; // Tell HTML the location of the new Song

}

selectRandom(); // Select initial song
player.play(); // Start Song
