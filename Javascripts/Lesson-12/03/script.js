const submitButton = document.getElementById("submit-button");
const text = document.querySelector(".text-box");
const createDate = document.querySelector(".date");
const todoContain = document.querySelector(".todolist");
let todoList = [];
function display(data) {
  const html = data
    .map((item, index) => {
      const { text, date } = item;
      return `
      <div class = "todo-item" key = ${index}>
        <div>
          <h2>${text}</h2>
          <p>${date}</p>
        </div>
        <div class= "remove-button" onclick= 'remove(${index})'>remove</div>
      </div>

    `;
    })
    .join("");

  todoContain.innerHTML = html;
}
function saveList(data) {
  localStorage.setItem("todoList", JSON.stringify(data));
}
function loadData() {
  const listData = localStorage.getItem("todoList");
  if (listData) {
    todoList = JSON.parse(listData);
  }
}
submitButton.addEventListener("click", (e) => {
  e.preventDefault();
  todo = {
    text: text.value,
    date: createDate.value,
  };

  todoList.push(todo);
  saveList(todoList);
  display(todoList);
  text.value = "";
  createDate.value = "";
  console.log(todoList);
});

function remove(index) {
  todoList.splice(index, 1);
  display(todoList);
}
loadData();
display(todoList);
