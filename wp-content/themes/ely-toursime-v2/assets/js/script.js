let nav = document.getElementById("nav");
let navBotton = document.getElementById("navBotton");

navBotton.addEventListener("click", function () {
  if (nav.style.display === "none") {
    nav.style.display = "flex";
  } else {
    nav.style.display = "none";
  }
  
});
