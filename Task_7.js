let userName = prompt("Enter your name:");
document.getElementById("greeting").innerHTML = "Welcome, " + userName + "!";
function validateForm() {
  let name = document.getElementById("username").value;
  let email = document.getElementById("email").value;

  if (name === "" || email === "") {
    alert("All fields are required!");
    return false;
  } else {
    console.log("Form submitted successfully!");
    return true;
  }
}
function printPage() {
  window.print();
}