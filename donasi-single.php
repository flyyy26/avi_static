<?php include 'template/header.php' ?>
<div class="banner_page banner_page_program" style="background: linear-gradient(180deg, rgba(5, 5, 5, 0.637) 25.58%, #0f0f0f 100%), url(images/banner_program.png);">
    <h1>Menyebarkan kebaikan dengan langkah sederhana.</h1>
</div>
<div class="program_detail_section">
    <div class="program_detail_layout">
        <div class="program_detail_galeri">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="program_detail_image">
                            <img src="images/donasi.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="program_detail_image">
                            <img src="images/fidyah.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="program_detail_image">
                            <img src="images/infaq.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="donasi_heading">
                <h1>Avi Humanity</br> Layanan yang memudahkan menyebar kebaikan secara online</h1>
                <h4>Donasi Terkumpul : <font>Rp. 20.000.000</font></h4>
            </div>
            <div class="program_detail_desc_layout">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Paris')" id="defaultOpen">Donatur</button>
                </div>
                <div class="tab_content_layout">
                    <div id="Paris" class="tabcontent">
                        <div class="program_detail_donatur_layout">
                            <div class="program_detail_donatur_box">
                                <iconify-icon icon="mynaui:user-waves"></iconify-icon>
                                <div class="program_detail_donatur_content">
                                    <h4>Muhamad Rafli Repmihar</h4>
                                    <p>Berdonasi Rp. 100,000</p>
                                    <span>10/10/2024 17:15:05</span>
                                </div>
                            </div>
                            <div class="program_detail_donatur_box">
                                <iconify-icon icon="mynaui:user-waves"></iconify-icon>
                                <div class="program_detail_donatur_content">
                                    <h4>Sahabat AVI</h4>
                                    <p>Berdonasi Rp. 100,000</p>
                                    <span>10/10/2024 17:15:05</span>
                                </div>
                            </div>
                            <div class="program_detail_donatur_box">
                                <iconify-icon icon="mynaui:user-waves"></iconify-icon>
                                <div class="program_detail_donatur_content">
                                    <h4>Sahabat AVI</h4>
                                    <p>Berdonasi Rp. 100,000</p>
                                    <span>10/10/2024 17:15:05</span>
                                </div>
                            </div>
                            <div class="program_detail_donatur_box">
                                <iconify-icon icon="mynaui:user-waves"></iconify-icon>
                                <div class="program_detail_donatur_content">
                                    <h4>Sahabat AVI</h4>
                                    <p>Berdonasi Rp. 100,000</p>
                                    <span>10/10/2024 17:15:05</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="program_detail_form">
            <div class="program_detail_form_layout">
                <h3>Masukkan Nominal</h3>
                <form action="">
                    <div class="program_detail_form_box">
                        <div class="select_layout">
                            <select name="" id="">
                                <option value="" default>Pilih Layanan</option>
                                <option value="Donasi">Donasi</option>
                                <option value="Fidyah">Fidyah</option>
                                <option value="Infaq">Infaq</option>
                            </select>
                            <iconify-icon icon="heroicons:chevron-down-20-solid"></iconify-icon>
                        </div>
                        <input type="text" placeholder="Masukkan disini">
                        <div class="program_detail_btn_form">
                            <button type="button">10.000</button>
                            <button type="button">25.000</button>
                            <button type="button">50.000</button>
                            <button type="button">75.000</button>
                            <button type="button">100.000</button>
                            <button type="button">200.000</button>
                            <button type="button">500.000</button>
                        </div>
                        <button type="submit" class="program_detail_submit">Lanjutkan Donasi</button>
                    </div>
                </form>
            </div>
            <div class="program_detail_share">
                <span>Bagikan Program :</span>
                <div class="program_detail_share_layout">
                    <a href="#" target="_blank">
                        <div class="program_detail_share_box">
                            <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                        </div>
                    </a>
                    <a href="#" target="_blank">
                        <div class="program_detail_share_box">
                            <iconify-icon icon="ic:baseline-whatsapp"></iconify-icon>
                        </div>
                    </a>
                    <a href="#" target="_blank">
                        <div class="program_detail_share_box">
                            <iconify-icon icon="ic:baseline-telegram"></iconify-icon>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>