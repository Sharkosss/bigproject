$(document).ready(function(){
   
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $(".dropdown-trigger").dropdown();

  });

function show(anything){
    document.querySelector('.textBox').value = anything;
}

let dropdown = document.querySelector('.dropdown');
dropdown.onclick = function(){
    dropdown.classList.toggle('active');
}

