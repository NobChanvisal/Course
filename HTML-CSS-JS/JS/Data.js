// Assuming your JSON data is stored in a variable called 'data'
fetch("./Data.json")
  .then((res) => res.json())
  .then((data) => {
    const newArrival= data.slice(-5);

    // Log the last 5 items to the console
    console.log(newArrival);
  });
