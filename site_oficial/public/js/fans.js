let count = 1;

document.getElementById("radio1").checked = true;

setInterval(function(){
    nextSlide();
}, 12000);

function nextSlide(){
    count++;
    
    if(count>4){
        count = 1;
    }

    document.getElementById("radio" + count).checked = true;
}

function manualSelect(elemento){
    var id = elemento.id.charAt(5);
    count = parseInt(id);
}

function changePlayer(albumId) {
    // alert(albumId);
    iframe = document.getElementById("spotify-iframe");
    if(albumId == 'album1'){
        iframe.src = "https://open.spotify.com/embed/album/0TkXnCE4W4ePll9mXmjhP4?utm_source=generator";
    }else if(albumId == 'album2'){
        iframe.src = "https://open.spotify.com/embed/album/41fnHdoqon2AEWYdXUysiK?utm_source=generator";
    }else if(albumId == 'album3'){
        iframe.src = "https://open.spotify.com/embed/album/7JVWJYX1Bjq1eIzzexh8mE?utm_source=generator";
    }else{
        iframe.src = "https://open.spotify.com/embed/playlist/37i9dQZF1DZ06evO1TFkf6?utm_source=generator";

    }

    /*
    function changeIframeSrc(newSrc) {
    const iframe = document.getElementById("spotify-iframe");
    iframe.src = newSrc;
}
    */
}