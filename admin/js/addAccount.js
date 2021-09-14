var view = document.getElementById("admin__modal");
var btnAccount = document.getElementById("addAccount")
var btnClose = document.getElementsByClassName("close")[0]

// Add Account Modal 
btnAccount.onclick = function () {
    view.style.display = "block"
}
btnClose.onclick = function () {
    view.style.display = "none"
}
window.onclick = function (event) {
    if (event.target == view) {
      view.style.display = "none";
    }
  }
