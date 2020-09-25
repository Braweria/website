"use strict";

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
}