$("#accordion").on("shown.bs.collapse", e => {
  $("html, body").animate(
    {
      scrollTop: $(e.target)
        .prev()
        .offset().top
    },
    400
  );
});
