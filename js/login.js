var btn = document.getElementById("regist")
var login = document.getElementById("loginForm")
var view = document.getElementById("register")
var signin = document.getElementById("signin")

btn.onclick = function() {
    view.style.display = "block";
    signin.style.display = "none";
}

login.onclick = function() {
    view.style.display = "none";
    signin.style.display = "block";
}
