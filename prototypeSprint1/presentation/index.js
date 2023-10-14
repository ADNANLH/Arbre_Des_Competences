let person_Id = document.getElementById("person_Id");
let nameInput = document.getElementById("name");
let cneInput = document.getElementById("cne");
let citySelect = document.getElementById("city_selector");
const confirmationButton = document.getElementById("Add");
const deleteButtons = document.querySelectorAll('input[name="Delete"]');
const addStagiaireForm = document.getElementById("hide");
const addStagiaireButton = document.getElementsByClassName("add_new")[0];
const idInputToDelete = document.getElementsByClassName("id_To_Delete")[0];

addStagiaireButton.addEventListener("click", (e) => {
  addStagiaireForm.classList.remove("hide");
  addStagiaireButton.classList.add("hide");
});




document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {
    // Validate The Name input
    const nameInputValue = nameInput.value.trim();
    if (!/^[A-Za-z ]+$/.test(nameInputValue)) {
      alert("Name must contain only alphabetic characters.");
      event.preventDefault();
      return;
    }

    // Validate The CNE input
    const cneInputValue = cneInput.value.trim();
    if (!/^[A-Z][0-9]{9}$/.test(cneInputValue)) {
      alert("CNE must start with a capital letter followed by 9 numbers.");
      event.preventDefault();
      return;
    }
  });
});