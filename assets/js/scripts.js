// Give functions to navigation bar
const btnMainMenu = document.getElementById("open-main-menu");
const mainMenu = document.getElementById("main-menu");

const btnContextMenu = document.getElementById("open-context-menu");
const contextMenu = document.getElementById("context-menu");

function toggleMainMenu(e) {
  mainMenu.classList.add("show");
  btnMainMenu.setAttribute("aria-expanded", "true");
  mainMenu.setAttribute("role", "alert");
}

function toggleContextMenu(e) {
  contextMenu.classList.add("show");
  btnContextMenu.setAttribute("aria-expanded", "true");
  contextMenu.setAttribute("role", "alert");
}

btnMainMenu.addEventListener("click", toggleMainMenu)
btnContextMenu.addEventListener("click", toggleContextMenu)
document.addEventListener("click", closeOpenMenu);

function closeOpenMenu(e) {
  console.log(e.target);
  if (e.target !== btnMainMenu) {
    mainMenu.classList.remove("show");
    btnMainMenu.setAttribute("aria-expanded", "false")
    mainMenu.removeAttribute("role");
  }
  if (e.target !== btnContextMenu) {
    contextMenu.classList.remove("show");
    btnContextMenu.setAttribute("aria-expanded", "false");
    contextMenu.removeAttribute("role");
  }
}

// Print Current Year in Footer Area
const currentYear = new Date().getFullYear();
const spanCurrentYear = document.getElementById("get-current-year");
const getCurrentYear = () => spanCurrentYear.innerHTML = currentYear;
getCurrentYear();