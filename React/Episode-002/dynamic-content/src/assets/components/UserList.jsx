function UserList() {
  const users = [
    { id: 1, name: "Alice", age: 25 },
    { id: 2, name: "Bob", age: 30 },
    { id: 3, name: "Charlie", age: 22 },
  ]; 

  return(
    <section>
        {users.map((user)=>(
            <div key={user.id}>
                <p>User Id : {user.id}, User name : {user.name}, User age : {user.age}</p>
            </div>
        ))}
    </section>
  )
}

export default UserList;