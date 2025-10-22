/*Navbar response*/

const menuToggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");
menuToggle.addEventListener("click", () => {
  menu.classList.toggle("show");
});

/*fade-in animations*/

document.addEventListener("DOMContentLoaded", function () {
  const fade_in = document.querySelectorAll(".hero");

  if (fade_in) {
    fade_in.classList.add("show");
  } else{
    console.error("Elements with the class 'hero' did not appear")
  }
});