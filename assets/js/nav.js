const header = document.getElementById('navfunction');

function stickyNavbar() {
    header.classList.toggle('scrolled' , window.scrollY > 0);
}

stickyNavbar();

window.addEventListener('scroll', stickyNavbar);