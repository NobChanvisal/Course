function ProductList() {
  const products = [
    { id: 1, name: "Phone", price: "$699" },
    { id: 2, name: "Laptop", price: "$1200" },
    { id: 3, name: "Headphones", price: "$199" },
  ];

  return(
    <section>
        {products.map((pro)=>(
            <div key={pro.id}>
                <p>Product id : {pro.id}, Product price : {pro.price}, Product name : {pro.name}</p>
            </div>
        ))}
    </section>
  );
}
export default ProductList;
