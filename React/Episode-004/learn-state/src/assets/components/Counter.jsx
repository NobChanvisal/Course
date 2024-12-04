import React from "react";
import { useState } from "react";

function Counter() {
    const [count, setCount] = useState(0)

  return (
    <div className=" w-full flex justify-center">
      <div className=" flex flex-col justify-center">
        <h2 className=" uppercase text-[20px] tracking-[1.5px]">Counter App</h2>
        <div className=" border w-fit mt-4">
          <button onClick={() => setCount(count -1)} className=" py-2 px-5 text-[15px]">-</button>
          <span className=" px-3 py-2">{count}</span>
          <button onClick={() => setCount(count + 1)} className=" py-2 px-5  text-[15px]">+</button>
        </div>
      </div>
    </div>
  );
}
export default Counter;
