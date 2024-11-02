const Decream = document.querySelector(".decream-button");
const Incream = document.querySelector(".increase-button");
const span = document.querySelector("span");

let count = 0;  
Decream.addEventListener("click", () => {
    count++;  // Increment count
    console.log(count);
});
Incream.addEventListener("click", () => {
    count--;  // Increment count
    console.log(count);
});

