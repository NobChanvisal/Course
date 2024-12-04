import React, { useState } from "react";

function Shoppingcart() {
  const [item, setItem] = useState([]);
  const [name, setName] = useState("");
  const [qty, setQty] = useState("");

  const handleSubmit = (e) => {
    e.preventDefault();

    if (!name || !qty) return;

    const newItem = { name, qty: parseInt(qty) };

    setItem((prevItem) => [...prevItem, newItem]);
    setName("");
    setQty("");
  };

  return (
    <div>
      <h2>Shopping cart</h2>
      <form onSubmit={handleSubmit}>
        <input
          type="text"
          value={name}
          placeholder="Enter name"
          onChange={(e) => setName(e.target.value)}
        />

        <input
          value={qty}
          type="number"
          placeholder="Enter qty"
          onChange={(e) => setQty(e.target.value)}  
        />
        <button type="submit">Add</button>
      </form>
      <ul>
        {item.map((item, index) => (
          <li key={index}>
            {item.name} - {item.qty}
          </li>
        ))}
      </ul>
    </div>
  );
}

export default Shoppingcart;
