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

// ____________________________________________________________________________________________________________________________________________________________________

    function printTime() {
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hours: 'numeric', mins: "numeric"};
        var d = new Date();
        var date = d.toLocaleDateString('fr-FR', options);
        var time = d.toLocaleTimeString('fr-FR');
        document.getElementById("heure").innerHTML = date + " - " + time;
    }
    setInterval(printTime, 1000);

// ________________________________________________________________________________________________________________________________________________________________________

var btn = document.getElementById("btn");
var nav = document.getElementById("nav");
var vrai = false;

btn.onclick = function(){
    if(vrai === false){
        nav.classList.add("vrai");
        vrai = true;
        console.log(vrai);
    }
    else{
        nav.classList.remove("vrai");
        vrai = false; 
        console.log(vrai);
    }
    console.log("click");
}

// ______________________________________________________________________________________________________________________________________

// function printTime() {
//     var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hours: 'numeric', mins: "numeric"};
//     var d = new Date();
//     var date = d.toLocaleDateString('fr-FR', options);
//     var time = d.toLocaleTimeString('fr-FR');
//     // var hours = d.getHours();
//     // var mins = d.getMinutes();
//     // var secs = d.getSeconds();
//     // var mil = d.getMilliseconds();

//     //document.getElementById("p").innerHTML ="Heure"+" "+hours+":"+mins;
//     document.getElementById("p").innerHTML = date + " - " + time;
// }
// setInterval(printTime, 1000);

// ____________________________________________________________________________________________________________________________________________


console.log("hello")

var btnonoff = document.getElementById("btnonoff");
var body = document.getElementById("body");
var btn = document.getElementById("btn");
var Claire = document.getElementsByName("themSelect").values;
var sombre = document.getElementsByName("themSelect").values;
var select = document.getElementById("themSelect");
var ul = document.getElementById("ul");
var ok = false;

//el.addEventListener("click", function(){modifyText("four")}, false);
select.addEventListener('change', function(){
    SelectTheme(event.target.value);
});

function SelectTheme(themSelect) {

        if (themSelect === "Claire"){
            body.style.backgroundColor = "#C5C3C3";
            body.style.color = "#000";
            btnonoff.style.boxShadow = "4px 3px 3px rgba(2, 00, 0, 0.74)";
            console.log("Claire")
        }
        if (themSelect ==="Sombre"){
            body.style.backgroundColor = "#272727";
            body.style.color = "#F5F5F5";
            btnonoff.style.boxShadow = "4px 3px 3px rgba(218, 11, 11, 0.40)";
            select.style.boxShadow = "4px 3px 3px rgba(218, 11, 11, 0.40)";
            ul.style.boxShadow =  "5px 5px 5px rgba(189, 189, 189, 0.842)"
            ok = false;
            console.log("Sombre");
        }
            if (themSelect === "defaut"){
                body.style.backgroundColor = "#F2F2F2F2";
                body.style.color = "black";
                btnonoff.style.boxShadow = "4px 3px 3px rgba(2, 11, 11, 0.74)";
                ok = false;
                console.log("defaut");
            }
}

btnonoff.onclick = function() {
    if (ok === false){
    body.style.backgroundColor = "#C5C3C3";
    body.style.color = "#000";
    btnonoff.style.boxShadow = "4px 3px 3px rgba(2, 00, 0, 0.74)";
    select.style.boxShadow = "4px 3px 3px rgba(2, 00, 0, 0.74)";
    ul.style.boxShadow =  "5px 5px 5px rgba(110, 110, 110, 0.842)"
    ok = true;
    console.log(ok);
    }
    else{
        body.style.backgroundColor = "#272727";
        body.style.color = "#F5F5F5";
        btnonoff.style.boxShadow = "4px 3px 3px rgba(218, 11, 11, 0.40)";
        select.style.boxShadow = "4px 3px 3px rgba(218, 11, 11, 0.40)";
        ul.style.boxShadow =  "5px 5px 5px rgba(189, 189, 189, 0.892)"
        ok = false;
        console.log(ok);
    }
    console.log("click");
}