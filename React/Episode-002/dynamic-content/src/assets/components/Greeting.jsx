function Greeting(){
    const name = "jonh"
    const date = new Date();

    return(
        <div>
            <p>Name: {name}</p>
            <p>Date: {date.getDate()}</p>
        </div>
    )
}   
export default Greeting;