const addProductForm = document.querySelector("#add-product-form");
addProductForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const image = document.querySelector("#image").value;
  const names = document.querySelector("#names").value;
  const rate = document.querySelector("#rate").value;
  const price = Math.round(
    parseFloat(document.querySelector("#price").value) * 100
  );
  const prevPriceInput = document.querySelector("#prevPrice").value;
  const prevPrice = prevPriceInput
    ? Math.round(parseFloat(prevPriceInput) * 100)
    : 0;
  const color = document.querySelector("#color").value;
  const brand = document.querySelector("#brand").value;
  const category = document.querySelector("#category").value;

  const newId = Math.max(...data.map((item) => item.id)) + 1;

  const newProduct = {
    id: newId,
    image,
    names,
    rate,
    price,
    prevPrice,
    color,
    brand,
    category,
  };

  data.push(newProduct);
  display(data.reverse());
  addProductForm.reset();
});
