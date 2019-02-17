document.addEventListener("DOMContentLoaded", () => {
  const heading = document.querySelector("h1");
  heading.addEventListener("mouseenter", () => {
  heading.style.textDecoration = "underline";
  });
  heading.addEventListener("mouseleave", () => {
  heading.style.textDecoration = "none";
  });
});