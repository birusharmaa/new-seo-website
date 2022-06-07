$(document).ready(function () {
  $(".changeThemeBtn").on("click", function () {
    let btnClass = $(this).attr("data-themeColor");

    let bodyClasses = $("body").attr("class").split(" ");

    let classToRemove = bodyClasses.find((cla) => cla.match("theme-"));

    $("body").removeClass(classToRemove);

    $("body").addClass("theme-" + btnClass);
  });
});
