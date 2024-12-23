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
    request.onreadystatechange = function(){
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;
            alert(response);

        }

    }


    request.open("POST", "signupProcess.php", true);
    request.send(form);

}

//log in

function signIn(){

    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var rememberMe = document.getElementById("check");

    var form = new FormData();
    form.append("e",email.value);
    form.append("p",password.value);
    form.append("r",rememberMe.checked);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;
            if (response == "success") {
                alert ("Successfully Logged in");
                window.location = "index.php";
            }else{
                alert(response);
            }
        }

    }

    request.open("POST","signInProcess.php",true);
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