<div class="contact-us">
    <div class="container">
        <div class="contact-us__content">
            <div class="contact-us__column">
                <h2>CONTACT US</h2>
                <a class="link1" href="#">+7 (727) 330-22-22</a>
                <a class="link2" href="#">Info@esentaitower.com</a>
                <a class="link3" href="#">Almaty "Al-Farabi avenue 77/7"</a>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="logo"><img src="../img/logowhite.png"></div>
        <nav class="menu">
            <ul class="menu">
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="infrastructurepage.html">INFRASTRUCTURE</a></li>
                <li><a href="projects1.html">PROJECTS</a></li>
                <li><a href="news.html">PRESS</a></li>
                <li><a href="partners.html">PARTNERS</a></li>
                <li><a href="vacancy.html">VACANCIES</a></li>
            </ul>
        </nav>
        <div class="btn-contact_us">
            <a href="#">CONTACT US</a>
        </div>
    </div>
    <div class="container2">
        <p>© 2019-2021 Esentai tower</p>
    </div>


</footer>

<script>
    let last_known_scroll_position = 0;
    let ticking = false;

    function doSomething(scroll_pos) {
        // Делаем что-нибудь с позицией скролла
        document.querySelectorAll(".animate__animated").forEach((item) => {
            if ((window.pageYOffset+window.innerHeight) > (item.getBoundingClientRect().top + window.pageYOffset)) {
                item.classList.remove(item.dataset.out)
                item.classList.add(item.dataset.in)
            } else {
                item.classList.remove(item.dataset.in)
                item.classList.add(item.dataset.out)
            }
        });
    }

    window.addEventListener('scroll', function (e) {
        last_known_scroll_position = window.scrollY;

        if (!ticking) {
            window.requestAnimationFrame(function () {
                doSomething(last_known_scroll_position);
                ticking = false;
            });

            ticking = true;
        }
    });
    AOS.init({
        delay: 200,
        duration: 600,
    });
</script>
</div>
</body>
</html>
