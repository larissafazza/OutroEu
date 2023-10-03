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