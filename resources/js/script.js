//navbar fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const fixedNav = header.offsetTop;

  if (window.pageYOffset > fixedNav) {
    header.classList.add("navbar-fixed");
  } else {
    header.classList.remove("navbar-fixed");
  }
};

// hamburger
const hamburgerBtn = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburgerBtn.addEventListener("click", function () {
  hamburgerBtn.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

// click diluar hamburger
// window.addEventListener("click", function (e) {
//   if (e.target != hamburgerBtn && e.target != navMenu) {
//     hamburgerBtn.classList.remove("hamburger-active");
//     navMenu.classList.add("hidden");
//   }
// });

// Dropdown
const dropDown = document.querySelector("#dropDown");
const menuDropdown = document.querySelector("#menuDropdown");

dropDown.addEventListener("click", function(){
  menuDropdown.classList.toggle("hidden");
})

// click diluar hamburger
// window.addEventListener("click", function (e) {
//   if (e.target != dropDown && e.target != menuDropdown) {
//     menuDropdown.classList.toggle("hidden");
//   }
// });