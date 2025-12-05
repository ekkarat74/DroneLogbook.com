<?php
	include_once('../../../../php_header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        Log Integrations - DroneLogbook - Simplifying Drone Operations
    </title>
    <meta
        content="Log Integrations: Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload one."
        name="description" />
    <meta content="DroneLogbook" name="author" />
    <meta content="DroneLogbook" property="og:title" />
    <meta content="website" property="og:type" />
    <meta content="https://image.ibb.co/cVGLSo/og_img.png" property="og:image" />
    <meta content="1200" property="og:image:width">
    <meta content="https://www.dronelogbook.com" property="og:url" />
    <meta
        content="Log Integrations: Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload one."
        property="og:description" />
    <meta content="DroneLogbook" property="og:site_name" />
    <meta content="on" name="twitter:widgets:csp" />
    <meta content="https://www.dronelogbook.com" name="twitter:url" />
    <meta content="summary" name="twitter:card" />
    <meta content="DroneLogbook" name="twitter:title" />
    <meta
        content="Log Integrations: Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload one."
        name="twitter:description" />
    <meta content="DroneLogbook" property="og:site_name" />
    <meta
        content="Log Integrations: Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload one."
        name="twitter:text:description" />
    <meta content="DroneLogbook" property="og:site_name" />
    <meta content="https://image.ibb.co/cVGLSo/og_img.png" name="twitter:image" />
    <meta content="@dronelogbook" name="twitter:site" />
    <link href="../../favicon.ico" rel="shortcut icon" />
    <!-- Mobile Meta -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/navigation.min.css" rel="stylesheet" />
    <link href="../../css/general-style.min.css?v=20210105" rel="stylesheet" />
    <link href="../../css/robly.css" rel="stylesheet" type="text/css" />
    <script src="/_static/lib/jquery-3.6.1.min.js">
    </script>
    <style>
    #contactForm label {
        display: block;
        font-size: 14px;
        font-weight: 300;
    }

    #contactForm .button {
        cursor: pointer;
        width: 50%;
        display: block;
        margin: 0 auto;
        border: 1px solid transparent;
        border-radius: 30px;
        background: #000;
        color: #FFF;
        padding: 10px;
        font-size: 15px;
        text-align: center;
    }

    #contact input[type=text],
    #contact input[type=email],
    #contact input[type=tel],
    #contact input[type=url],
    #contact textarea,
    #contact select {
        font-size: 14px !important;
        margin: 0 0 10px;
    }

    #contact select {
        width: 100%;
        border: 1px solid #ccc;
        background: #FFF;
        padding: 10px;
        border-radius: 0px;
    }

    #contact #status {
        font-size: 14px !important;
        color: black !important;
        font-weight: 600;
    }

    .solutions-twig {
        height: 850px;
    }

    .solutions-twig>.column-left {
        width: 44%;
        top: 150px;
        overflow: visible;
    }

    .column-left,
    .column-right {
        z-index: 200000000;
        transform: none !important;
    }

    .column-right {
        top: 150px;
        margin-right: 20px;
        color: white;
    }

    @media only screen and (max-width: 768px) .solutions-twig>.column-left {
        width: 100% !important;
        /* top: 45%; */
    }

    .tagNumber {
        border-radius: 25px;
        width: 42px;
        height: 42px;
        font-size: 1.4em;
        text-align: center;
        line-height: 42px;
        color: white;
        background-color: #173d40;
        display: inline-block;
    }
    </style>
    </link>
    </meta>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <a class="col-xs-6 col-sm-6 col-md-2 col-lg-2" href="index.html">
                    <img class="logo" src="../../img-min/logo/Logo-whiteText.png" />
                </a>
                <nav id="nav-links">
                    <a class="nav-link" href="solutions.html">
                        Soluzioni
                    </a>
                    <a class="nav-link" href="features.html">
                        Caratteristiche
                    </a>
                    <a class="nav-link" href="pricing.php">
                        Prezzi
                    </a>
                    <a class="nav-link" href="partners.html">
                        Partners
                    </a>
                    <a class="nav-link" href="innovation.html">
                        Innovazione
                    </a>
                    <a class="nav-link" href="faq.html">
                        F.A.Q. (Domande frequenti)
                    </a>
                    <a class="nav-link" href="contact.php">
                        Contattaci
                    </a>
                    <a class="nav-link signIn" href="/profile/login.php">
                        Registrazione
                    </a>
                </nav>
                <div class="mobile-nav-container" onclick="toggleMobileNav(this)">
                    <div class="mobile-nav">
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-links">
            <nav id="mobile-nav-links">
                <a class="nav-link" href="solutions.html">
                    Soluzioni
                </a>
                <a class="nav-link" href="features.html">
                    Caratteristiche
                </a>
                <a class="nav-link" href="pricing.php">
                    Prezzi
                </a>
                <a class="nav-link" href="partners.html">
                    Partners
                </a>
                <a class="nav-link" href="innovation.html">
                    Innovazione
                </a>
                <a class="nav-link" href="faq.html">
                    F.A.Q. (Domande frequenti)
                </a>
                <a class="nav-link" href="contact.php">
                    Contattaci
                </a>
                <a class="nav-link btn" href="/profile/login.php">
                    Registrazione
                </a>
            </nav>
        </div>
    </header>
    <section class="laptop internal features" style="margin-bottom: 0px; padding-bottom: 0px;">
        <div class="page-wrapper">
            <div class="content-container">
                <div class="column-left">
                    <h1>
                        Integrations Hub
                    </h1>
                    <h2 class="sub-header long">
                        DroneLogbook works by importing flight logs via automated or manual telemetry importation.
                        Import flight logs to auto fill flight data, view GPS trace and play back in 3D. We support log
                        files from all major manufacturers: DJI, Parrot, Autel, Wingcopter, FlyAbility, Wingtra,
                        SenseFly, Yuneec...
                        <br />
                        È possibile importare più di 80 tipi di registri.
                    </h2>
                </div>
            </div>
        </div>
        <div class="colored-bg">
        </div>
    </section>
    <section class="solution-type" style="margin-top: 40px;">
        <div class="page-wrapper">
            <div class="content-container">
                <div class="column-left" style="width: 100%;">
                    <div class="content-header">
                    </div>
                    <div class="content-sub-header" style="max-width: none;">
                        <div class="page-wrapper">
                            <img class="hello-feautures-img" src="../../../../_static/images/schema-integrations.png" />
                        </div>
                        Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload
                        one. This schema describes these integration levels, and below, list of all products integrated
                        with our platform.
                        <div style="margin-top: 40px; padding-bottom: 15px; border-bottom: 1px solid #b0b0b0;">
                            <div class="tagNumber">
                                1
                            </div>
                            <h2 style="display: inline-block; margin-left: 10px;">
                                Auto-Sync Integrations
                            </h2>
                        </div>
                        <br />
                        After you have authorised the following manufacturers and third-party apps, your flight logs are
                        automatically uploaded to your account.
                        <ul>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/AutelRobotics_Logo.jpg"
                                    style="width: 120px;" width="" />
                                Autel Explorer.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/parrott.png"
                                    style="width: 110px;" width="" />
                                Parrot FreeFly: Anafi, Anafi Thermal, Anafi USA.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/Sensefly.png"
                                    style="width: 100px;" width="" />
                                SenseFly eMotion: All SenseFly models compatible with eMotion.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/yuneec.png"
                                    style="width: 100px;" width="" />
                                Yuneec datapilot: H520.
                            </li>
                            <!--li style="height:auto;">
              <img class="hardware" src="/hp/1/img-min/drone%20hardware/AutelRobotics_Logo.jpg" style="width: 100px;" width="" alt="">
              Autel.
            </li-->
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/watts.jpeg"
                                    style="width: 100px;" width="" />
                                Watts Innovations: Prism.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/logo-skyfish.png"
                                    style="width: 100px;" width="" />
                                SkyFish.
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20software/DroneHarmony.png"
                                    style="width: 150px;" width="" />
                                DroneHarmony: Major DJI models.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20software/dronelink.png"
                                    style="width: 120px;" width="" />
                                DroneLink: Major DJI models.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20software/mapsmadeeasy.png"
                                    width="" />
                                MapsMadeEasy: Major DJI models.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/sky-drones.jpg"
                                    style="width: 140px;" />
                                Sky-Drones: Sky-Drones enabled aircrafts.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20software/ugcs.jpeg"
                                    style="width: 130px;" width="" />
                                UgCS: UgCS enabled aircrafts.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20software/zephyr_logo.png"
                                    style="width: 120px;" width="" />
                                Zephyr Simulator.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20software/Simnet.png"
                                    style="width: 120px;" width="" />
                                Simnet Simulator.
                            </li>
                            </li>
                        </ul>
                        <div style="margin-top: 40px; padding-bottom: 15px; border-bottom: 1px solid #b0b0b0;">
                            <div class="tagNumber">
                                2
                            </div>
                            <h2 style="display: inline-block; margin-left: 10px;">
                                Cloud-Sync Integrations
                            </h2>
                        </div>
                        <br />
                        Logs are pulled from your manufacturer cloud account to your logbook account. You need first to
                        save your flights to the manufacturer cloud.
                        <ul>
                            <!--li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/AutelRobotics_Logo.jpg"
                                    style="width: 100px;" />
                                Autel Explorer and Sky mobile apps.
                            </li-->
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/DJI.jpg"
                                    style="width: 70px;" width="" />
                                Compatible with DJI Mobile apps syncing flights on DJI cloud: DJI Fly, GO, GO4, Pilot,
                                GS.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/dronetag.svg"
                                    style="width: 155px;" />
                                Dronetag RemoteID Trackers.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/skydio.jpg"
                                    style="width: 100px;" />
                                All Skydio models sync with Skydio cloud portal.
                            </li>
                        </ul>
                        <div style="margin-top: 40px; padding-bottom: 15px; border-bottom: 1px solid #b0b0b0;">
                            <div class="tagNumber">
                                3
                            </div>
                            <h2 style="display: inline-block; margin-left: 10px;">
                                DLB-Sync Compatible Apps
                            </h2>
                        </div>
                        <br />
                        DLB Sync is our Android app that can push your device-local flight logs directly to your logbook
                        account. If you use one of the listed below mobile drone flight control apps on your Android
                        device, DLB-Sync can list these apps log files, stored locally, and upload them to your account.
                        <ul>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/DJI.jpg"
                                    style="width: 70px;" width="" />
                                DJI Mobile apps and tablets: DJI GO, GO4, Pilot, Fly, Crystal Tablet, DJI GS RTK Crystal
                                Tablet, DJI AG Crystal Tablet.
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware"
                                    src="/hp/1/img-min/drone%20software/Pix4D_LOGO_MAIN_1024.png" style="width: 70px;"
                                    width="" />
                                Pix4D Capture app (DJI Logs).
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20software/dronedeploy.jpg"
                                    style="width: 70px;" width="" />
                                DroneDeploy (DJI Logs).
                            </li>
                            <li style="height:auto;">
                                <img alt="" class="hardware" src="/hp/1/img-min/drone%20hardware/AutelRobotics_Logo.jpg"
                                    style="width: 100px;" />
                                Autel Explorer app.
                            </li>
                        </ul>
                        <div style="margin-top: 40px; padding-bottom: 15px; border-bottom: 1px solid #b0b0b0;">
                            <div class="tagNumber">
                                4
                            </div>
                            <h2 style="display: inline-block; margin-left: 10px;">
                                Manual Importers
                            </h2>
                        </div>
                        <br />
                        We support more than 80 telemetry log files, from major manufacturers and third-party
                        applications:
                        <br />
                        <br />
                        <i>
                            Aeromapper, Airspace, APM, ArduPilot, Astra Tracker, Autel Robotics, Autoflight Logic, BBX,
                            datCon, DJI, DJI-Ultimate-Flight, DoosanMobility, DraganFly, DroneAmplified, DroneDeploy,
                            DroneHarmony, Esri, Flyability, FlyTrex, FPV Camera, Freefly Alta, Google Earth, GUTMA,
                            JETI, Litchi, Lockheed Martin Indago, MapsMadeEasy, MaVinci, MikroKopter, NV-Drones, Parrot,
                            Photodata, Picollo, PIX4D, PowerVision, PrecisionFlight, Quantum Systems, QuestUAV, Robota
                            Eclipse, SenseFly, Sentera, Simnet, Sky-Drones, Skywatch, Team Black Sheep, TopXGun,
                            Trimble, Ublox, UGCS, ULog, Vantage Robotics, WingCopter, Wingtra, Xiro, Yuneec,...
                        </i>
                    </div>
                </div>
            </div>
            <div class="divider">
            </div>
        </div>
    </section>
    <section class="readytouse">
        <h2 class="content-header">
            Pronto per utilizzare DroneLogbook?
        </h2>
        <p class="content-sub-header">
            Crea un account gratuito
        </p>
        <p class="content-sub-header">
            <b>
                2 mesi di prova gratuiti per tutti i nuovi utenti
            </b>
        </p>
        <div>
            <ul class="ui-buttons ui-footer">
                <li>
                    <a class="ui-black" href="pricing.php">
                        INIZIA
                    </a>
                </li>
                <li>
                    <a class="ui-white" href="features.html">
                        SCOPRI DI PIÙ
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="appstore wedo" style="padding-top: 20px">
        <div class="page-wrapper" style="justify-content: center; flex-wrap: wrap; align-items: flex-start;">
            <div class="content-header">
                Le app mobili di DroneLogbook
            </div>
            <div class="divider" style="margin-bottom: 20px;">
            </div>
            <div style="padding-left: 40px; padding-right: 10px; padding-top: 40px;">
                <p class="appstore__desc">
                    La soluzione di DroneLogbook si basa su un'infrastruttura cloud con archiviazione sicura dei dati,
                    un'applicazione web online accompagnata dalla nostra app mobile per l'accesso offline e la
                    sincronizzazione facile con il tuo account basato sul cloud. Inoltre, l'app mobile ti fornisce
                    accesso agli ultimi aggiornamenti dello stato dello spazio aereo, alle condizioni meteorologiche
                    locali e alla lettura dell'indice solare che potrebbero influire sulle tue operazioni.
                </p>
                <br />
                <p class="appstore__desc">
                    Un'altra app mobile per Android, <b>DLBSync</b>, semplifica l'importazione dei tuoi voli dalle principali app di controllo dei droni direttamente nel tuo account di DroneLogbook. Questa app può sincronizzare i voli in DLB Sync dalle tue app di controllo dei voli quando sei offline o in zone con scarsa copertura mobile, quindi caricare i voli nell'account di DroneLogbook quando hai copertura mobile o Wi-Fi.
                </p>
            </div>
            <div style="display: flex; padding-left: 20px; padding-right: 20px; align-items: flex-end;">
                <div>
                    <a class="appstore__link-item appstore__link-item--itunes-lg"
                        href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8"
                        target="_blank">
                        <img alt="Download on the App Store" class="appstore__img img-responsive"
                            src="../../img-min/mobileApp3.png" />
                    </a>
                </div>
                <div style="margin-top: 40px; margin-bottom: 40px;">
                    <a class="appstore__link-item appstore__link-item--top"
                        href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8"
                        target="_blank">
                        <img alt="Download on the App Store" class="appstore__img img-responsive"
                            src="../../img-min/download-app-apple.svg" style="width: 85%;" />
                    </a>
                    <a class="appstore__link-item"
                        href="https://play.google.com/store/apps/details?id=com.droneanalytics.dlbmobile"
                        target="_blank">
                        <img alt="Get It On Google Play" class="appstore__img img-responsive"
                            src="../../img-min/download-app-android.svg" style="width: 85%;" />
                    </a>
                </div>
                <a class="appstore__link-item appstore__link-item--itunes-lg"
                    href="https://play.google.com/store/apps/details?id=com.dlbsync" target="_blank">
                    <img alt="Download on the App Store" class="appstore__img img-responsive"
                        src="../../img-min/mobileDlbsync.png" />
                </a>
            </div>
        </div>
    </section>
    <footer class="footer">
        <!--<ul class="icons">-->
        <!--<li class="icons__item">-->
        <!--<a href="http://www.twitter.com/DroneLogbook" target="_blank" class="icons__logo icons__logo&#45;&#45;fa-twitter"></a>-->
        <!--</li>-->
        <!--</ul>-->
        <ul class="footer-menu">
            <li class="footer-menu__item">
                DroneLogbook
            </li>
            <li class="footer-menu__item">
                <a class="footer-menu__link" href="terms.php">
                    Termini di servizio
                </a>
            </li>
            <li class="footer-menu__item">
                <a class="footer-menu__link" href="contact.php">
                    Contatti
                </a>
            </li>
            <li class="footer-menu__item">
                <a class="icons__logo icons__logo--fa-twitter" href="http://www.twitter.com/DroneLogbook"
                    target="_blank">
                </a>
            </li>
        </ul>
    </footer>
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/ionicons.min.css" rel="stylesheet" />
    <link href="../../css/themes/default/default.css" rel="stylesheet" />
    <script src="../../js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="../../js/jquery.easing.min.js" type="text/javascript">
    </script>
    <script src="../../js/jquery.vide.js" type="text/javascript">
    </script>
    <script src="../../js/main.js" type="text/javascript">
    </script>
    </link>
</body>

</html>