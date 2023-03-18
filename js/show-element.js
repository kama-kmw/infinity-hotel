$(".question").click(function () {
  $(this).parent().find(".faq__answer").slideToggle(300);
  $(this).find(".bx-chevron-down").toggleClass("bx-chevron-up");
  return false;
});

// $(".menu__link-phone").click(function () {
//   $(this).parent().find(".menu__link-phone__item").slideToggle(300);
//   return false;
// });
 