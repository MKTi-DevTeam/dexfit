window.onload = function(event) {
  //putContentAfterHeader();
  //setSliderHeight();
  ShowMenuOnMobile();
  adjustCarousel(carousel_name1);
};

window.onresize = function(event) {
  //putContentAfterHeader();
  //setSliderHeight();
  ShowMenuOnMobile();
  adjustCarousel(carousel_name1);
};


function ShowMenuOnMobile(){
  if( $(window).width() <= 992){
    showTopMenu(); //from index-menu.php
  }
}
function putContentAfterHeader(){
  if( $("#header-space").length ) { // If the elements exists in the DOM then
    var header_height;
    header_height = $( "header" ).height();
    $("#header-space").attr("style", "height : " + header_height + "px");
  }
}
