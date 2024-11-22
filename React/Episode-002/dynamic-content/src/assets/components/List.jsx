function List() {
    const Cars = [
        {
            id:"1",
            name: "Ford",
            color: "Black",
            price: 35000,
            year: "2024"
        },
        {
            id:"2",
            name: "Lamborghini Huracán",
            color: "Orange Black",
            price: 249865,
            year: "2024"
        },
        {
            id:"3",
            name: "Porsche 718 Cayman",
            color: "Black",
            price: 68300,
            year: "2024"
        },
    ];

    return (
        <section>
            {Cars.map((car) => (
                <div key={car.id}>
                    <p>Name: {car.name}</p>
                    <p>Price: ${car.price}</p>
                    <p>Color: {car.color}</p>
                    <p>Year: {car.year}</p>
                </div>
            ))}
        </section>
    );
}

export default List;
