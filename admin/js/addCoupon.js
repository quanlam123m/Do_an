var view = document.getElementById("admin__modal");
var btnCoupon = document.getElementById("addCoupon");
var btnClose = document.getElementsByClassName("close")[0];

// Add Category Modal
btnCoupon.onclick = function () {
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
