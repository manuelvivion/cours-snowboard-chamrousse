<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <link rel="canonical" href="https://www.cours-snowboard-chamrousse.fr" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Cours de snowboard, avec Gabriel Bessy</title>
    <meta name="description"
        content="Ecole de snowboard dans la station de Chamrousse, avec Gabriel Bessy moniteur indépendant. Des cours et initiations pours tous les âges, dès 3 ans, et tous les niveaux. Différentes types de pratiques : snowboard, splitboard, freestyle, du débutant jusqu'au perfectionnement. Langues : français, espanol, english">

    <link rel="shortcut icon" href="images/icocsc.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <!-- CDN Fonts -->
    <link href="https://fonts.cdnfonts.com/css/primetime" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/muro" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Bungee&family=Changa+One:ital@0;1&family=Lalezar&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/modal.css" />


</head>

<body>
    <?php

include("config_lang.php");

?>




    <header>

        <div class="container-fluid intro">
            <!--zone image d'accueil-->
            <div class="row">
                <div class="col col-sm-1 col-lg-2"></div>
                <div class="col-12 col-sm-10 col-lg-8 ">
                    <img src="images/Accueil_1200x600.jpg"
                        alt="Gabriel Bessy, moniteur de snowboard pour tous les âges, tous les niveaux"
                        title="Gabriel Bessy, moniteur de snowboard pour tous les âges, tous les niveaux"
                        style="width:100%;max-width:1200px;">
                </div>
                <div class="col col-sm-1 col-lg-2"></div>

            </div>
        </div>
    </header>



    <?php include 'sections/navbar.php';?>





    <main>
        <?php include 'sections/intro.php';?>
        <?php include 'sections/cours.php';?>
        <?php include 'sections/exclu.php';?>
        <?php include 'sections/niveaux.php';?>
        <?php include 'sections/coaching.php';?>
        <?php include 'sections/split.php';?>
        <?php include 'sections/tarifs.php';?>
        <?php include 'sections/contacts.php';?>


    </main>

    <footer>

    </footer>

    <!----------Modal ------------->
    <div id="modal01" class="photo_modal">
        <span class="btn btn-danger btn-modal-close" onclick="modal01.style.display='none'"><i
                class="bi bi-x-lg"></i></span>
        <span class="btn btn-light button-modal-prev" onclick="caroussel(img01,'moins')"><i
                class="bi bi-caret-left-fill"></i></span>
        <span class="btn btn-light button-modal-next" onclick="caroussel(img01,'plus')"><i
                class="bi bi-caret-right-fill"></i></span>
        <div class="modal-content" onclick="modal01.style.display='none'">
            <img id="img01" alt="zoom sur la photo">
        </div>
    </div>

    <!-- Bootstrap JS bundle -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>

    <script>
    $(document).ready(function() {

        $(".nav-link").click(function() {
            $("#navbarNav").collapse('hide');
        });
    });
    </script>

    <script>
    function affiche(element) {
        console.log("touche");
        img01 = document.getElementById("img01");
        img01.src = element.src;
        document.getElementById("modal01").style.display = "block";

        if (element.classList.contains("paysage")) {
            img01.style.width = "90%";
            img01.style.height = "auto";
            img01.style.margin = "auto";
        } else {
            img01.style.marginTop = "20px";
            img01.style.height = "80%";
            img01.style.width = "auto";
            img01.style.margin = "auto";
        }
    }


    function caroussel(img, direction) {
        //console.log(img.src);
        let index = -1;
        const matches = document.querySelectorAll("img.caroussel");
        let qte = matches.length;
        //console.log(matches);
        for (i = 0; i < qte; i++) {
            if (matches[i].src == img.src) {
                index = i;
            }
        }
        if (index >= 0) {

            if (direction == "moins") {
                index = (index == 0) ? qte - 1 : index - 1;
            } else {
                index = (index == qte - 1) ? 0 : index + 1;
            }

            img.src = matches[index].src;

            if (matches[index].classList.contains("paysage")) {
                // console.log("paysage");
                img.style.width = "90%";
                img.style.height = "auto";
                img.style.margin = "auto";
            } else {
                // console.log("portrait");

                img.style.marginTop = "20px";
                img.style.height = "80%";
                img.style.width = "auto";
                img.style.margin = "auto";
            }

        }
        // console.log(index);


    }
    </script>

    <!-- prettier-ignore -->
    <script>
    (g => {
        var h, a, k, p = "The Google Maps JavaScript API",
            c = "google",
            l = "importLibrary",
            q = "__ib__",
            m = document,
            b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}),
            r = new Set,
            e = new URLSearchParams,
            u = () => h || (h = new Promise(async (f, n) => {
                await (a = m.createElement("script"));
                e.set("libraries", [...r] + "");
                for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                e.set("callback", c + ".maps." + q);
                a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                d[q] = f;
                a.onerror = () => h = n(Error(p + " could not load."));
                a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                m.head.append(a)
            }));
        d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() =>
            d[l](f, ...n))
    })
    ({

        key: <?php include 'env/api-map.php';?>,
        v: "beta"
    });
    </script>

    <script>
    // Initialize and add the map
    let map;

    async function initMap() {
        // The location of Uluru
        const position = {
            lat: 45.10955,
            lng: 5.87607
        };
        // Request needed libraries.
        //@ts-ignore
        const {
            Map
        } = await google.maps.importLibrary("maps");
        const {
            AdvancedMarkerView
        } = await google.maps.importLibrary("marker");

        // The map, centered at Uluru
        map = new Map(document.getElementById("map"), {
            zoom: 17,
            center: position,
            mapId: "DEMO_MAP_ID",
        });

        // A marker with a with a URL pointing to a PNG.
        const CscFlag = document.createElement("img");
        CscFlag.src = "images/marker_rdv.png";

        // The marker, customisé
        const marker = new AdvancedMarkerView({
            map: map,
            position: position,
            title: "CSC",
            content: CscFlag,
        });
    }

    initMap();
    </script>


</body>

</html>