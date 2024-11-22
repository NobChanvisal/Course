function ProductInfo(){
    const Product= {
        name: "Laptop",
        price: 1200,
        availability: "In stock"
    }

    return(
        <div>
            <p>Name : {Product.name}</p>
            <p>Price : ${Product.price}</p>
            <p>AVailability : {Product.availability}</p>
        </div>
    )
}
export default ProductInfo;