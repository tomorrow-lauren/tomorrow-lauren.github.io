$(document).ready(function () {
  $("#SFQ").on("click", "i", function(){
    event.preventDefault();
    $("#SFQ-portfolio").toggleClass("hidden");
    $("#sf-icon").toggleClass("fa fa-arrow-down");
    $("#sf-icon").toggleClass("fa fa-arrow-up");
  });
  $("#grouvie").on("click", "i", function(){
    event.preventDefault();
    $("#G-portfolio").toggleClass("hidden");
    $("#g-icon").toggleClass("fa fa-arrow-down");
    $("#g-icon").toggleClass("fa fa-arrow-up");
  });
});
