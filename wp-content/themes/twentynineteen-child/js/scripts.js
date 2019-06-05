jQuery('document').ready(function(){
    //Init slick slider
    jQuery('#slider-box').slick({
        arrows:false,
        dots:true
      });
      //Mobile menu dropdown
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      var burger = document.querySelector('span.burger');
      var closeBtn = document.querySelector('a.closebtn');

      if (burger) {
        burger.addEventListener('click', function(){
          openNav();
        });
      }
      closeBtn.addEventListener('click', function(){
        closeNav();
      })
     
     
    
			// window.onscroll = function() {myFunction()};

			// var header = document.getElementById("myHeader");
			// var sticky = header.offsetTop;

			// function myFunction() {
			// if (window.pageYOffset > sticky) {
			// 	header.classList.add("sticky");
			// } else {
			// 	header.classList.remove("sticky");
			// }
			// }

    
});