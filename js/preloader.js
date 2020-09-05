paceOptions = {
   ajax: true,
   document: true,
   eventLag: false
};

Pace.on('done', function(){
   $('.p').delay(500).animate({top: "300", opacity: '0'}, 3000, $.bez([0.19, 1, 0.22, 1]));

   $("#preloader").delay(1500).animate({top: "-1000"}, 2000, $.bez([0.19, 1, 0.22, 1]))
})