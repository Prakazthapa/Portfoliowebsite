var typed=new Typed(".text",{
    strings:["Aspiring Full Stack Developer","Aspiring Data Enthusiast"],
    typeSpeed:100,
    backSpeed:100,
    backDelay:1000,
    loop:true 
});


document.addEventListener('click', function(event) {
    var navbar = document.querySelector('.navbar');
    var navToggle = document.querySelector('.nav-toggle');
    var isClickInsideNavbar = navbar.contains(event.target);
    var isClickInsideNavToggle = navToggle.contains(event.target);

    if (!isClickInsideNavbar && !isClickInsideNavToggle) {
        navbar.classList.remove('active');
    }
});

function toggleMenu() {
    var navbar = document.querySelector('.navbar');
    navbar.classList.toggle('active');
}

