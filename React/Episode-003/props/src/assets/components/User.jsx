// React components use props to communicate with each other. 
//Every parent component can pass some information to its child 
//components by giving them props. Props might remind you of HTML attributes, 
//but you can pass any JavaScript value through them, including objects, arrays, and functions.

const User = (props) => {
  return (
    <section className=" flex flex-col items-center">
      <img src={props.img} alt={props.name} width={200} />
      <h1>Name: {props.name}</h1>
      <h2>Age: {props.age}</h2>
      <h3>Is married: {props.isMarried}</h3>
      <h4>Hobbies: {props.hobbies} </h4>
    </section>
  );
};

//   const User = ({ img, name, age, isMarried, hobbies }) => {
//     return (
//       <section>
//         <img src={img} alt={name} width={200} />
//         <h1>Name: {name}</h1>
//         <h2>Age: {age}</h2>
//         <h3>Is married: {isMarried}</h3>
//         <h4>Hobbies: {hobbies} </h4>
//       </section>
//     );
//   };

export default User;
