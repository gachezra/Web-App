// Get the button and dropdown content
var dropdownBtn = document.querySelector(".dropbtn");
var dropdownContent = document.querySelector(".dropdown-content");

// Add an event listener to the button
dropdownBtn.addEventListener("click", function() {
  // Toggle the dropdown content
  dropdownContent.classList.toggle("show");
});

// Close the dropdown if the user clicks outside of it
window.addEventListener("click", function(event) {
  if (!event.target.matches(".dropbtn")) {
    dropdownContent.classList.remove("show");
  }
});
