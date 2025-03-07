import React from "react";
import { useState } from "react";

function Todolist() {
  const [list, setList] = useState(["Eat Breakfast", "Coding", "football"]);
  const [newInput, setNewInput] = useState("");
  function add() {
    if (newInput.trim !== "") {
      setList((input) => [...input, newInput]);
    }
    setNewInput("");
  }

  return (
    <div className=" m-10">
      <h1 className=" py-2">To Do List</h1>
      <input
        type="text"
        className=" py-2 px-1 mr-2"
        value={newInput}
        placeholder="Enter new task..."
        onChange={(e) => setNewInput(e.target.value)}
      />
      <button className=" px-5 py-2 border" onClick={add}>Add</button>
      <ol className=" pt-3">
        {list.map((li,index) =>
            <li key={index}>
                <a href="">{li}</a>
            </li>
        )}
      </ol>
    </div>
  );
}
export default Todolist;
