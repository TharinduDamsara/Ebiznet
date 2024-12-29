// scroll sections and navigation links
var sections = document.querySelectorAll("section");
var navLinks = document.querySelectorAll("header nav a");

window.onscroll = () => {
    var top = window.scrollY;

    // Loop through each section to check the scroll position
    sections.forEach(section => {
        var offset = section.offsetTop - 100;
        var height = section.offsetHeight;
        var id = section.getAttribute("id");

        if (top >= offset && top < offset + height) {

            navLinks.forEach(link => link.classList.remove("active"));

            var activeLink = document.querySelector(`header nav a[href*="${id}"]`);
            if (activeLink) {
                activeLink.classList.add("active");
            }
        }
    });

    // Add or remove the sticky class to the header
    var header = document.getElementById("header");
    if (header) {
        header.classList.toggle("sticky", top > 100);

        // remove toggle (scroll)
        menuicon.classList.remove("bi-x-lg");
        navbar.classList.remove("active");
    }
};

// toggle icon navbar
var menuicon = document.querySelector(".menu i");
var navbar = document.querySelector(".navbar");

menuicon.onclick = () => {
    menuicon.classList.toggle("bi-x-lg");
    navbar.classList.toggle("active");
};

//join us 

function signUp() {

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var mobile = document.getElementById("mobile");
    var gender = document.getElementById("gender");

    var form = new FormData();
    form.append("f", fname.value);
    form.append("l", lname.value);
    form.append("e", email.value);
    form.append("p", password.value);
    form.append("m", mobile.value);
    form.append("g", gender.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;
            if (response == "success") {
                alert("Joined us successfully");
                window.location.reload();
            }else{
                alert(response);
            }

        }

    }


    request.open("POST", "signupProcess.php", true);
    request.send(form);

}

//log in

function signIn() {

    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var rememberMe = document.getElementById("check");

    var form = new FormData();
    form.append("e", email.value);
    form.append("p", password.value);
    form.append("r", rememberMe.checked);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;
            if (response == "success") {
                alert("Successfully Logged in");
                window.location = "index.php";
            } else {
                alert(response);
            }
        }

    }

    request.open("POST", "signInProcess.php", true);
    request.send(form);

}

//show/hide password

function showPassword1() {
    var show = document.getElementById("password2");
    var showi = document.getElementById("pwi");


    if (show.type == "password") {
        show.type = "text";
        showi.className = "bi bi-eye eye";
    } else {
        show.type = "password";
        showi.className = "bi bi-eye-slash eye"
    }

}

function showPassword() {
    var show = document.getElementById("password");
    var showi = document.getElementById("pwi1");


    if (show.type == "password") {
        show.type = "text";
        showi.className = "bi bi-eye eye";
    } else {
        show.type = "password";
        showi.className = "bi bi-eye-slash eye"
    }

}



//verification and reset Modal close

function closeModal() {
    window.location.reload();
}

//Forgot Password

function forgotPassword() {
    var email = document.getElementById("email2");

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;
            if (response == "success") {
                alert("Verification code has sent successfully to your email.");

            } else if (response == "Invalid Email Address") {
                window.location.reload();
                alert(response);
            }
            else {
                alert(response);
            }

        }
    }
    request.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
    request.send();

}

//reset password modal

function resetModal1() {
    var email = document.getElementById("email2");
    var newpassword = document.getElementById("newp");
    var retypepassword = document.getElementById("retp");
    var verificationcode = getCode();

    if (verificationcode.length === 6) {
        var form = new FormData();
        form.append("e", email.value);
        form.append("n", newpassword.value);
        form.append("r", retypepassword.value);
        form.append("v", verificationcode);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.status == 200 && request.readyState == 4) {
                var response = request.responseText;
                if (response == "success") {
                    window.location.reload();
                    alert("Password Changed Successfully");

                } else {
                    alert(response);
                }
            }
        }
        request.open("POST", "resetPasswordProcess.php", true);
        request.send(form);

    } else {
        alert("Please enter a 6-digit code.");
    }

}

// Vcode-inputs

function getCode() {
    var code = '';
    for (var i = 1; i <= 6; i++) {
        var input = document.getElementById(i);
        code += input.value;  // Append the value of each input field
    }
    return code;
}


// password verification modal

function verify() {

    var verificationModal = document.getElementById("exampleModal");
    var resetModal = new bootstrap.Modal(document.getElementById("exampleModal2"));
    var email = document.getElementById("email2");
    var verificationcode = getCode();

    var form = new FormData();
    form.append("v", verificationcode);
    form.append("e", email.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            if (response == "success") {

                if (verificationModal) {
                    var modal1 = bootstrap.Modal.getInstance(verificationModal);

                    if (modal1) {
                        modal1.hide();
                    }
                    resetModal.show();

                } else {
                    console.error("Verify modal not found!");
                }

            } else {
                alert(response);
            }

        }

    }

    request.open("POST", "verificationProcess.php", true);
    request.send(form);

}

//auto input next

document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".code-input");

    // Focus the next input when a digit is entered
    inputs.forEach((input, index) => {
        input.addEventListener("input", function () {
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        // Optional: Automatically focus the previous input when backspace is pressed
        input.addEventListener("keydown", function (e) {
            if (e.key === "Backspace" && input.value === "") {
                if (index > 0) {
                    inputs[index - 1].focus();
                }
            }
        });
    });
});


