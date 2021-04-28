// 手機版時，點擊漢堡選單彈出Nav
const modal = document.querySelector(".modal2");
check = document.getElementById("check");
mobileBtn = document.getElementById("mobile-cta");
nav = document.querySelector("nav");
arrowDown = document.querySelector(".icon-arrow-down");
arrowUp = document.querySelector(".icon-arrow-up");
sideNavItem = document.querySelector(".side-navbar-item");

check.addEventListener("click", () => {
  modal.classList.add("open");
  nav.classList.add("menu-btn");
});

modal.addEventListener("click", (e) => {
  if (e.target.classList.contains("modal2")) {
    modal.classList.remove("open");
    nav.classList.remove("menu-btn");
    check.checked = false;
  }
});

arrowDown.addEventListener("click", () => {
  sideNavItem.classList.add("slide-down");
  sideNavItem.classList.remove("slide-up");
  arrowDown.classList.add("hide");
  arrowUp.classList.remove("hide");
});

arrowUp.addEventListener("click", () => {
  sideNavItem.classList.add("slide-up");
  sideNavItem.classList.remove("slide-down");
  arrowDown.classList.remove("hide");
  arrowUp.classList.add("hide");
});
