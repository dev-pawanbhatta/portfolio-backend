
//Sidebar Items Toggle
const elements = document.querySelectorAll('.side-link');

elements.forEach(element => {
    element.addEventListener('click', (e) => {
        if (element.nextElementSibling) {
            if (element.nextElementSibling.classList.contains('menu')) {
                e.preventDefault();
                element.nextElementSibling.classList.toggle('show');
                const arrow_element = element.children[1].children[0];
                if (arrow_element) {
                    if (element.nextElementSibling.classList.contains('show')) {
                        arrow_element.classList.remove('fa-angle-right');
                        arrow_element.classList.add('fa-angle-down');
                    } else {
                        arrow_element.classList.add('fa-angle-right');
                        arrow_element.classList.remove('fa-angle-down');
                    }
                }
            }
        }
    })
})

//Sidebar Toggle
const element = document.getElementsByClassName('hamburger-btn')[0];
element.addEventListener('click', (e) => {
    document.getElementsByClassName('sidebar')[0].classList.toggle('active');
    document.getElementsByClassName('navbar-container')[0].classList.toggle('expand');
})

//Hide Sidebar
document.getElementsByClassName('content')[0].addEventListener('click', () => {
    const width = window.innerWidth;;
    if (width <= 768) {
        document.getElementsByClassName('sidebar')[0].classList.remove('active');
        document.getElementsByClassName('navbar-container')[0].classList.add('expand');
    }
})

//Hide Sidebar in small devices
const width = window.innerWidth;
if (width <= 768) {
    document.getElementsByClassName('sidebar')[0].classList.remove('active');
    document.getElementsByClassName('navbar-container')[0].classList.add('expand');
}