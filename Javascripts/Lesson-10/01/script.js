const username = document.getElementById("txt-username");
const submitButton = document.getElementById("submit-button");
const password = document.getElementById("txt-password");
const email = document.getElementById("txt-email");
function showErrorMessage(id, message) {
  const display = document.getElementById(id);
  display.innerHTML = message;
}

function checkUsername() {
  if (username.value === "") {
    showErrorMessage("error-username", "username can't be blank");
  } else {
    showErrorMessage("error-username", "");
  }
}
function checkPassword() {
  if (password.value === "") {
    showErrorMessage("error-password", "password can't be blank");
  } else if (password.value.length < 8) {
    showErrorMessage("error-password", "password must than 8 character");
  } else {
    showErrorMessage("error-password", "");
  }
}

function checkEmail() {
  if (email.value === "") {
    showErrorMessage("error-email", "email can't be blank");
  } else {
    showErrorMessage("error-email", "");
  }
}

submitButton.addEventListener("click", (e) => {
  e.preventDefault();
  checkUsername();
  checkEmail();
  checkPassword();
});
