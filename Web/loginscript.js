document.getElementById("loginBtn").addEventListener("click", function(event) {
  event.preventDefault(); // Prevent form submission
  
  // Get form values
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (email === "" || password === "") {
    alert("Minden mező kitöltése kötelező.");
  } else if (!validateEmail(email)) {
    alert("Érvénytelen email cím.");
  } else {
    alert("Sikeres bejelentkezés");
    window.location.href = "Website.html";
  }
});

function validateEmail(email) {
  var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  return pattern.test(email);
}
