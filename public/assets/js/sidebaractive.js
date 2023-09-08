const side_items = document.querySelectorAll('.side-link');
side_items.forEach(element => {
    if (element.nextElementSibling) {
        if (element.nextElementSibling.classList.contains('menu')) {
            const elem = element.nextElementSibling.children;
            for (let i = 0; i < elem.length; i++) {
                if (elem[i].href === url) {
                    elem[i].classList.add('active');
                    element.classList.add('active');
                }
            }
        }
        else if (element.href === url) {
            element.classList.add('active');
        }
    }
    else {
        if (element.href === url) {
            element.classList.add('active');
        }
    }
});
