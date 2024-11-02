let cal = "";
document.querySelector(".btnNum4").addEventListener("click",() =>{
    cal = cal + "4";
    console.log(cal);
})
document.querySelector(".btnNum5").addEventListener("click",() =>{
    cal += "5";
    console.log(cal);
})
document.querySelector(".btnPlus").addEventListener("click",() =>{
    cal += "+";
    console.log(cal);
})
document.querySelector(".btn-equal").addEventListener("click",() =>{
    cal = eval(cal);
    console.log(cal);
})