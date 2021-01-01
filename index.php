<!doctype html>
<html lang="tr-TR">
<?php
require_once 'connect.php';
?>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YYP33N1R01"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YYP33N1R01');
    </script>


    <title>Otların Uğultusu Altında</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
    <!-- mystylesheet -->
    <link rel="stylesheet" href="css/mainStyle.css">
    <link rel="stylesheet" href="css/buttonStyle.css">
    <link rel="stylesheet" href="css/font-family.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">


    <meta name="description"
        content="Dokuz Eylül Üniversitesi GSF Fotoğraf bölümü öğrencisi Havva Zorlu'nun Şükrü Erbaş'ın Otların Uğultusu Altında şiir kitabından ilhamla hazırladığı dijital fotoğraf sergisi.">
    <meta name="keywords"
        content="Otların Uğultusu Altında,Havva Zorlu,Şükrü Erbaş,dijital sergi,Otlarinugultusualtinda">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF8" />
    <link rel="canonical" href="https://otlarinugultusualtinda.com/index.php" />
    <meta name="author" content="Havva Zorlu">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font import link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <!-- sliderjs -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@300;500&display=swap');
    </style>

</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="nav-link font-weight-bold navbar-brand js-scroll-trigger" id="brandx" href="#page-top">Havva
                ZORLU</a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a href="#about" class="nav-link js-scroll-trigger" id="onsozId">Giriş</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link js-scroll-trigger" id="eseryazisiId">Manifesto</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link js-scroll-trigger" id="sergiId">Fotoğraflar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#meabout" class="nav-link js-scroll-trigger" id="bizkimizId">Hakkında</a>
                    </li>
                    <li class="nav-item">
                        <a href="#comments" class="nav-link js-scroll-trigger" id="bizkimizId">Sergiyi Değerlendir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end header-ot">
                    <h1 class="masthead-item text-white font-consolas font-52-px" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-delay="300">
                        otların
                    </h1>
                    <h1 class="masthead-item text-white font-consolas font-52-px" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-delay="600">
                        uğultusu
                    </h1>
                    <h1 class="masthead-item text-white font-consolas font-52-px" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-delay="900">
                        altında
                    </h1>
                    <hr class="divider px-5">
                </div>
                <div class="col-lg-10 align-self-baseline" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="1800">
                    <p class="text-white mb-5 font-timesNewRoman font-24-px font-italic">
                        Otların uğultusu, heykellerin gölgeleri, iç geçiren rüzgâr ve avluya sığmayan bir ruhun
                        gördükleri...
                        Budur özeti görüleceklerin.
                    </p>
                </div>
                <div class="col-lg-10 align-self-start mb-5" data-aos="fade-down" data-aos-duration="1200"
                    data-aos-delay="1500">
                    <a href="#about" class="btn btn-first btn-xl js-scroll-trigger">
                        Sergime Katıl!
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="h-100 bg-ot" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <h4 class="text-white font-courier-prime" data-aos="fade-down" data-aos-duration="1000"
                        data-aos-delay="800">
                        <a class="cursor-point text-light text-decoration-none font-courier-prime">Şükrü Erbaş</a>'ın
                    </h4>
                    <h4 class="text-white font-courier-prime" data-aos="fade-down" data-aos-duration="1000"
                        data-aos-delay="800">"Otların Uğultusu Altında"</h4>
                    <h4 class="text-white font-courier-prime" data-aos="fade-down" data-aos-duration="1000"
                        data-aos-delay="800">adlı kitabından ilham alınmıştır.</h4>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="text-center w-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500">
                    <img class="img-fluid img-fix" src="img/ot-bg-section.png">
                </div>
            </div>
        </div>
    </section>
    <section class="page-section h-100 bg-darkv2 text-white" id="services">
        <div class="container">
            <div class="text-justify">
                <p class="exhibition-text font-timesNewRoman text-white font-24-px" data-aos="zoom-in"
                    data-aos-duration="1200">
                    Otların uğultusu, heykellerin gölgeleri, iç geçiren rüzgar ve avluya sığmayan bir ruhun gördükleri…
                    Budur özeti görüleceklerin. Heykeller ölümsüzlüğün çabasıyken, otların çabası yaşamaktı, hepimizin
                    yerine… En son ne zaman baktın gökyüzüne? Ne zaman geldin göz göze birisiyle? İnsanın ruhunu
                    yitirdiği bu devirde, ölüm ve yaşamın farklı bir izahıdır her fotoğraf. Saklananların, yok
                    olanların, geride kalanların anıtı -belki kanıtı- aynı zamanda yaşayıp büyüyen otların en güzel
                    sunağı… Ölümsüzlüğü bulmak için yaşamla ölümü sansürlemek. Ölümün pis kokusunu, acizliğini
                    engellemek için kullanılır ya yaşam, heykeller de otları öyle sahiplendi; çünkü ölüm olmadan yaşam
                    kimsesiz kalır, bu yüzdendir ki birinin olduğu yerde diğerine de ihtiyaç vardır. Otların heykelleri
                    sardığı ve onun verdiği şekille büyüdüğü gibi. İnsanın da insana ihtiyacı vardı kanını akıtmadan
                    önce ve kadının olduğu yerde örtüye ihtiyaç yoktu insan namusu yaratmadan önce.
                    <i class="font-weight-light">
                        Şimdi hepimiz huzurla birbirimize kötülük ediyoruz.
                    </i>

                    Bu yüzden

                    <i class="font-weight-light">
                        ben
                        yüreğini yitirmiş bu zamandan
                        korkuyorum</i>
                    gölgelerin ve otların ardına sığınarak. Saklandığım yerde tekrar ediyorum şu dizeleri:
                </p>
                <div class="font-timesNewRoman text-center justify-content-center" data-aos="zoom-in"
                    data-aos-duration="1200">
                    <i>
                        <h4>Ölümse duvarda bir dünya hecesi</h4>
                    </i>
                    <i>
                        <h4>Bahçedeki otlara zamanı anlatıyor.</h4>
                    </i>
                    <hr class="divider-light mt-3">
                </div>
                <div class="text-center pt-5" data-aos="zoom-in" data-aos-duration="1800">
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#portfolio">Fotoğrafları Görelim!</a>
                </div>
            </div>
    </section>
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-right" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-left" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-right" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-left" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-right" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-left" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-right" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/7.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/7.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-left" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/8.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/8.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-right" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/9.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/9.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 bg-first" data-aos="zoom-in-left" data-aos-duration="2000">
                    <a href="img/portfolio/fullsize/10.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/10.jpg" class="img-fluid">
                        <div class="portfolio-box-caption">
                            <div class="project-name">
                                <ion-icon name="resize-outline"></ion-icon>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-darkv2 h-100" id="meabout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-7 px-5" data-aos="zoom-out-down" data-aos-duration="1000"
                    data-aos-delay="0">
                    <p class="text-light text-center font-courier-prime font-18-px aboutme-p">
                        Bir köşeye bırakılmış heykellerin fotoğraflarını
                        çekmeye başladığımda zihnimde zaman, süreç, yaşam,
                        ölüm, doğum, beşer, doğa kavramlarını irdeliyordum.
                        Bu zıtlıkların birbiriyle bir ilişki halinde olması
                        orada fotoğraf çekmeye devam etmemi sağladı.
                        Gördüklerimi ölümsüzleştirirken hissettiklerimde daha
                        önce rastladığım dizeler vardı. Şükrü Erbaş’ın
                        &quot;Otların Uğultusu Altında&quot; adlı şiir kitabını
                        anımsadım. Kitabı tekrar okuduğumda bazı dizelerle
                        hissettiklerimin örtüştüğünü gördüm ve sergim kitabın
                        ismini aldı. Sonraki süreçte bu kitabın kapak
                        tasarımcısı Melis Rozental çizgilerini paylaştı
                        benimle. Bu projenin oluşma aşamalarına şahit olan
                        dostum Polen Biçer sergimin manifestosunu kaleme
                        aldı. Son olarak sevgili Mert Can Düldül sergimi
                        dijital kültürün bir parçasına dönüştürerek bu web
                        sitesini hazırladı. Proje boyunca desteklerini
                        esirgemeyen ve heyecanıma ortak olan başta Şükrü
                        Erbaş, Melis Rozental, Polen Biçer, Mert Can Düldül,
                        danışmanlıklarıyla da hocalarım Betül Uslu Özkan ve
                        Sadık Tumay olmak üzere tüm dostlara teşekkür ederim.
                    </p>
                    <p class="text-light text-center font-courier-prime font-18-px aboutme-p">
                        Kişisel başlayan bu hikâye bu isimlerin değerli
                        katkılarıyla kolektif bir hâl aldı. Herkesin kendi
                        ifade yöntemiyle dahil olduğu bu projeye sen de
                        katılabilirsin. Yazı, ses ya da görsel hiç fark
                        etmez. Bu sergi dolayısıyla aklına gelen daha önce
                        üretilmiş ya da senin üreteceğin herhangi bir şey
                        olabilir. Okulumun bahçesindeki heykellerle başlayan
                        yolculuğuma kimlerin nasıl eşlik edeceğini merak
                        ediyor ve yapacağın katkıyla projemin yaşayacağı
                        dönüşümü görmek için sabırsızlanıyorum.
                    </p>
                    <p class="text-light text-center font-courier-prime font-18-px aboutme-p">
                        İlginize teşekkür ederim, sevgilerimle.
                    </p>
                    <p class="text-light text-center font-courier-prime font-18-px aboutme-p">
                        Havva Zorlu
                    </p>
                </div>

                <div class="col-sm-12 col-lg-4 mx-0 px-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="500">
                    <div class="text-white text-center font-courier-prime ml-3">
                        <img class="headerPic rounded-circle" src="img/havvapp.jpg" data-aos="zoom-in"
                            data-aos-duration="800">
                        <h5 class="text-white mt-4 font-dosis" data-aos="zoom-in" data-aos-duration="1000"
                            data-aos-delay="900">HAVVA ZORLU</h5>
                        <h5 class="text-white mt-4"> </h5>
                    </div>
                    <div class="share-icon">
                        <ul class="share-ul d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000"
                            data-aos-delay="1000">
                            <li class="share-li"><a href="mailto:havvazzorlu@gmail.com" class="share-button">
                                    <ion-icon name="mail-unread-outline"></ion-icon>
                                </a></li>
                            <li class="share-li"><a href="https://instagram.com/havvazorlu" class="share-button">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a></li>
                            <li class="share-li"><a href="https://www.facebook.com/havva.zorlu" class="share-button">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a></li>
                        </ul>
                    </div>
                    <div class="other-user text-center pt-5 d-flex justify-content-around">
                        <div class="d-flex justify-content-between" data-aos="zoom-in-left" data-aos-duration="1000"
                            data-aos-delay="1300">
                            <a class="text-decoration-none text-white" href="https://www.instagram.com/m.duldul/">
                                <div class="author">
                                    <div class="author-ico">
                                        <ion-icon name="code-slash-outline"></ion-icon>
                                    </div>
                                    <div class="author-name">
                                        <h5><a href="https://mertcanduldul.cf/"
                                                class="text-decoration-none text-light">Mert Can
                                                Düldül</a></h5>
                                        <hr class="divider">
                                        <p class="text-light font-cosis">Web Site</p>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between mr-4" data-aos="zoom-in-left"
                            data-aos-duration="1000" data-aos-delay="1500">
                            <a class="text-decoration-none text-white" href="https://www.instagram.com/mlisr/">
                                <div class="author">
                                    <div class="author-ico">
                                        <ion-icon name="pencil-outline" class="author-ico-big"></ion-icon>
                                    </div>
                                    <div class="author-name">
                                        <h5>Melis Rozental</h5>
                                        <hr class="divider">
                                        <p class="text-light font-cosis">Çizim</p>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between margin-polen" data-aos="zoom-in-left"
                            data-aos-duration="1000" data-aos-delay="1700">
                            <a class="text-decoration-none text-white" href="https://www.instagram.com/polennbicer/">
                                <div class="author">
                                    <div class="author-ico-big">
                                        <ion-icon name="text-outline"></ion-icon>
                                    </div>
                                    <div class="author-name">
                                        <h5>Polen Biçer</h5>
                                        <hr class="divider">
                                        <p class="text-light font-cosis">Metin</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-ot" id="comments">
        <div class="container-fluid">
            <h4 class="text-light text-center font-futura-bold">Bu sergi sana neler hissettirdi? </h4>
            <h4 class="text-light text-center font-futura-bold">Duygu, düşünce ve yorumlarını merakla bekliyorum. </h4>
            <hr class="divider-light">
            <h5 class="text-light font-dosis text-center xxaa bg-darkv2">
                Buluşmamızın hatırası olarak senin için hazırlayacağım dijital kartpostala sahip olmak
                <a href="#" class="text-white text-decoration paylas" data-toggle="modal"
                    data-target="#modalShare">ister misin?</a>
            </h5>
            <div class="modal fade" id="modalShare" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-second">
                        <div class="modal-header bg-light">
                            <h5 class="modal-title" id="exampleModalLongTitle">Paylaş</h5>
                        </div>
                        <div class="modal-body text-light">
                            Sergide en beğendiğin fotoğrafı benimle paylaş.
                        </div>
                        <div class="modal-footer bg-light">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sergiye Dön</button>

                            <a class="text-light text-decoration-none" href="mailto:havvazzorlu@gmail.com">
                                <button type="button" class="btn btn-dark">Gönder</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container bg-first mt-5 py-5 ">
            <?php
            require_once 'addComment.php';
            ?>
        </div>
        <hr class="divider-light px-5 my-4">
        <div class="container">
            <div class="row">
                <?php
                    require_once 'commentList.php';
                ?>
            </div>
        </div>
    </section>
    <section class="p-4 bg-darkv2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mx-0 px-0">
                    <h5 class="text-light text-center font-dosis my-0 pb-4">Bu site
                        <a href="https://mertcanduldul.gq/" class="text-decoration-none text-warning">Mert Can
                            Düldül</a>
                        tarafından hazırlanmıştır.</h2>
                        <p class="text-light text-center font-dosis my-0 py-0">
                            Bu sitede yer alan yazılı ve görsel verilerin tüm hakları saklıdır. İzinsiz
                            kullanılamaz/işlenemez.
                        </p>
                        <p class="text-light text-center font-dosis my-0 py-0">
                            Copyright 2020 © Havva Zorlu
                        </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Slider js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- AOS Animation js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- ionicon js -->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!-- navbar-animate js -->
    <script src="js/navbar-animate.js"></script>
    <script src="js/readmore.min.js"></script>

    <script>
        $('.commentx').readmore({
            speed: 50,
            collapsedHeight: 100,
            moreLink: '<a class="btn btn-dark float-right" href="#">Devamını Oku</a>',
            lessLink: '<a class="btn btn-first float-right" href="#">Kapat</a>',
        });
    </script>


</body>

</html>