function Person(props){
    return(
        <section>
            <h1>Personal name : {props.name}</h1>
            <p>Person age     : {props.age}</p>
        </section>
    )
}
export default Person;