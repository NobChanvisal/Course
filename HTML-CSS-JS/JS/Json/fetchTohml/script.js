import { cart } from "./cart.js";
const container = document.querySelector(".container");
const cartContainer = document.querySelector(".cart-item-container");

const filterBtn = document.querySelectorAll(".filter-button");
const cartBtn = document.querySelector(".js-cart-button");
const sidebar = document.querySelector(".side-bar");
const overlay = document.querySelector(".overlay");

cartBtn.addEventListener("click", () => {
  overlay.classList.add("active");
  sidebar.classList.add("active");
});

overlay.addEventListener("click", () => {
  overlay.classList.remove("active");
  sidebar.classList.remove("active");
});

function addToCart(card) {
  const matchingItem = cart.find(cartItem => cartItem.id === card.id);
  if (matchingItem) {
    matchingItem.qty++;
  } else {
    cart.push({ ...card});
  }
  console.log(cart);
}

function qtyAlert() {
  const qtybg = document.querySelector(".qty-content");
  let qtys = 0;
  cart.forEach((cartItem) => {
    qtys += cartItem.qty;
  });
  if (qtys > 0) {
    qtybg.classList.add("active");
    document.querySelector(".js-qty").innerHTML = qtys;
  }
}

function displayCart() {
  cartContainer.innerHTML = ''; // Clear the container before adding items
  cart.forEach((cartItem, index) => {
    const { id, name, img, lecturer, hour } = cartItem;
    cartContainer.innerHTML += `
      <div class="item-cart">
        <div class="left">
          <img class="cart-image" src="${img}" alt="" />
        </div>
        <div class="right">
          <div class="info" style="text-align: start;">
            <div class="lecturer" style="font-size: 13px;">${name}</div>
            <div class="tea-name" style="font-size: 13px;">${lecturer}</div>
          </div>
          <span class="flex-center">${hour}</span>
          <button class="remove-button" data-id="${id}">Remove</button>
        </div>
      </div>
    `;
  });

  // Attach event listeners to remove buttons
  cartContainer.querySelectorAll(".remove-button").forEach((button, index) => {
    button.addEventListener("click", () => {
      cart.splice(index, 1); // Remove the item at this index
      displayCart(); // Re-render cart items
      qtyAlert(); // Update quantity
    });
  });
}

function display(courseItem) {
  container.innerHTML = "";
  courseItem.forEach((card) => {
    const { id, course, img, des,qty, hour, profile, rate, lecturer } = card;

    container.innerHTML += `
      <div class="card">
        <div class="img-course">
          <img src=${img} alt="" />
        </div>
        <div class="card-info">
          <div class="course-name">${course}</div>
          <div class="description">${des}</div>
          <div class="timeNrating flex-center">
            <div class="rating-star">
              <img src=${rate} alt="" />
            </div>
            <div class="time">
              <i class="bx bx-time-five"></i>
              <span>${hour}</span>
            </div>
          </div>
          <div class="card-footer">
            <div class="teacher-info">
              <img class="profile" src=${profile} alt="" />
              <div class="teaAbout">
                <p class="lecturer">Lecturer</p>
                <p class="tea-name">${lecturer}</p>
              </div>
            </div>
            <button class="save-button js-add-to-cart" data-id="${id}">End Roll</button>
          </div>
        </div>
      </div>`;
  });

  // Add to cart buttons
  const savebuttons = document.querySelectorAll(".js-add-to-cart");
  savebuttons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const cardId = e.currentTarget.dataset.id;
      const card = courseItem.find(item => item.id == cardId);
      addToCart(card);
      qtyAlert();
      displayCart();
    });
  });
}

// Fetch and display data
fetch("./Data.json")
  .then((res) => res.json())
  .then((data) => {
    display(data);

    // Filter functionality
    filterBtn.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        document.querySelector(".active")?.classList.remove("active");
        btn.classList.add("active");
        const cardCategory = e.currentTarget.dataset.name;
        if (cardCategory === "all") {
          display(data);
        } else {
          const filteredcards = data.filter(
            (card) => card.category.toLowerCase() === cardCategory.toLowerCase()
          );
          display(filteredcards);
        }
      });
    });
  });
