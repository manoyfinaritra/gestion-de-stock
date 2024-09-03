

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navigation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <style>
        .slide-color-effect {
            position: relative;
            overflow: hidden;
            /* Assure que le texte ne dépasse pas du conteneur */
        }

        .slide-color-effect h3 {
            position: relative;
            display: inline-block;
            background: linear-gradient(90deg, #ffffff 0%, #00bfff 50%, #ff4500 100%);
            background-size: 300% 100%;
            /* La taille du dégradé pour l'animation */
            color: transparent;
            /* Masquer la couleur du texte pour montrer le dégradé */
            -webkit-background-clip: text;
            /* Pour les navigateurs WebKit */
            background-clip: text;
            /* Pour les autres navigateurs */
            animation: slideColor 4s linear infinite;
        }

        @keyframes slideColor {
            0% {
                background-position: 0% 0%;
            }

            100% {
                background-position: 100% 0%;
            }
        }



        body {
            background: url(Pellicule\ Photo/fond1.jpg) no-repeat;
            background-size: cover;
            height: 100vh;
            position: relative;
        }

        body::before {
            background-color: rgba(0, 0, 0, 0.6);
            content: "";
            top: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            left: 0;
            z-index: -1;
        }

        .navbar {
            background-color: #fff;
            height: 80px;
            margin: 20px;
            border-radius: 16px;
            padding: 0.6rem;
        }

        .navbar-brand {
            font-weight: 500;
            color: #009970;
            font-size: 24px;
            transition: 0.3s color
        }

        .login-button {
            background-color: #009970;
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3 background-color;
        }

        .login-button:hover {
            background-color: #00b383;
        }

        .navbar-toggler {
            border: none;
            font-size: 1.5rem;
        }

        .navbar-toggler:focus,
        .btn-close:focus {
            box-shadow: none;
            outline: none;

        }

        .nav-link {
            color: #666777;
            font-weight: 500;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #000;
        }

        @media(min-width: 991px) {
            .nav-link::before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 0;
                height: 2px;
                background-color: #009970;
                visibility: hidden;
                transition: 0.3s ease-in-out;
            }

            .nav-link:hover::before,
            .nav-link.nav-link.active::before {
                width: 100%;
                visibility: visible;
            }
        }


        .form-control {
            background-color: #bbb;
        }
    </style>
</head>

<body class="body">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#"><img src="./Pellicule Photo/smmc.PNG" width="100" alt=""></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a class="navbar-brand me-auto" href="#"><img src="./Pellicule Photo/smmc.PNG" width="100" alt=""></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-2" aria-current="page" href="navbar.php">acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2"
                                href="https://www.aivp.org/aivp/nos-adherents-et-nous/annuaire/societe-de-manutention-des-marchandises-conventionnelles/">
                                apropos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">profil</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="logout.php" class="login-button" onclick="return confirm('vous voulez vraiment deconnecter?')">deconnexion</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>