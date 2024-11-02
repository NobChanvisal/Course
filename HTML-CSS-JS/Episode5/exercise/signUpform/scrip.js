const firtName = document.querySelector(".text-box-firt");
const lastName = document.querySelector(".text-box-last");
const email = document.querySelector(".text-box-email")
const BTNsignUp = document.querySelector(".signUp");

BTNsignUp.addEventListener("click", () => {
    var fullName = firtName.value + " " + lastName.value;
  console.log(fullName);
  console.log(email.value);
});
