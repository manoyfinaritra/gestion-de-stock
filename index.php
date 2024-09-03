<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion s'il n'est pas connecté
    header("Location: login.php");
    exit();
} // Le reste de votre code sécurisé...
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Matériels</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <title>page d'acceuil</title>
    <link rel="stylesheet" href="./css/bt.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");

        :root {
            --primary-color: #17c13b;
            --primary-color-dark: #17c13b;
            --secondary-color: #ca8a04;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --extra-light: #faf5ff;
            --max-width: 1200px;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        nav {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #ffffff;
            z-index: 99;
        }

        .nav__content {
            max-width: var(--max-width);
            margin: auto;
            padding: 1.5rem 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav .logo a {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
            transition: 0.3s;
        }

        nav .logo a:hover {
            color: var(--primary-color-dark);
        }

        nav .checkbox {
            display: none;
        }

        nav input {
            display: none;
        }

        nav .checkbox i {
            font-size: 2rem;
            color: var(--primary-color);
            cursor: pointer;
        }

        ul {
            display: flex;
            align-items: center;
            gap: 1rem;
            list-style: none;
            transition: left 0.3s;
        }

        ul li a {
            padding: 0.5rem 1rem;
            border: 2px solid transparent;
            text-decoration: none;
            font-weight: 600;
            color: var(--text-dark);
            transition: 0.3s;
        }

        ul li a:hover {
            border-top-color: var(--secondary-color);
            border-bottom-color: var(--secondary-color);
            color: var(--secondary-color);
        }

        .section {
            background-color: var(--extra-light);
        }

        .section__container {
            min-height: 100vh;
            max-width: var(--max-width);
            margin: auto;
            padding: 1rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 4rem;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .subtitle {
            letter-spacing: 2px;
            color: var(--text-light);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .title {
            font-size: 2.5rem;
            font-weight: 400;
            line-height: 3rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .title span {
            font-weight: 600;
        }

        .description {
            line-height: 1.5rem;
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        .action__btns {
            display: flex;
            gap: 1rem;
        }

        .action__btns button {
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: 2px;
            padding: 1rem 2rem;
            outline: none;
            border: 2px solid var(--primary-color);
            border-radius: 10px;
            transition: 0.3s;
            cursor: pointer;
        }

        .hire__me {
            background-color: var(--primary-color);
            color: #ffffff;
        }

        .hire__me:hover {
            background-color: var(--primary-color-dark);
        }

        .portfolio {
            color: var(--primary-color);
        }

        .portfolio:hover {
            background-color: var(--primary-color-dark);
            color: #ffffff;
        }

        .image {
            display: grid;
            place-items: center;
        }

        .image img {
            width: min(25rem, 90%);
            border-radius: 100%;
        }

        @media (width < 750px) {
            nav .checkbox {
                display: block;
            }

            ul {
                position: absolute;
                width: 100%;
                height: calc(100vh - 85px);
                left: -100%;
                top: 85px;
                background-color: var(--extra-light);
                flex-direction: column;
                justify-content: center;
                gap: 3rem;
            }

            nav #check:checked~ul {
                left: 0;
            }

            ul li a {
                font-size: 1.25rem;
            }

            .section__container {
                padding: 10rem 1rem 5rem 1rem;
                text-align: center;
                grid-template-columns: repeat(1, 1fr);
            }

            .image {
                grid-area: 1/1/2/2;
            }

            .action__btns {
                margin: auto;
            }
        }




        #liste {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            background: red;
            width: 100%;
            height: 100%;
            padding: 20px;
        }

        * {
            margin: 0;
            padding: 0;

            box-sizing: border-box;
            font-family: sans-serif;
        }

        @media print {

            .table,
            .table__body {
                overflow: visible;
                height: auto !important;
                width: auto !important;
            }
        }

        /*@page {
    size: landscape;
    margin: 0; 
}*/

        body {
            min-height: 100vh;
            background: url(images/html_table.jpg) center / cover;
        }

        .tableau {

            justify-content: center;
            align-items: center;
            padding: 40px 0px;
            margin-top: 60px;
        }

        main.table {
            width: 82vw;
            height: 83vh;
            background-color: #fff5;

            backdrop-filter: blur(7px);
            box-shadow: 0 .4rem .8rem #0005;
            border-radius: .8rem;

            overflow: hidden;
        }

        .table__header {
            width: 100%;
            height: 10%;
            background-color: #fff4;
            padding: .8rem 1rem;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table__header .input-group1 {
            width: 35%;
            height: 100%;
            background-color: #fff5;
            padding: 0 .8rem;
            border-radius: 2rem;

            display: flex;
            justify-content: center;
            align-items: center;

            transition: .2s;
        }

        .table__header .input-group1:hover {
            width: 45%;
            background-color: #fff8;
            box-shadow: 0 .1rem .4rem #0002;
        }

        .table__header .input-group1 img {
            width: 2.2rem;
            height: 2.2rem;
            background-color: transparent;
        }

        .table__header .input-group1 input {
            width: 100%;
            padding: 0 .5rem 0 .3rem;
            background-color: transparent;
            border: none;
            outline: none;
        }

        .table__body {
            width: 95%;
            max-height: calc(89% - 1.6rem);
            background-color: #fffb;

            margin: .8rem auto;
            border-radius: .6rem;

            overflow: auto;
            overflow: overlay;
        }


        .table__body::-webkit-scrollbar {
            width: 0.5rem;
            height: 0.5rem;
        }

        .table__body::-webkit-scrollbar-thumb {
            border-radius: .5rem;
            background-color: #0004;
            visibility: hidden;
        }

        .table__body:hover::-webkit-scrollbar-thumb {
            visibility: visible;
        }


        table {
            width: 100%;

        }

        td img {
            width: 36px;
            height: 36px;
            margin-right: .5rem;
            border-radius: 50%;

            vertical-align: middle;
        }

        table,
        th,
        td {
            border-collapse: collapse;
            padding: 1rem;
            text-align: left;
        }

        thead th {
            position: sticky;
            top: 0;
            left: 0;
            background-color: #d5d1defe;
            cursor: pointer;
            text-transform: capitalize;
        }

        tbody tr:nth-child(even) {
            background-color: #0000000b;
        }

        tbody tr {
            --delay: .1s;
            transition: .5s ease-in-out var(--delay), background-color 0s;
        }

        tbody tr.hide {
            opacity: 0;
            transform: translateX(100%);
        }

        tbody tr:hover {
            background-color: #fff6 !important;
        }

        tbody tr td,
        tbody tr td p,
        tbody tr td img {
            transition: .2s ease-in-out;
        }

        tbody tr.hide td,
        tbody tr.hide td p {
            padding: 0;
            font: 0 / 0 sans-serif;
            transition: .2s ease-in-out .5s;
        }

        tbody tr.hide td img {
            width: 0;
            height: 0;
            transition: .2s ease-in-out .5s;
        }

        .status {
            padding: .4rem 0;
            border-radius: 2rem;
            text-align: center;
        }

        .status.delivered {
            background-color: #86e49d;
            color: #006b21;
        }

        .status.cancelled {
            background-color: #d893a3;
            color: #b30021;
        }

        .status.pending {
            background-color: #ebc474;
        }

        .status.shipped {
            background-color: #6fcaea;
        }


        @media (max-width: 1000px) {
            td:not(:first-of-type) {
                min-width: 12.1rem;
            }
        }

        thead th span.icon-arrow {
            display: inline-block;
            width: 1.3rem;
            height: 1.3rem;
            border-radius: 50%;
            border: 1.4px solid transparent;

            text-align: center;
            font-size: 1rem;

            margin-left: .5rem;
            transition: .2s ease-in-out;
        }

        thead th:hover span.icon-arrow {
            border: 1.4px solid #6c00bd;
        }

        thead th:hover {
            color: #6c00bd;
        }

        thead th.active span.icon-arrow {
            background-color: #6c00bd;
            color: #fff;
        }

        thead th.asc span.icon-arrow {
            transform: rotate(180deg);
        }

        thead th.active,
        tbody td.active {
            color: #6c00bd;
        }

        .export__file {
            position: relative;
        }

        .export__file .export__file-btn {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background: #fff6 url(images/export.png) center / 80% no-repeat;
            border-radius: 50%;
            transition: .2s ease-in-out;
        }

        .export__file .export__file-btn:hover {
            background-color: #fff;
            transform: scale(1.15);
            cursor: pointer;
        }

        .export__file input {
            display: none;
        }

        .export__file .export__file-options {
            position: absolute;
            right: 0;

            width: 12rem;
            border-radius: .5rem;
            overflow: hidden;
            text-align: center;

            opacity: 0;
            transform: scale(.8);
            transform-origin: top right;

            box-shadow: 0 .2rem .5rem #0004;

            transition: .2s;
        }

        .export__file input:checked+.export__file-options {
            opacity: 1;
            transform: scale(1);
            z-index: 100;
        }

        .export__file .export__file-options label {
            display: block;
            width: 100%;
            padding: .6rem 0;
            background-color: #f2f2f2;

            display: flex;
            justify-content: space-around;
            align-items: center;

            transition: .2s ease-in-out;
        }

        .export__file .export__file-options label:first-of-type {
            padding: 1rem 0;
            background-color: #86e49d !important;
        }

        .export__file .export__file-options label:hover {
            transform: scale(1.05);
            background-color: #fff;
            cursor: pointer;
        }

        .export__file .export__file-options img {
            width: 2rem;
            height: auto;
        }
    </style>
</head>

<body id="body">
    <!-- <?php include('index3.php'); ?> -->
    <?php
    include('modal.php');
    ?>
    <nav>
        <div class="nav__content">

            <div class="logo"><img src="./assets/smmc.PNG" width="100" alt=""></div>

            <label for="check" class="checkbox">

                <i class="ri-menu-line"></i>

            </label>

            <input type="checkbox" name="check" id="check" />

            <ul>
                <li><a href="#" id="acceuil">acceuil</a></li>
                <li><a href="#">inventaire</a></li>
                <li><a href="#">maintenance</a></li>
                <li>
                    <a href="logout.php" onclick="return confirm('vous voulez vraiment deconnecter?')">deconnexion</a>
                </li>
            </ul>

        </div>
    </nav>
    <section class="section" id="hid">

        <div class="section__container">

            <div class="content">

                <p class="subtitle">SOCIETE DE</p>

                <h1 class="title">
                    MANUTENTION <span> MARCHANDISES<br /></span> CONVENTIONNELLES
                </h1>

                <p class="description">
                    Welcome to my web developer portfolio! I'm Manoy finaritra,a skilled and
                    creative web developer with a passion for creating beautiful,
                    responsive, and user-friendly websites. I've worked on a variety of
                    web projects, ranging from personal blogs to e-commerce platforms.
                </p>

                <div class="action__btns">
                    <button class="hire__me">Hire Me</button>
                    <button class="a" id="list">voir la liste</button>
                </div>

            </div>

            <div class="image">
                <img src="assets/profile.jpg" alt="profile" />
            </div>

        </div>

    </section>
    <div class="offcanvas offcanvas-end" style="background-color: #fff5;
    backdrop-filter: blur(7px);" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header bg-primary">
            <h5 class="offcanvas-title text-light" id="offcanvasRightLabel">exportations</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <h3 class="text-center" style="margin-top:40px; font-style:italic;">Exporter à &nbsp; &#10140;</h3>
        <div style="display:flex; justify-content: center; align-items:center; margin-top:30px; gap:50px;flex-wrap:wrap;">
            <div style="cursor:pointer;display: flex; flex-basis:30%;background-color:white;
                 height:150px; justify-content:center;align-items:center;border-radius:15px;"
                id="toPDF">
                <h1><img src="images/pdf.png" width="100" alt=""></h1>
            </div>
            <div style="cursor:pointer;display: flex; flex-basis:30%;background-color:white; height:150px;
                 justify-content:center;align-items:center; border-radius:15px;"
                id="toJSON">
                <h1><img src="images/json.png" width="100" alt=""></h1>
            </div>
            <div style="cursor:pointer;display: flex; flex-basis:30%;background-color:white;
                 height:150px; justify-content:center;align-items:center;border-radius:15px;"
                id="toEXCEL">
                <h1><img src="images/excel.png" width="100" alt=""></h1>
            </div>
            <div style="cursor:pointer;display: flex; flex-basis:30%;background-color:white;
                 height:150px; justify-content:center;align-items:center;border-radius:15px;"
                id="toCSV">
                <h1><img src="images/csv.png" width="100" alt=""></h1>
            </div>
        </div>
        <div class="offcanvas-header bg-primary" style="margin-top:48px; display:flex; justify-content:space-between;align-items:center;">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                options
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="data1" href="#">Data</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            <a href="logout.php" style="background-color:rgba(255,000,000,0.8); padding:4px; border-radius:9px;" onclick="return confirm('vous voulez vraiment deconnecter?')">
                <svg width="30px" height="30px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.75 9.874C11.75 10.2882 12.0858 10.624 12.5 10.624C12.9142 10.624 13.25 10.2882 13.25 9.874H11.75ZM13.25 4C13.25
                     3.58579 12.9142 3.25 12.5 3.25C12.0858 3.25 11.75 3.58579 11.75 4H13.25ZM9.81082 6.66156C10.1878
                      6.48991 10.3542 6.04515 10.1826 5.66818C10.0109 5.29121 9.56615 5.12478 9.18918 5.29644L9.81082 
                      6.66156ZM5.5 12.16L4.7499 12.1561L4.75005 12.1687L5.5 12.16ZM12.5 19L12.5086 18.25C12.5029 18.25 
                      12.4971 18.25 12.4914 18.25L12.5 19ZM19.5 12.16L20.2501 12.1687L20.25 12.1561L19.5 12.16ZM15.8108
                       5.29644C15.4338 5.12478 14.9891 5.29121 14.8174 5.66818C14.6458 6.04515 14.8122 6.48991 15.1892
                        6.66156L15.8108 5.29644ZM13.25 9.874V4H11.75V9.874H13.25ZM9.18918 5.29644C6.49843 6.52171 4.7655
                         9.19951 4.75001 12.1561L6.24999 12.1639C6.26242 9.79237 7.65246 7.6444 9.81082 6.66156L9.18918 
                         5.29644ZM4.75005 12.1687C4.79935 16.4046 8.27278 19.7986 12.5086 19.75L12.4914 18.25C9.08384 18.2892 
                         6.28961 15.5588 6.24995 12.1513L4.75005 12.1687ZM12.4914 19.75C16.7272 19.7986 20.2007 16.4046 20.2499 12.1687L18.7501
                          12.1513C18.7104 15.5588 15.9162 18.2892 12.5086 18.25L12.4914 19.75ZM20.25 12.1561C20.2345 9.19951 18.5016 6.52171 15.8108 5.29644L15.1892 6.66156C17.3475 7.6444 18.7376 9.79237 18.75 12.1639L20.25 12.1561Z" fill="#000000" />
                </svg>
            </a>
        </div>
    </div>
    <div class="tableau" style="display:none;" id="tableau">
        <main class="table" id="customers_table">
            <section class="table__header">
                <!-- <img src="./Pellicule Photo/smmc.PNG" width="100" alt=""> -->
                <h5 class="text-light mt-2">Materiel informatique</h5>
                <div class="input-group1">
                    <input type="search" id="search" placeholder="Search Data...">
                    <img src="images/search.png" width="100" alt="">
                </div>
                <div class="export__file">
                    <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:transparent;padding:4px;margin-right:-8px;">
                        <svg fill="#000000" height="25px" width="25px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 27.963 27.963" xml:space="preserve">
                            <g>
                                <g id="c140__x2B_">
                                    <path d="M13.98,0C6.259,0,0,6.26,0,13.982s6.259,13.981,13.98,13.981c7.725,0,13.983-6.26,13.983-13.981
			                        C27.963,6.26,21.705,0,13.98,0z M21.102,16.059h-4.939v5.042h-4.299v-5.042H6.862V11.76h5.001v-4.9h4.299v4.9h4.939v4.299H21.102z
			                    " />
                                </g>
                                <g id="Capa_1_9_">
                                </g>
                            </g>
                        </svg>
                    </button>

                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><span class="navbar-toggler-icon"></span></button> -->
                    <svg width="40px" height="40px" viewBox="0 0 24 24" style="background-color:transparent;margin-right:-9px;"
                        xmlns="http://www.w3.org/2000/svg" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <title>fenetre</title>
                        <g id="Complete">
                            <g id="sidebar-right">
                                <g>
                                    <rect id="Square-2" data-name="Square" x="3" y="3" width="18" height="18" rx="2" ry="2" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2" />
                                    <line x1="15" y1="21" x2="15" y2="3" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2" />
                                </g>
                            </g>
                        </g>
                    </svg>

                    <!-- <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div> -->
                </div>
            </section>
            <section class="table__body" id="data-table">
                <!-- <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Article</th>
                        <th>Date</th>
                        <th>Marque</th>
                        <th>Modéle</th>
                        <th>Processeur</th>
                        <th>Ram</th>
                        <th>Etat<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Etablissement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody >

                </tbody>
            </table> -->
            </section>
        </main>
    </div>
    <script>
        var parent = document.getElementById('tableau')
        var list = document.getElementById('list')
        var acceuil = document.getElementById('acceuil')
        list.onclick = function() {
            index()
            parent.style.display = "flex"

        }
        var index = function() {
            var hid = document.getElementById('hid')
            hid.style.display = "none"
        }

        acceuil.onclick = function() {
            parent.style.display = "none"
            hid.style.display = "block"
        }

        // const data = document.getElementById('data1')
        // data.onclick = function() {
        //     var table = document.getElementById('data-table')
        //     table.style.display = "none";
        //     parent()
        // }

        // var parent = function() {
        //     var div = document.createElement('div')
        //     div.id = "liste"
        //     parent.appendChild(div)
        // }


        $(document).ready(function() {
            // Soumission du formulaire pour ajouter un nouveau matériel
            $("#materielForm").on("submit", function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert("Données enregistrées avec succès !");
                        $("#data-table").html(response);
                    }
                });
            });

            // Chargement initial des données
            $.ajax({
                type: "POST",
                url: "fetch.php",
                success: function(response) {
                    $("#data-table").html(response);
                }
            });

            // Fonction pour filtrer les données
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#data-table table tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            // Fonction pour supprimer un matériel
            $(document).on("click", ".delete-btn", function() {
                var id = $(this).data("id");

                if (confirm("Voulez-vous vraiment supprimer cet élément?")) {
                    $.ajax({
                        type: "POST",
                        url: "delete.php",
                        data: {
                            id: id
                        },
                        success: function(response) {
                            alert("Matériel supprimé avec succès !");
                            $("#data-table").html(response);
                        }
                    });
                }
            });

            // Lorsqu'on clique sur le bouton Modifier
            $(document).on("click", ".edit-btn", function() {
                var id = $(this).data("id");

                // Récupérer les données du matériel à modifier
                $.ajax({
                    type: "POST",
                    url: "fetch_single.php",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        // Remplir le formulaire de modification avec les données récupérées
                        $("#edit_id").val(response.id);
                        $("#edit_article").val(response.article);
                        $("#edit_date").val(response.date);
                        $("#edit_marque").val(response.marque);
                        $("#edit_modele").val(response.modele);
                        $("#edit_processeur").val(response.processeur);
                        $("#edit_ram").val(response.ram);
                        $("#edit_etat").val(response.etat);
                        $("#edit_etablissement").val(response.etablissement);
                        // Afficher le modal de modification
                        $("#editModal").modal("show");
                    }
                });
            });

            // Soumettre le formulaire de modification via AJAX
            $("#editMaterielForm").on("submit", function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "update.php",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert("Données mises à jour avec succès !");
                        $("#data-table").html(response);
                        $("#editModal").modal("hide");
                    }
                });
            });
        });
        const search = document.getElementById('input')
        const table_headings = document.querySelectorAll('thead th')
        const table_rows = document.querySelectorAll('tbody tr')
        // 1. Searching for specific data of HTML table
        // search.addEventListener('input', searchTable);

        // function searchTable() {
        //     table_rows.forEach((row, i) => {
        //         let table_data = row.textContent.toLowerCase(),
        //             search_data = search.value.toLowerCase();

        //         row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        //         row.style.setProperty('--delay', i / 25 + 's');
        //     })

        //     document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        //         visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
        //     });
        // }
        // 2. Sorting | Ordering data of HTML table

        table_headings.forEach((head, i) => {
            let sort_asc = true;
            head.onclick = () => {
                table_headings.forEach(head => head.classList.remove('active'));
                head.classList.add('active');

                document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
                table_rows.forEach(row => {
                    row.querySelectorAll('td')[i].classList.add('active');
                })

                head.classList.toggle('asc', sort_asc);
                sort_asc = head.classList.contains('asc') ? false : true;

                sortTable(i, sort_asc);
            }
        })

        function sortTable(column, sort_asc) {
            [...table_rows].sort((a, b) => {
                    let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
                        second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

                    return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
                })
                .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
        }
        // 3. Converting HTML table to PDF

        const pdf_btn = document.querySelector('#toPDF');
        const customers_table = document.querySelector('#customers_table');
        const table = document.getElementById('table')


        const toPDF = function(customers_table) {
            const html_code = `
                <!DOCTYPE html>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <style>

            * {
                margin: 0;
                padding: 0;

                box-sizing: border-box;
                font-family: sans-serif;
            }

            @media print {

                .table,
                .table__body {
                    overflow: visible;
                    height: auto !important;
                    width: auto !important;
                }
            }
            body {
                min-height: 100vh;
                background: url(images/html_table.jpg) center / cover;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            main.table {
                width: 82vw;
                height: 90vh;
                background-color: #fff5;

                backdrop-filter: blur(7px);
                box-shadow: 0 .4rem .8rem #0005;
                border-radius: .8rem;

                overflow: hidden;
            }

            .table__header {
                width: 100%;
                height: 10%;
                background-color: #fff4;
                padding: .8rem 1rem;

                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .table__header .input-group1 {
                width: 35%;
                height: 100%;
                background-color: #fff5;
                padding: 0 .8rem;
                border-radius: 2rem;

                display: flex;
                justify-content: center;
                align-items: center;

                transition: .2s;
            }

            .table__header .input-group1:hover {
                width: 45%;
                background-color: #fff8;
                box-shadow: 0 .1rem .4rem #0002;
            }

            .table__header .input-group1 img {
                width: 2.2rem;
                height: 2.2rem;
                background-color: transparent;
            }

            .table__header .input-group1 input {
                width: 100%;
                padding: 0 .5rem 0 .3rem;
                background-color: transparent;
                border: none;
                outline: none;
            }

            .table__body {
                width: 95%;
                max-height: calc(89% - 1.6rem);
                background-color: #fffb;

                margin: .8rem auto;
                border-radius: .6rem;

                overflow: auto;
                overflow: overlay;
            }


            .table__body::-webkit-scrollbar {
                width: 0.5rem;
                height: 0.5rem;
            }

            .table__body::-webkit-scrollbar-thumb {
                border-radius: .5rem;
                background-color: #0004;
                visibility: hidden;
            }

            .table__body:hover::-webkit-scrollbar-thumb {
                visibility: visible;
            }


            table {
                width: 100%;
            }

            td img {
                width: 36px;
                height: 36px;
                margin-right: .5rem;
                border-radius: 50%;

                vertical-align: middle;
            }

            table,
            th,
            td {
                border-collapse: collapse;
                padding: 1rem;
                text-align: left;
            }

            thead th {
                position: sticky;
                top: 0;
                left: 0;
                background-color: #d5d1defe;
                cursor: pointer;
                text-transform: capitalize;
            }

            tbody tr:nth-child(even) {
                background-color: #0000000b;
            }

            tbody tr {
                --delay: .1s;
                transition: .5s ease-in-out var(--delay), background-color 0s;
            }

            tbody tr.hide {
                opacity: 0;
                transform: translateX(100%);
            }

            tbody tr:hover {
                background-color: #fff6 !important;
            }

            tbody tr td,
            tbody tr td p,
            tbody tr td img {
                transition: .2s ease-in-out;
            }

            tbody tr.hide td,
            tbody tr.hide td p {
                padding: 0;
                font: 0 / 0 sans-serif;
                transition: .2s ease-in-out .5s;
            }

            tbody tr.hide td img {
                width: 0;
                height: 0;
                transition: .2s ease-in-out .5s;
            }

            .status {
                padding: .4rem 0;
                border-radius: 2rem;
                text-align: center;
            }

            .status.delivered {
                background-color: #86e49d;
                color: #006b21;
            }

            .status.cancelled {
                background-color: #d893a3;
                color: #b30021;
            }

            .status.pending {
                background-color: #ebc474;
            }

            .status.shipped {
                background-color: #6fcaea;
            }


            @media (max-width: 1000px) {
                td:not(:first-of-type) {
                    min-width: 12.1rem;
                }
            }

            thead th span.icon-arrow {
                display: inline-block;
                width: 1.3rem;
                height: 1.3rem;
                border-radius: 50%;
                border: 1.4px solid transparent;

                text-align: center;
                font-size: 1rem;

                margin-left: .5rem;
                transition: .2s ease-in-out;
            }

            thead th:hover span.icon-arrow {
                border: 1.4px solid #6c00bd;
            }

            thead th:hover {
                color: #6c00bd;
            }

            thead th.active span.icon-arrow {
                background-color: #6c00bd;
                color: #fff;
            }

            thead th.asc span.icon-arrow {
                transform: rotate(180deg);
            }

            thead th.active,
            tbody td.active {
                color: #6c00bd;
            }

            .export__file {
                position: relative;
            }

            .export__file .export__file-btn {
                display: inline-block;
                width: 2rem;
                height: 2rem;
                background: #fff6 url(images/export.png) center / 80% no-repeat;
                border-radius: 50%;
                transition: .2s ease-in-out;
            }

            .export__file .export__file-btn:hover {
                background-color: #fff;
                transform: scale(1.15);
                cursor: pointer;
            }

            .export__file input {
                display: none;
            }

            .export__file .export__file-options {
                position: absolute;
                right: 0;

                width: 12rem;
                border-radius: .5rem;
                overflow: hidden;
                text-align: center;

                opacity: 0;
                transform: scale(.8);
                transform-origin: top right;

                box-shadow: 0 .2rem .5rem #0004;

                transition: .2s;
            }

            .export__file input:checked+.export__file-options {
                opacity: 1;
                transform: scale(1);
                z-index: 100;
            }

            .export__file .export__file-options label {
                display: block;
                width: 100%;
                padding: .6rem 0;
                background-color: #f2f2f2;

                display: flex;
                justify-content: space-around;
                align-items: center;

                transition: .2s ease-in-out;
            }

            .export__file .export__file-options label:first-of-type {
                padding: 1rem 0;
                background-color: #86e49d !important;
            }

            .export__file .export__file-options label:hover {
                transform: scale(1.05);
                background-color: #fff;
                cursor: pointer;
            }

            .export__file .export__file-options img {
                width: 2rem;
                height: auto;
            }
        </style>
        <main class="table" id="customers_table">${customers_table.innerHTML}</main>;`
            // <section id="data-table" class="table__body">${customers_table.innerHTML}</section>;
            const new_window = window.open();
            new_window.document.write(html_code);

            setTimeout(() => {
                new_window.print();
                new_window.close();
            }, 400);

        }

        pdf_btn.onclick = () => {
            toPDF(customers_table);
        }
        // 4. Converting HTML table to JSON

        const json_btn = document.getElementById('toJSON');

        const toJSON = function(table) {
            let table_data = [],
                t_head = [],

                t_headings = table.querySelectorAll('th'),
                t_rows = table.querySelectorAll('tbody tr');

            for (let t_heading of t_headings) {
                let actual_head = t_heading.textContent.trim().split(' ');

                t_head.push(actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase());
            }

            t_rows.forEach(row => {
                const row_object = {},
                    t_cells = row.querySelectorAll('td');

                t_cells.forEach((t_cell, cell_index) => {
                    const img = t_cell.querySelector('img');
                    if (img) {
                        row_object['customer image'] = decodeURIComponent(img.src);
                    }
                    row_object[t_head[cell_index]] = t_cell.textContent.trim();
                })
                table_data.push(row_object);
            })

            return JSON.stringify(table_data, null, 4);
        }

        json_btn.onclick = () => {
            const json = toJSON(customers_table);
            downloadFile(json, 'json')
        }
        // 5. Converting HTML table to CSV File

        const csv_btn = document.querySelector('#toCSV');

        const toCSV = function(table) {
            // Code For SIMPLE TABLE
            // const t_rows = table.querySelectorAll('tr');
            // return [...t_rows].map(row => {
            //     const cells = row.querySelectorAll('th, td');
            //     return [...cells].map(cell => cell.textContent.trim()).join(',');
            // }).join('\n');

            const t_heads = table.querySelectorAll('th'),
                tbody_rows = table.querySelectorAll('tbody tr');

            const headings = [...t_heads].map(head => {
                let actual_head = head.textContent.trim().split(' ');
                return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
            }).join(',') + ',' + 'image name';

            const table_data = [...tbody_rows].map(row => {
                const cells = row.querySelectorAll('td'),
                    img = decodeURIComponent(row.querySelector('img').src),
                    data_without_img = [...cells].map(cell => cell.textContent.replace(/,/g, ".").trim()).join(',');

                return data_without_img + ',' + img;
            }).join('\n');

            return headings + '\n' + table_data;
        }

        csv_btn.onclick = () => {
            const csv = toCSV(customers_table);
            downloadFile(csv, 'csv', 'customer orders');
        }

        // 6. Converting HTML table to EXCEL File

        const excel_btn = document.querySelector('#toEXCEL');

        const toExcel = function(table) {
            // Code For SIMPLE TABLE
            // const t_rows = table.querySelectorAll('tr');
            // return [...t_rows].map(row => {
            //     const cells = row.querySelectorAll('th, td');
            //     return [...cells].map(cell => cell.textContent.trim()).join('\t');
            // }).join('\n');

            const t_heads = table.querySelectorAll('th'),
                tbody_rows = table.querySelectorAll('tbody tr');

            const headings = [...t_heads].map(head => {
                let actual_head = head.textContent.trim().split(' ');
                return actual_head.splice(0, actual_head.length - 1).join(' ').toLowerCase();
            }).join('\t') + '\t' + 'image name';

            const table_data = [...tbody_rows].map(row => {
                const cells = row.querySelectorAll('td'),
                    img = decodeURIComponent(row.querySelector('img').src),
                    data_without_img = [...cells].map(cell => cell.textContent.trim()).join('\t');

                return data_without_img + '\t' + img;
            }).join('\n');

            return headings + '\n' + table_data;
        }

        excel_btn.onclick = () => {
            const excel = toExcel(customers_table);
            downloadFile(excel, 'excel');
        }

        const downloadFile = function(data, fileType, fileName = '') {
            const a = document.createElement('a');
            a.download = fileName;
            const mime_types = {
                'json': 'application/json',
                'csv': 'text/csv',
                'excel': 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            }
            a.href = `
        data:${mime_types[fileType]};charset=utf-8,${encodeURIComponent(data)}`;
            document.body.appendChild(a);
            a.click();
            a.remove();
        }
    </script>
</body>

</html>