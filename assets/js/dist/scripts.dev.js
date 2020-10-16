"use strict";

// Give functions to navigation bar
var btnMainMenu = document.getElementById("open-main-menu");
var mainMenu = document.getElementById("main-menu");
var btnContextMenu = document.getElementById("open-context-menu");
var contextMenu = document.getElementById("context-menu");

function toggleMainMenu(e) {
  mainMenu.classList.toggle("show");
}

function toggleContextMenu(e) {
  contextMenu.classList.toggle("show");
}

btnMainMenu.addEventListener("click", toggleMainMenu);
btnContextMenu.addEventListener("click", toggleContextMenu);
document.addEventListener("click", clickTest);

function clickTest(e) {
  console.log(e.target);

  if (e.target !== btnMainMenu) {
    mainMenu.classList.remove("show");
  }

  if (e.target !== btnContextMenu) {
    contextMenu.classList.remove("show");
  }
} // Print Current Year in Footer Area


var currentYear = new Date().getFullYear();
var spanCurrentYear = document.getElementById("get-current-year");

var getCurrentYear = function getCurrentYear() {
  return spanCurrentYear.innerHTML = currentYear;
};

getCurrentYear();