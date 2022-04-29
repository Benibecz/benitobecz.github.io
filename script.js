"use strict";
const contacto = document.querySelector("#contact");
const detail = document.querySelector(".details");
const detail2 = document.querySelector(".details2");

function mouseOver() {
  detail.style.backgroundColor = "#6c757d";
  detail.style.color = "#fff";
  detail2.style.backgroundColor = "#6c757d";
  detail2.style.color = "#fff";
}

function mouseOut() {
  detail.style.backgroundColor = "#fff";
  detail.style.color = "#343a40";
  detail2.style.backgroundColor = "#fff";
  detail2.style.color = "#343a40";
}

contacto.addEventListener("mouseover", mouseOver);
contacto.addEventListener("mouseout", mouseOut);
