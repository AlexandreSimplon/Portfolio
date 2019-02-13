    // Automatic Slideshow - change image every 4.5 seconds
    var myIndex = 0;
        carousel();
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4500);
    }

    function printTime() {
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hours: 'numeric', mins: "numeric"};
        var d = new Date();
        var date = d.toLocaleDateString('fr-FR', options);
        var time = d.toLocaleTimeString('fr-FR');
        document.getElementById("p").innerHTML = date + " - " + time;
    }
    setInterval(printTime, 1000);