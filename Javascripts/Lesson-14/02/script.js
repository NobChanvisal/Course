function displays(data) {
  const innerHTML = data.products
    .map((d) => {
      const { thumbnail } = d;
      return `
        <img src = ${thumbnail}>
    `;
    })
    .join("");
  return innerHTML;
}

const getData = async () => {
  const res = await fetch("https://dummyjson.com/products");
  return await res.json();
};

(async () => {
  const products = await getData();
  console.log(products);
  document.querySelector(".contain").innerHTML = displays(products);
})();
