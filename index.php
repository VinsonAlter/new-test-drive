<?php
    require_once ('../config.php');
    require_once ('../koneksi.php');
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30618930-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-30618930-3');
        </script>
        <script>
	        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1274490382674254");fbq("track","PageView");
	    </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SIGN UP - TEST DRIVE || SARDANA BERLIAN</title>
        <link rel="manifest" href="../manifest.json">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL.DS. 'apple-touch-icon.png'; ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL.DS. 'favicon-32x32.png'; ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL.DS. 'favicon-16x16.png'; ?>">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#333">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/brands.css"
        integrity="sha384-i2PyM6FMpVnxjRPi0KW/xIS7hkeSznkllv+Hx/MtYDaHA5VcF0yL3KVlvzp8bWjQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css"
            integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css"
            integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick/slick/slick-theme.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.5/swiper-bundle.min.css" integrity="sha512-5vO03tOXbvqdej8rp7j/maGugo+rvwfO80cG/nqKDhumZMJjwOn6O1VO2S6x2G/NsRvzrywTgmPDuz5DSzh+Fw==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
        <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>
    </head>
    <body>
        <style>
            body {
                background-color: #989898;
            }

            .panel-section {
                margin-top: 12px;
                background-color: #fff;
                margin-bottom: 12px;
                position: relative;
            }

            .bottom-border {
                border-bottom: 3px solid #ed0000;
            }

            .centered {
                align-items:center;
                justify-content:center;
            }

            .error {
                font-size: 13px;
                color: red;
                border-color:red;
            }

            @media only screen and (min-device-width: 768px) and (max-device-width: 1080px) and (orientation: portrait) {
                .mt-banner {
                    margin-top:12%;
                }
            }

            @media (min-width: 320px) and (max-width: 768px) {
                .mt-banner {
                    margin-top: 20%;
                }
            }

            @media (max-width: 320px) {
                .mt-banner {
                    margin-top: 25%;
                }
            }

        </style>

        <header>
            <?php require_once("../mitsubishi-medan/component/Header.php");?> 
        </header>
        
        <section>
            <div class="container">
                <form action="javascript:sendData()" id="send_form" role="form" name="sendData">
                <div class="row">
                    <div class="shadow col-md-8 offset-lg-2 offset-md-2 mt-lg-5 mt-banner bg-white bottom-border">  
                        <div class="row">
                            <img class="w-100" src="<?=BASE_URL?>mitsubishi-medan/assets/img/bg/new-xpander-cross-desktop.webp"/>
                        </div>
                        <div class="container">
                            <div class="py-2 bottom-border">
                                <div class="panel-section">
                                    <h3 class="text-center">
                                        SCHEDULE A TEST DRIVE
                                    </h3>
                                    <p class="mmc-regular fs24-scaled">
                                        Dapatkan pengalaman mengemudi mobil impian Anda
                                        secara langsung dengan registrasi test drive.
                                        Isi data diri di bawah ini dan tim kami akan 
                                        menghubungi Anda, atau kunjungi langsung Dealer 
                                        Mitsubishi di sekitar Anda.
                                    </p>
                                </div>
                            </div>
                        
                            <div class="py-2">
                                <div class="panel-section bottom-border">
                                    <h3 class="text-center">
                                        FILL IN YOUR DETAILS
                                    </h3>
                                    <p class="mmc-regular fs24-scaled">
                                        Lengkapi formulir data diri untuk mendaftar 
                                        test drive mobil Mitsubishi Motors pilihan Anda.
                                        Pendaftaran akan dikonfirmasi oleh tim kami.
                                    </p>
                                    <div class="mb-3">
                                        <label class="form-label" for="nama-peserta">
                                            1. Nama 
                                        </label>
                                        <input type="text" id="nama-peserta" name="nama" class="form-control fs13" placeholder="Masukkan Nama Anda">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="hp-peserta">
                                            2. No Handphone 
                                        </label>
                                        <input type="text" id="hp-peserta" name="hp" class="form-control fs13" placeholder="Masukkan Nomor Handphone Anda">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="email-peserta">
                                            3. Email
                                        </label>
                                        <input type="text" id="email-peserta" name="email" class="form-control fs13" placeholder="Masukkan Alamat Email Anda">
                                    </div>      
                                    <div class="mb-3">
                                        <label class="form-label mr-2">
                                            4. Pilih Tipe Kendaraan
                                        </label>
                                        <select class="form-select" name="modelKend">
                                            <option selected="true" disabled="disabled">Choose</option>
                                            <option value="NEW XPANDER CROSS">NEW XPANDER CROSS</option>
                                            <option value="NEW XPANDER">NEW XPANDER</option>
                                            <option value="PAJERO SPORT">PAJERO SPORT</option>
                                            <option value="XPANDER CROSS">XPANDER CROSS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container col-md-11 border border-secondary rounded mb-3">
                                    <div class="col-md-10 offset-md-1 fs12 py-3">
                                        <h5>Peraturan Test Drive:</h5>
                                        <ol class="mmc-regular">
                                            <li>
                                                Usia pengemudi test drive minimal 17 tahun dan maksimal 60 tahun, 
                                                serta memiliki SIM A/B1/B2 yang masih berlaku (wajib mendaftar dan 
                                                wajib memperlihatkan SIM) sebelum test drive. 
                                            </li>
                                            <li>
                                                Menggunakan sabuk keselamatan demi keselamatan 
                                                peserta sendiri dan pihak lain di area test drive. 
                                            </li>
                                            <li>
                                                Menaati arahan yang diberikan instruktur test drive terutama
                                                mengenai cara pengoperasian kendaraan 
                                                dan fitur-fitur yang berkaitan dengan berkendara. 
                                            </li>
                                            <li>
                                                Dalam keadaan sehat, tidak dalam pengaruh obat-obatan yang 
                                                sedang dikonsumsi serta tidak dalam keadaan
                                                Juga tidak mengidap penyakit dalam yang dapat berakibat fatal. 
                                            </li>
                                            <li>
                                                Tidak mengoperasikan handphone selama test drive.
                                            </li>
                                            <li>
                                                Tidak merokok dan membawa makanan / minuman ke dalam mobil test drive. 
                                            </li>
                                            <li>
                                                Ibu hamil dan balita tidak diperkenankan mengikuti test drive. 
                                            </li>
                                            <li>
                                                Customer / pengemudi bertanggung jawab terhadap insiden yang terjadi karena
                                                kelalaian dalam mengemudi dan segala tuntutan yang diterima dari pihak ketiga.
                                            </li>
                                        </ol>
                                        <h5>Safety First!</h5>
                                        <div class="form-check d-flex centered">
                                            <input type="checkbox" class="cp" id="check" name="check" value="">
                                            <label class="form-check-label ml-2 mmc-regular cp" for="check">
                                                Saya setuju dengan peraturan dan pernyataan diatas
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="d-flex centered mb-3">
                                        <div class="g-recaptcha" data-sitekey="<?=RECAPTCHA_PUBLIC_KEY;?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container shadow col-md-8 offset-lg-2 offset-md-2 bg-white">
                        <div class="d-flex centered mt-2">
                            <div class="mb-2">
                                <button class="btn btn-danger" type="submit">
                                    <i class="fa fa-paper-plane pr-1"></i>
                                    Kirim
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                </div> 
            </div>
        </section>

        <footer>
            <?php require_once("../component/Footer.php");?>
        </footer>
        <?php readfile("../component/Menu.php")?>
        <!-- Google Recaptcha -->
        <script async src="https://www.google.com/recaptcha/api.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/gh/uxsolutions/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
        <!-- Jquery Validation Plugins -->
        <script src="../assets/js/jquery.validate.min.js"></script>

        <script>
            $(document).ready(function() {
                /* jquery validation custom validation accept a-z only */
                $.validator.addMethod("lettersonly", function(value, element) 
                {
                    return this.optional(element) || /^[a-z ]+$/i.test(value);
                }, "Mohon masukkan huruf dari a-z untuk nama anda");
                /* jquery validation custom validation accept a-z only */
                $.validator.addMethod("numbersonly", function(value, element) 
                {
                    return this.optional(element) || /^[0-9 ]+$/i.test(value);
                }, "Mohon masukkan digits dari 0-9 untuk no handphone anda");
                $("form[name='sendData']").validate({
                    rules: {
                        nama: {
                            required: true,
                            lettersonly: true
                        },
                        hp: {
                            required: true,
                            numbersonly: true
                        },
                        modelKend: "required",
                        check: "required",
                    },

                    messages: {
                        nama: {
                            required: "Mohon masukkan nama anda",
                        },
                        hp: {
                            required: "Mohon masukkan no handphone anda",
                        },
                        modelKend: "Mohon pilih tipe kendaraan test drive",
                        check: "Mohon pastikan anda sudah menyetujui persetujuan test drive",
                    },

                    errorPlacement: function(error, element) {
                        if (element.is("select")) {
                            error.appendTo(element.parent().parent());
                        } else if(element.is(":checkbox")) {
                            error.appendTo(element.parent().parent());
                        } else {
                            error.appendTo(element.parent());
                        }
                    },

                    submitHandler: function(form) {
                        form.submit();
                    }
                })

                const sm = window.matchMedia("(max-width: 576px)")
                const issm = sm.matches
                const menuActive = () => {
                    if(issm){$('.menu').toggleClass('menuActive')}
                    $('.overlayBg .container').click(e => e.stopPropagation())
                }
                const loadOverlay = target => $('.overlayBg').load(target, () => menuActive())
                // navBarStepBack(1)
                $('.tentangKami h3').click(({currentTarget}) => {
                    $('.tentangKami h3').removeClass('active')
                    $(currentTarget).addClass('active')
                    $('.profil').hide()
                    $('.visi').hide()
                    $('.misi').hide()
                    const curr = $(currentTarget).text().toLocaleLowerCase()
                    $(`.${curr}`).show()
                })
                
                $('.btMenu, .btMenuMobile, .layanan').click(e => {
                    $('.menuOverlay').toggleClass('sideBarActive')
                    $('body').toggleClass('noScroll')
                    $('.header').toggleClass('inactiveHeader')
                    $('.menu').toggleClass('menuActive')
                    e.stopPropagation()
                })
                
                $('.menuItem a').click(({currentTarget}) => {
                    $('.menuItem a').removeClass('activeRed')
                    $(currentTarget).addClass('activeRed')
                    $('.menu').addClass('menuSeparator')
                })
                $('.garansi').click(({currentTarget}) => {
                    $('.overlayBg').load('https://sardanagroup.co.id/page/Garansi.php', () => {
                        $('.kendaraanNiaga').hide()
                        if(issm){$('.menu').toggleClass('menuActive')}
                        $('.overlayBg .container').click(e => e.stopPropagation())
                        $('.garansiItem p').click(({currentTarget}) => {
                            $('.kendaraanPenumpang').hide()
                            $('.kendaraanNiaga').hide()
                            $('.garansiItem p').removeClass('activeRed')
                            $(currentTarget).addClass('activeRed')
                            $(`.${$(currentTarget).attr('target')}`).show()
                        })
                    })
                })
                $('.bengkel').click(({currentTarget}) => {
                    $('.overlayBg').load('https://sardanagroup.co.id/page/Bengkel.php', () => {
                        if(issm){$('.menu').toggleClass('menuActive')}
                        $('.periode').hide()
                        $('.fasilitas').hide()
                        $('.overlayBg .container').click(e => e.stopPropagation())
                        $('.bengkelItem p').click(({currentTarget}) => {
                            $('.perawatan').hide()
                            $('.periode').hide()
                            $('.fasilitas').hide()
                            $('.bengkelItem p').removeClass('activeRed')
                            $(currentTarget).addClass('activeRed')
                            $(`.${$(currentTarget).text().toLocaleLowerCase()}`).show()
                        })
                    })
                })
                
                $('.sukucadang').click(() => loadOverlay('../page/SukuCadang.php'))
                $('.bookingservice').click(() => loadOverlay('../page/bookingservice/'))
                $('.suarapelanggan').click(() => loadOverlay('../page/suarapelanggan/'))
                $('.testdrive').click(() => loadOverlay('../page/testdrive/'))
                $('.tentangkami').click(() => loadOverlay('../page/TentangKami.php'))
                $('.konsultasi').click(() => loadOverlay('../page/konsultasi/?MMKSI'))
                $('.berita').click(() => loadOverlay('../page/Berita.php'))
                let prevScrollpos = window.pageYOffset;
                $(window).scroll(() => {
                    if($(window).scrollTop() > 95){
                        const currentScrollPos = window.pageYOffset;
                        if(prevScrollpos > currentScrollPos){
                            $('.headerContainer').removeClass('inactiveHeader')
                        }
                        else{
                            $('.headerContainer').addClass('inactiveHeader')
                        }
                        prevScrollpos = currentScrollPos;
                    }
                    else{
                        $('.headerContainer').removeClass('inactiveHeader')
                    }
                })
            });

            function sendData() {
                $.ajax({
                    type: 'post',
                    url: 'register.php',
                    data: $('#send_form').serialize(),
                    success: result => {
                        const res = $.parseJSON(result);
                        if(res.success == 1) {
                            grecaptcha.reset();
                            $('#send_form').trigger("reset");
                        } alert(res.message);
                    },
                    error: err => {
                        console.error(err.statusText);
                    }
                })
            }
        </script>
    </body>
</html>

