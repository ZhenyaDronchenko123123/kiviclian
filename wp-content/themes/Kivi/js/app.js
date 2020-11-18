
$(document).ready(function(){
    $("#slide-one").owlCarousel({
        stagePadding: 30,
          loop:true, //Зацикливаем слайдер
          margin:40, //Отступ от картино если выводите больше 1
          nav:true, //Отключил навигацию
          autoplay:true, 
          dots:false,
          smartSpeed:1000, //Время движения слайда
          autoplayTimeout:4000, //Время смены слайда
          navText : ["",""],
          responsive:{ //Адаптация в зависимости от разрешения экрана
              0:{
                  items:1,
                  nav:false,
                  stagePadding: 30,
                  margin:0,
              },
              768:{
                  items:2,
                  
              },
              1000:{
                  items:3
              },
              1600:{
                  items:4,
                  stagePadding: 80,
                  margin:50,
              },
          }
      });
    });

    $(document).ready(function(){
        $("#slide-two").owlCarousel({
              loop:true, //Зацикливаем слайдер
              nav:true,
              dots: false,
              items:1,
              navText : ["",""],
              smartSpeed:1, //Время движения слайда
              autoplay:false,
          });
          
    });
    
    $(document).ready(function(){
        $("#slide-review").owlCarousel({
              stagePadding: 0,
              loop:true, //Зацикливаем слайдер
              nav:true,
              dots: false,
              items:2,
              margin:0,
              smartSpeed:150,
              animateOut: 'fadeOut',
              navText : ["",""],
              autoplayTimeout:4000, //Время смены слайда
              autoplay:true,
              responsive:{ //Адаптация в зависимости от разрешения экрана
              0:{
                  items:1,
                  nav:false,
                  stagePadding: 20,
                  margin:5,
              },
              768:{
                  items:1,
                  
              },
              1000:{
                  items:1
              },
              1600:{
                  items:1,
                  stagePadding: 0,
                  margin:50,
              },
          }
          });
    });
