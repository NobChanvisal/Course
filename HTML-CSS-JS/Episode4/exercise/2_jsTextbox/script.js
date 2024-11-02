// const BTNSubmit = document.querySelector("button");

const textBox = document.querySelector(".text-box");
const span = document.querySelector("span")
document.querySelector("button").addEventListener("click", () =>{
    span.innerHTML = textBox.value;
})
