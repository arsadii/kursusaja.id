const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
    nav.classList.toggle('slide');
})

function smoothScrool(target, duration, tposition){
    var target = document.querySelector(target);
    var targetPosition = tposition;
    var startPosition = window.pageYOffset;
    var distance = targetPosition - startPosition;
    var startTime = null;

    function animation(currentTime){
        if(startTime === null) startTime = currentTime;
        var timeElapsed = currentTime -startTime;
        var run = ease(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0,run);
        if (timeElapsed < duration) requestAnimationFrame(animation); 
    }

    function ease(t, b, c, d){
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
}

var kelas = document.getElementById("gokelas");
var event = document.getElementById("goevent");
var tentang = document.getElementById("gotentang");

var pkelas, pevent, ptentang = null;

var width = 1366;

kelas.addEventListener('click', function(){
    width = window.innerWidth;
    if (width < 576){
        pkelas = 579;
    } else if (width < 768) {
        pkelas = 513;
    } else {
        pkelas = 411;
    }
    smoothScrool('#kelas', 1000, pkelas);
});

event.addEventListener('click', function(){
    width = window.innerWidth;
    if (width < 576){
        pevent = 1957;
    } else if (width < 768) {
        pevent = 1881;
    } else {
        pevent = 1197;
    }
    smoothScrool('#event', 1000, pevent);
});

tentang.addEventListener('click', function(){
    width = window.innerWidth;
    if (width < 576){
        ptentang = 3115;
    } else if (width < 768) {
        ptentang = 3021;
    } else {
        ptentang = 1710;
    }
    smoothScrool('#tentang', 1000, ptentang);
});

var menudiv = document.getElementById("menu");
var menu = menudiv.getElementsByClassName("menu");

for (var i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
  
      if (current.length > 0) {
        current[0].className = current[0].className.replace(" active", "");
      }
      
      this.className += " active";
    });
  } 
