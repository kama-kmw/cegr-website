$(".mob-menu__show").click(function () {
  $(this).parent().find(".quicklinks-item").slideToggle(300);
  $(this).find(".sp__arrow-d").toggleClass("sp__arrow-u");
  return false;
});

