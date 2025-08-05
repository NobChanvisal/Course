const container = document.querySelector(".container");

function displays(datas) {
  return datas
    .map((d) => {
      const { title, body } = d;
      return `
        <div class="card">
          <h1>${title}</h1>
          <p>${body}</p>
        </div>
      `;
    })
    .join("");
}
const newPost = {
  title: "New Post",
  body: "This is the body of the new post.",  }

async function Addnew(newPost) {
  const response = await fetch("https://jsonplaceholder.typicode.com/posts", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(newPost),
  });
  const data = await response.json();
  container.innerHTML = displays([data]);
  
}
async function fetchData() {
  const response = await fetch("https://jsonplaceholder.typicode.com/posts");

  const data = await response.json();
  container.innerHTML = displays(data);
}

Addnew(newPost);
fetchData();

