function handleClick() {
  alert("Button was clicked!");
}

const text = document.getElementById("hoverText");

text.onmouseover = function () {
  text.style.color = "white";
  text.style.backgroundColor = "green";
  text.style.fontSize = "24px";
  text.style.padding = "10px";
};

text.onmouseout = function () {
  text.style.color = "black";
  text.style.backgroundColor = "transparent";
  text.style.fontSize = "16px";
  text.style.padding = "0px";
};

function handleSubmit() {
  console.log("Form submitted successfully!");
}