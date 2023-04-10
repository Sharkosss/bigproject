 // page dans projet.
 $(document).ready(function(){
    $('.modal').modal();
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.collapsible').collapsible();
  });
  
  function autoplay() { 
    $('.carouselturn .carousel').carousel('next');   
    setTimeout(autoplay, 3000);
   }
   setTimeout(autoplay, 3000);
  