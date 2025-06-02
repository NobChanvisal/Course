let PersonList = [
  {
    names: "Cristan Ryan",
    job: "Frontend developer",
    des: "Pagedone was born. The success and growth we have achieved since our inception are a testament to the value.",
    Image:
      "https://i.pinimg.com/736x/19/0a/fc/190afc31e3dd8e7804652d509272edbc.jpg",
  },
  {
    names: "Kim kim",
    job: "Design UI/UX",
    des: "Pagedone was born. The success and growth we have achieved since our inception are a testament to the value.",
    Image:
      "https://i.pinimg.com/736x/e5/38/52/e5385272a9f3f131c5d73e61472659d5.jpg",
  },
  {
    names: "Park Seo Jun",
    job: "Database",
    des: "Pagedone was born. The success and growth we have achieved since our inception are a testament to the value.",
    Image:
      "https://i.pinimg.com/736x/22/76/b0/2276b0f00c74eed0f339780c7a3a2472.jpg",
  },
  {
    names: "Emma Davis",
    job: "Frontend developer",
    des: "Pagedone was born. The success and growth we have achieved since our inception are a testament to the value.",
    Image:
      "https://i.pinimg.com/736x/08/32/23/08322374957450d25610b50381d543ca.jpg",
  },
  {
    names: "Doctor Dy",
    job: "Backend developer",
    des: "Pagedone was born. The success and growth we have achieved since our inception are a testament to the value.",
    Image:
      "https://i.pinimg.com/736x/c0/04/ac/c004ac62298acd5ba9b55652805a5e2c.jpg",
  },
];

function display(List) {
  displaycontain.innerHTML = "";
  let data = List.map((item) => {
    const { Image, names, job, des } = item;
    return `
            <div class="profile-card">
            <div class="profile-image-container">
                <img src=${Image}
                    class="profile-image">
            </div>

            <div class="name-title-section">
                <h2 class="profile-name">${names}</h2>
                <p class="profile-title">${job}</p>
            </div>

            <p class="profile-description">
                ${des}
            </p>

            <div class="social-icons">
                <a href="#" class="social-icon-link">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon-link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon-link">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
        `;
  }).join("");
  displaycontain.innerHTML = data;
}
console.log("hello");
const displaycontain = document.querySelector("#grid-contain");
display(PersonList);
