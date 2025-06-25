const submitButton = document.getElementById("submit-button");

let Students = [];


submitButton.addEventListener("click", (e) => {
  const username = document.getElementById("js-username").value;
  const email = document.getElementById("js-email").value;
  const phone = document.getElementById("js-phone").value;
  const maleRadio = document.getElementById("js-male");
  const femalRadio = document.getElementById("js-female");
  const classRoom = document.getElementById("js-classRoom").value;
  const address = document.getElementById("js-addr").value;
  const showcontent = document.getElementById("tb-contents");

  e.preventDefault();
  let gender = "";
  if (maleRadio.checked) {
    gender = "Male";
  } else if (femalRadio.checked) {
    gender = "female";
  }

  newData = {
    username: username,
    phone: phone,
    gender: gender,
    classRoom: classRoom,
    address: address,
  };
  Students.push(newData)
  console.log(Students)
  const newRowContent = `
            <td>${username}</td>
            <td>${email}</td>
            <td>${phone}</td>
            <td>${gender}</td>
            <td>${classRoom}</td>
            `;
  showcontent.innerHTML = newRowContent;
});
