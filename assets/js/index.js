    const menuBtn = document.querySelector(".menu-btn")
    const navigation = document.querySelector(".navigation");


    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle('active');
    })
    

    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    let selectHeader = document.querySelector('#header')
    let selectBrand = document.querySelector('.brand');
    let selectBurger = document.querySelector('.burger');
    let selectNavigation = document.querySelectorAll('.nav-a');
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled')
                selectBrand.style.color = "#222";
                for (let index = 0; index < selectNavigation.length; index++) {  
                    selectNavigation[index].style.color = "#222";
                }
                selectBurger.style.color = "#222";
            } else {
                selectHeader.classList.remove('header-scrolled')
                selectBrand.style.color = "#fff";
                for (let index = 0; index < selectNavigation.length; index++) {  
                    selectNavigation[index].style.color = "";
                }
                selectBurger.style.color = "";
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }