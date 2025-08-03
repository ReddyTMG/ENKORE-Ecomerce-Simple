document.addEventListener("DOMContentLoaded", function() {
    const loginTab = document.getElementById("loginTab");
    const registerTab = document.getElementById("registerTab");
    const loginForm = document.getElementById("login-con");
    const registerForm = document.getElementById("register-con");

    loginTab.addEventListener("click", function() {
        loginTab.classList.add("active");
        registerTab.classList.remove("active");
        loginForm.style.display = "block";
        registerForm.style.display = "none";
    });

    registerTab.addEventListener("click", function() {
        registerTab.classList.add("active");
        loginTab.classList.remove("active");
        registerForm.style.display = "block";
        loginForm.style.display = "none";
    });
});