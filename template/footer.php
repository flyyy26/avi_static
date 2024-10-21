    <div class="footer">
        <div class="footer_first">
            <div class="footer_identity">
                <img src="images/logo.png" alt="">
                <p>Nama domain 'www.avihumanity.or.id' adalah milik AlQuds, sebuah platform yang menyediakan panduan dan informasi untuk kegiatan kemanusiaan, solidaritas sosial, dan pengembangan kepedulian terhadap sesama.</p>
                <div class="social_media_footer">
                    <a href="">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-whatsapp"></iconify-icon>
                        </div>
                    </a>
                    <a href="">
                        <div class="social_media_box">
                            <iconify-icon icon="basil:instagram-outline"></iconify-icon>
                        </div>
                    </a>
                    <a href="">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-facebook"></iconify-icon>
                        </div>
                    </a>
                    <a href="">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-tiktok"></iconify-icon>
                        </div>
                    </a>
                </div>
            </div>
            <div class="menu_footer">
                <div class="menu_footer_box">
                    <h3>Perusahaan</h3>
                    <ul>
                        <li><a href="">Tentang Kami</a></li>
                        <li><a href="">Kontak</a></li>
                        <li><a href="">Konsultasi</a></li>
                    </ul>
                </div>
                <div class="menu_footer_box">
                    <h3>Bantuan</h3>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Keluhan</a></li>
                        <li><a href="">Berita</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_second">
            <ul>
                <li><a href="">Syarat Ketentuan</a></li>
                <li><a href="">Kebijakan Privasi</a></li>
                <li><a href="">Kebijakan Cookie</a></li>
            </ul>
            <span>©️ 2024 AVI HUMANITY | ID</span>
        </div>
        <div class="footer_third">
            <p><span>Disclaimer:</span> Kami tidak bertanggung jawab atas konten situs pihak ketiga. Verifikasi informasi dan konsultasikan dengan profesional sebelum mengambil keputusan.</p>
            <div class="company_data">
                <div class="company_data_box">
                    <iconify-icon icon="carbon:location-filled"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Jl. Lorem ipsum dolor sit.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
                <div class="company_data_box">
                    <iconify-icon icon="mdi:envelope"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Email</h5>
                        <p>cs@avihumanity.or.id</p>
                    </div>
                </div>
                <div class="company_data_box">
                    <iconify-icon icon="ic:baseline-phone"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Telepon</h5>
                        <p>+6287 866 291 056</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" async></script>

    <script>
        // Get the modal
        var modal = document.getElementById("popupModal");

        // Get the image inside the modal
        var modalImg = document.getElementById("popupImage");

        // Get all the images that will trigger the popup
        var triggers = document.querySelectorAll('.popup-trigger');

        // Get the close button
        var closeBtn = document.querySelector(".close");

        // Loop through the triggers and add a click event listener to each one
        triggers.forEach(function(trigger) {
            trigger.addEventListener('click', function() {
                // Show the modal
                modal.style.display = "block";
                // Set the src of the modal image to the clicked image's src
                modalImg.src = this.src;
            });
        });

        // When the user clicks on the close button, close the modal
        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal image, close the modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>
    <script>
        function popupMenuMobile() {
            const popupMenuMobileVar = document.getElementById("menuMobilePopup");
            popupMenuMobileVar.classList.toggle("active-menuMobilePopup");
        }
    </script>
    <script>
        var swiper = new Swiper(".programSlideHome", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });
    </script>
    <script>
        var swiper = new Swiper(".bannerSlide", {
        spaceBetween: 30,
        effect: "fade",
        loop:true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        effect: "fade",
        loop:true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        });
    </script>
    <script>
        var swiper = new Swiper(".programSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                slidesPerView: 2,
                spaceBetween: 20,
                },
                768: {
                slidesPerView: 2,
                spaceBetween: 40,
                },
                1024: {
                slidesPerView: 3,
                spaceBetween: 40,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
       document.addEventListener('DOMContentLoaded', function () {
            const submenuToggles = document.querySelectorAll('.submenu-toggle');

            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    // Hapus kelas 'active' dari semua submenu kecuali yang diklik
                    submenuToggles.forEach(t => {
                        if (t !== this) {
                            t.classList.remove('active');
                        }
                    });
                    // Toggle kelas 'active' pada elemen yang diklik
                    this.classList.toggle('active');
                });
            });

            // Event listener untuk mendeteksi klik di luar submenu
            document.addEventListener('click', function (e) {
                // Jika klik terjadi di luar elemen dengan kelas 'submenu-toggle' dan submenu
                submenuToggles.forEach(toggle => {
                    const submenu = toggle.nextElementSibling;
                    if (submenu && !toggle.contains(e.target) && !submenu.contains(e.target)) {
                        toggle.classList.remove('active');
                    }
                });
            });

            document.addEventListener('scroll', function (e) {
                // Jika klik terjadi di luar elemen dengan kelas 'submenu-toggle' dan submenu
                submenuToggles.forEach(toggle => {
                    const submenu = toggle.nextElementSibling;
                    if (submenu && !toggle.contains(e.target) && !submenu.contains(e.target)) {
                        toggle.classList.remove('active');
                    }
                });
            });
        });

    </script>
    <script src="js/tab.js"></script>
    <script src="js/menu-mobile.js"></script>
</body>
</html>