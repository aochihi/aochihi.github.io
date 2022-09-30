$(function (){
  $('.boxgrid').hover(function(){
    $(".caption1", this).stop().animate({top:'220px'},{queue:false,duration:160});
  }, function() {
    $(".caption1", this).stop().animate({top:'350px'},{queue:false,duration:160});
  });
});

$(function () {
    $('.boxgrid').hover(function () {
        $('.caption2', this).animate({
            top: "150px"
        }, 500);
    }, function () {
        $('.caption2', this).animate({
            top: "250px"
        }, 500);
    });
});