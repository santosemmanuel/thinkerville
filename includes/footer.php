<!-- All Javascript external script files -->
<script type="text/javascript">
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
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="assest/js/index.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>