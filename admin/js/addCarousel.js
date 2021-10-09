var view = document.getElementById("admin__modal");
var btnCarousel = document.getElementById("addCarousel");
var btnClose = document.getElementsByClassName("close")[0];

// Add Category Modal
btnCarousel.onclick = function () {
  view.style.display = "block";
};
btnClose.onclick = function () {
  view.style.display = "none";
};
window.onclick = function (event) {
  if (event.target == view) {
    view.style.display = "none";
  }
};
