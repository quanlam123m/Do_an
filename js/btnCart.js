var modal = document.getElementById("cart");
var btn = document.getElementById("myCart");
var close = document.getElementsByClassName("close")[0];
// mỗi close là một html colection nên khi  muốn lấy giá trị html thì phải thêm [0]. 
// Nếu có 2 cái component cùng class thì khi [0] nó sẽ hiển thị component 1 còn [1] thì nó sẽ hiển thị component 2.
var close_footer = document.getElementsByClassName("close-footer")[0];
btn.onclick = function () {
  modal.style.display = "block";
}
close.onclick = function () {
  modal.style.display = "none";
}
close_footer.onclick = function () {
  modal.style.display = "none";
}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}