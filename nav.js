$('#main_menu a').click(function (e) {
  var link, offset, target, topFix;
  link = $(this).attr("href");
  target = $(link);
  topFix = 41;

  $(this).tab('show');
  
  // if (_gaq) {
  //   _gaq.push(['_trackPageview', "/" + link]);
  // }

 $("html, body").animate({
    scrollTop: target.offset().top - topFix
  }, {
    druation: 3000,
    easing: "easeInOutQuad"
  });
  
  //return e.preventDefault();
});