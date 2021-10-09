var view = document.getElementById("admin__modal");
var addFooter = document.getElementById("addFooter");
var btnClose = document.getElementsByClassName("close")[0];

// Add Food Modal
addFooter.onclick = function () {
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
