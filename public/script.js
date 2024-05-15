// menu bars
let bars = document.querySelector(".bars");
let item = document.querySelector(".item");
let overlay = document.querySelector(".overlay");
bars.onclick = function () {
  item.classList.add("!top-[10%]");
  overlay.classList.add("!opacity-[0.5]", "!visible");
};
overlay.onclick = function () {
  item.classList.remove("!top-[10%]");
  overlay.classList.remove("!opacity-[0.5]", "!visible");
};

//hero section
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  for (i = 0; i < slides.length; i++) {
    slides[i].className = slides[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";

  setTimeout(showSlides, 6000); // Change image every 2 seconds
}