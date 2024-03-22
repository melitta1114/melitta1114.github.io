function openModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
  }
  
  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }
  
  var registerBtn = document.getElementById("registerBtn");
  registerBtn.addEventListener("click", function() {
    openModal();
  });
  
  document.getElementById("registerBtn").addEventListener("click", function() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("psw").value;
    var repeatPassword = document.getElementById("psw-repeat").value;
    var gdprCheckbox = document.getElementById("gdpr-checkbox").checked;
  
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    if (email === "" || password === "" || repeatPassword === "") {
      alert("Minden mező kitöltése kötelező.");
    } else if (!email.match(emailRegex)) {
      alert("Kérlek adj meg egy érvényes email címet.");
    } else if (password !== repeatPassword) {
      alert("Nem ugyanazt a jelszót adta meg mindkét mezőben. Módosítsd a mezőket és ugyanazt a jelszót add meg mindkét helyen.");
    } else if (!gdprCheckbox) {
      alert("Kérlek fogadd el a GDPR feltételeket a regisztrációhoz.");
    } else {
      alert("Sikeres regisztráció");
      window.location.href = "Website.html";
    }
  });
  
  
  