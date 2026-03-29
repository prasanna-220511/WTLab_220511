$(document).ready(function () {
  // jQuery show/hide
  $("#toggleMessageBtn").click(function () {
    $("#toggleMessage").toggle();
  });

  // jQuery hover
  $(".card").hover(
    function () {
      $(this).addClass("shadow-lg");
    },
    function () {
      $(this).removeClass("shadow-lg");
    }
  );

  // Dynamic modal using jQuery
  $(".open-project-modal").click(function () {
    let title = $(this).data("title");
    let description = $(this).data("description");

    $("#modalProjectTitle").text(title);
    $("#modalProjectDescription").text(description);

    let projectModal = new bootstrap.Modal(document.getElementById("projectModal"));
    projectModal.show();
  });

  // Enable tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Enable popovers
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
  popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });
});