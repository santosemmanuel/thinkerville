window.addEventListener('DOMContentLoaded', event => {
        
  //Open the side navigation
  const sidebarToggle = document.body.querySelector('#sidebarOpen');
  // const mediaQuery = window.matchMedia("(max-width: 360px)");

  // if (mediaQuery.matches) {
  //     // The viewport size matches the media query
  //     document.body.classList.add('sb-sidenav-toggled');
  //     sidebarToggle.classList.remove('d-none');
  //     document.body.querySelector('#page-content-wrapped').id = 'page-content-wrapper';
  //     document.body.querySelector("#thinkervilleHeaderLogo").style.display = 'block';
  // }

  if (sidebarToggle) {
      sidebarToggle.addEventListener('mouseover', event => {
          event.preventDefault();
          document.body.classList.remove('sb-sidenav-toggled');
          document.body.querySelector("#sidebar-wrapper").classList.remove('d-none');
          document.body.querySelector("#sidebar-wrapper").classList.add('d-block');
          document.body.querySelector('#page-content-wrapper').id = 'page-content-wrapped';
      });
  }
  
  // Close the side navigation
  const sidebarClose = document.body.querySelector('#sidebarClose');
  if(sidebarClose) {
      sidebarClose.addEventListener('click', event => {
          event.preventDefault();
          document.body.classList.add('sb-sidenav-toggled');
          sidebarToggle.classList.remove('d-none');
          document.body.querySelector('#page-content-wrapped').id = 'page-content-wrapper';
      });
      
  }

});

document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
});

$(document).ready(function(){
  $("#sidebar-wrapper").on("mouseover", function(){
    $(this).removeClass("d-none");
    $(this).addClass("d-block");
  }).on("mouseout", function(){
    $(this).removeClass("d-block");
    $(this).addClass("d-none");
  })
  
});