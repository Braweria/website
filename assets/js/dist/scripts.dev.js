"use strict";

// Give functions to navigation bar
var btnMainMenu = document.getElementById("open-main-menu");
var mainMenu = document.getElementById("main-menu");
var btnContextMenu = document.getElementById("open-context-menu");
var contextMenu = document.getElementById("context-menu");

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

btnMainMenu.addEventListener("click", toggleMainMenu);
btnContextMenu.addEventListener("click", toggleContextMenu);
document.addEventListener("click", closeOpenMenu);

function closeOpenMenu(e) {
  console.log(e.target);

  if (e.target !== btnMainMenu) {
    mainMenu.classList.remove("show");
    btnMainMenu.setAttribute("aria-expanded", "false");
    mainMenu.removeAttribute("role");
  }

  if (e.target !== btnContextMenu) {
    contextMenu.classList.remove("show");
    btnContextMenu.setAttribute("aria-expanded", "false");
    contextMenu.removeAttribute("role");
  }
} // Print Current Year in Footer Area


var currentYear = new Date().getFullYear();
var spanCurrentYear = document.getElementById("get-current-year");

var getCurrentYear = function getCurrentYear() {
  return spanCurrentYear.innerHTML = currentYear;
};

getCurrentYear();