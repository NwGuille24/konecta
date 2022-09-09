<html>

<head>
    <?php
    include("./head.php");
    ?>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Konecta</title>


    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {

            background-color: #eee;
        }

        .navbar-nav>li>a {

            text-transform: uppercase;
            font-size: 14px;
            margin-right: 20px;
            color: #fff;
        }


        .navbar-toggler {
            padding: .20rem .50rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid white;

        }

        .nav-link {

            color: #fff !important;
        }


        .wrapper {
            width: 100%;
            position: absolute;
            height: 100%;
            background-color: #9e9e9e;
            clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 71% 100%);
            transition: 1s all;
        }

        .navbar-brand {

            color: #fff;
            font-family: 'Allerta Stencil', sans-serif;
            margin-bottom: 4px;
            font-size: 27px;
        }

        .navbar-red:hover .wrapper {

            clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 65% 100%);

        }

        .navbar-brand:hover {

            color: #fff;

        }

        .navbar-red {

            background-color: #111;
            color: #fff;

        }

        .all-show {

            z-index: 10;
        }
    </style>
</head>

<body className='snippet-body'>
    <nav class="navbar navbar-expand-lg navbar-red navbar-dark">
        <div class="wrapper">

        </div>
        <div class="container-fluid all-show">
            <a class="navbar-brand" href="#">Cafeteria </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0" style="width: 95%;">
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ventas.php">Ventas</a>
                    </li>
                    <li class="nav-item" style="float: right;list-style-type: none;text-align: right;margin-left: auto;">
                        <a class="nav-link" dissabled> Usuario </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>


</body>

</html>