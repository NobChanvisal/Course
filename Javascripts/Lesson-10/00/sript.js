document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("myForm");
  const radioFemale = document.getElementById("female");
  const radioMale = document.getElementById("male");

  form.addEventListener("submit", (event) => {
    event.preventDefault(); // Prevent the default form submission (which reloads the page)

    // 1. Get Username
    const username = document.getElementById("username").value;

    // 2. Get Gender (Radio Buttons)
    let gender = "";
    if (radioFemale.checked) {
      gender = "Female";
    } else if (radioMale.checked) {
      gender = "Male";
    } else {
      gender = "Not select";
    }

    // 3. Get Shift (Select/Dropdown)
    const shift = document.getElementById("shift").value;

    // 4. Get Courses (Checkboxes)
    const selectedCourses = [];
    const courseCheckboxes = document.querySelectorAll(".course-checkbox");
    // Iterate over the NodeList of checked checkboxes and push their values to the array
    courseCheckboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        selectedCourses.push(checkbox.value);
      }
    });
    // If no courses are selected, set a default message.
    const courses =
      selectedCourses.length > 0 ? selectedCourses : "None selected";

    // Log all collected data to the console
    // Log all collected data to the console
    console.log("--- Form Data ---");
    console.log("Username:", username);
    console.log("Gender:", gender);
    console.log("Shift:", shift);
    console.log("Courses:", courses);
    console.log("-----------------");
  });
});
