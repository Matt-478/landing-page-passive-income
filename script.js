

// Makes the burger show options (links) when pressed
const toggle = document.getElementsByClassName("toggle");
const item = document.querySelectorAll(".item");
item.forEach(navItem => { 
        function toggleMenu() {
            if (navItem.classList.contains("active") ){
             navItem.classList.remove("active");
            } else {
                navItem.classList.add("active");
            }
        }
        document.querySelector(".toggle").addEventListener("click", toggleMenu);
    });







    // DATA VALIDATION
    const form = document.querySelector("form");
    const name_surname = document.querySelector("#name_surname");
    const email = document.querySelector("#email");
    const options = document.querySelector("#options");

    form.addEventListener("submit", (e) => {
    //   e.preventDefault();

      checkInputs();
    });

    function checkInputs() {
      const nameAndSurnameValue = name_surname.value.trim();
      const emailValue = email.value.trim();

    //   const optionValues = options.value.trim();

      if(nameAndSurnameValue === "") {
        setErrorFor(name_surname, "Šis lauks ir svarīgs.");
      } else {
        setSuccessFor(name_surname);
      }

      if(emailValue === ""){
        setErrorFor(email, "Šis lauks ir svarīgs.");
      } else if (!isEmail(emailValue)) {
        setErrorFor(email, "Nepareizs e-pasta formāts.");
      } else {
        setSuccessFor(email);
      }

    //  if (optionValues === "") {
    //    setErrorFor(options, "Šis lauks ir svarīgs.");
    //   } else {
    //    setSuccessFor(options);
    //     }
     }



    function setErrorFor(input, message) {
      const formControl = input.parentElement;
      const small = formControl.querySelector("small");

      small.innerText = message;
      formControl.className = "form-control error"
    }

    function setSuccessFor(input) {
      const formControl = input.parentElement;
      formControl.className = "form-control success"
    }

    function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
