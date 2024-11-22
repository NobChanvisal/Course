import React from "react";
import Yticon from "./assets/components/ImageIcon/youtube.png";
import Code from "./assets/components/ImageIcon/cademy.png";
import "./App.css";
import User from "./assets/components/User";
import Person from "./assets/components/Person";
import Product from "./assets/components/Product";
import GoogleCard from "./assets/components/GoogleCard";
import EcommerceCard from "./assets/components/EcommerceCart";
function App() {
  const Cards = [
    {
      id: "1",
      img: "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/377048/02/sv01/fnd/PNA/fmt/png/Softride-Enzo-Evo-Men's-Running-Shoes",
      title: "Softride Enzo Evo",
      price: 30
    },
    {
      id: "2",
      img: "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_500,h_500/global/401622/02/sv01/fnd/PNA/fmt/png/ST-MILER-Men's-Sneakers",
      title: "ST MILER",
      price: 40
    },
    {
      id : "3",
      img: "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_500,h_500/global/308785/01/sv01/fnd/PNA/fmt/png/Scuderia-Ferrari-Desert-Sun-Suede-XL-Sneakers",
      title: "Scuderia Ferrari Suede XL Desert",
      price: 90
    }
  ];
  return (
    //1
    // <User
    //   img="https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&w=600"
    //   name="Cristain"
    //   age={20}
    //   isMarried={false}
    //   hobbies={["readbook" , "Write code"]}
    // />

    //2
    // <>
    //   <Person
    //     name="Chandara"
    //     age={19}
    //   />

    //   <Product
    //     name="Coca"
    //     price={2}
    //   />
    // </>
    //3
    // <div class="m-10 grid grid-cols-[112px_112px_112px] gap-5">
    //   <GoogleCard
    //     icon={Yticon}
    //     title="Youtube"
    //     link="https://www.youtube.com/"
    //   />

    //   <GoogleCard
    //     icon="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/W3Schools_logo.svg/640px-W3Schools_logo.svg.png"
    //     title="W3school"
    //     link="https://www.w3schools.com/"
    //   />
    //   <GoogleCard
    //     icon={Code}
    //     title="Codecademy"
    //     link="https://www.codecademy.com/"
    //   />
    // </div>
    <div className=" m-5 flex flex-row flex-wrap">
      {Cards.map((card) => (
        <EcommerceCard
          key={card.id}
          img={card.img}
          title={card.title}
          price={card.price}
        />
      ))}
    </div>
  );
}

export default App;
