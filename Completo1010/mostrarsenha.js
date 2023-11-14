function togglePasswordVisibility() {
    var passwordInput = document.getElementById("passwordInput");
    var showPasswordButton = document.getElementById("showPasswordButton");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      showPasswordButton.classList.add("show-password");
    } else {
      passwordInput.type = "password";
      showPasswordButton.classList.remove("show-password");
    }
  }
  