
function generateRandomNumber() {
  // const min = 1;
  // const max = 100; // You can change the range as needed
  const number = document.querySelector("input");
  console.log(number.value);
  const randomNumber = Math.floor(Math.random() * 6 + 1);

  //Display the random number in the result paragraph
  document.getElementById(
    "result"
  ).textContent = `Random Number: ${randomNumber}`;
  if(number == randomNumber){
    alert("You are win");
  }
  else{
    alert("You are lose");
  }
  
}


document
  .getElementById("generateButton")
  .addEventListener("click", generateRandomNumber);
