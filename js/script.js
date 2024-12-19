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
    }
};
