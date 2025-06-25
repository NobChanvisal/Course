const username = document.querySelector(".js-username");
const addr = document.querySelector(".js-addr");
const sumbitButton = document.querySelector(".submit-button");
const clearButton = document.querySelector(".clear-button");
let list = [];
sumbitButton.addEventListener("click", (e) => {
  e.preventDefault();
  let newItem = {
    username: username.value,
    addr: addr.value,
  };

  list.push(newItem);
  saveData(list);

  display(list);
  username.value = "";
  addr.value = "";
});
clearButton.addEventListener("click", () => {
  localStorage.clear();
});
  function saveData(data) {
    localStorage.setItem("listStorage", JSON.stringify(data));//To convert a JavaScript value (object or array) into a JSON string.
  }
function remove(index) {
  list.splice(index, 1);
  saveData(list);
  display(list);
}
function loadData() {
  const storedList = localStorage.getItem("listStorage");
  if (storedList) {
    try {
      list = JSON.parse(storedList);//To convert a JSON string back into a JavaScript value (object or array).
    } catch (e) {
      console.error("Error parsing data from localStorage:", e);
      list = []; // Reset if parsing fails
    }
  }
}
function display(data) {
  const html = data
    .map((item, index) => {
      return `
            <tr>
              <td>
              ${item.username}
              </td>
              <td>
                ${item.addr}
              </td>
              <td>
                <button onclick= 'remove(${index})'>delete</button>
              </td>
            </tr>
        `;
    })
    .join("");
  document.querySelector(".contain").innerHTML = html;
}
loadData();
display(list);
