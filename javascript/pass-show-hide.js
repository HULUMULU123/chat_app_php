const passwordField = document.querySelector(
  ".form .field input[type='password']"
);
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
  if (passwordField.type == "password") {
    toggleBtn.classList.add("active");
    passwordField.type = "text";
  } else {
    toggleBtn.classList.remove("active");
    passwordField.type = "password";
  }
};
