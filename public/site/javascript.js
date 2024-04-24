// script.js
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const modal = document.getElementById("modal");

openModalBtn.addEventListener("click", () => {
    modal.style.display = "block";
});

closeModalBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

// Add form submission logic here
const form = document.getElementById("myForm");

form.addEventListener("submit", (event) => {
    event.preventDefault();
    // Process form data here
    // Close the modal after form submission if needed
    modal.style.display = "none";
});


// new add javascript pointer data show or hide
function toggleContent() {
    var content = document.getElementById("content");
    var toggleSymbol = document.getElementById("toggleSymbol");

    if (content.style.display === "block") {
        content.style.display = "none";
        toggleSymbol.innerHTML = "&#9658;"; // Change to right-pointing triangle symbol
    } else {
        content.style.display = "block";
        toggleSymbol.innerHTML = "&#9660;"; // Change to down-pointing triangle symbol
    }
}
