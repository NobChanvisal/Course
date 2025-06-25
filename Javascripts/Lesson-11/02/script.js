const submitButton = document.getElementById("submit-button");
const text = document.querySelector(".text-box");
const createDate = document.querySelector(".date");
const todoContain = document.querySelector(".todolist");
todoList = [];
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
submitButton.addEventListener("click", (e) => {
  e.preventDefault();
  todo = {
    text: text.value,
    date: createDate.value,
  };

  todoList.push(todo);
  display(todoList);
  console.log(todoList);
});

function remove(index) {
  todoList.splice(index, 1);
  display(todoList);
}
