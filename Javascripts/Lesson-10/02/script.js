const submitButton = document.getElementById("submit-button");
const text = document.querySelector(".text-box");
const createDate = document.querySelector(".date");

todoList = [];
submitButton.addEventListener("click", (e) => {
  e.preventDefault();
  todo = {
    text: text.value,
    date: createDate.value,
  };

  todoList.push(todo);
  console.log(todoList);
});
