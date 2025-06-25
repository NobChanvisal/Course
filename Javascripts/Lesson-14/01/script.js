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

// async function fetchData() {
//   const response = await fetch("https://jsonplaceholder.typicode.com/posts");

//   const data = await response.json();
//   container.innerHTML = displays(data);
// }

// fetchData();

const getData = async () => {
  const response = await fetch("https://jsonplaceholder.typicode.com/posts");
  return await response.json();
};

(async () => {
  const data = await getData();
  container.innerHTML = displays(data);
})();
