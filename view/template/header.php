<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?action=main">aCars</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li><a href="index.php?action=main">Главная</a></li> -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Audi<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="submenu-toggle">
                                <a href="#">По двигателям<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=audi-motor-min">От наименьшего объема</a></li>
                                    <li><a href="index.php?action=audi-motor-max">От наибольшего объема</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="submenu-toggle">
                                <a href="#">По цене<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=audi-price-min">От дешевых</a></li>
                                    <li><a href="index.php?action=audi-price-max">От дорогих</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>

                            <li class="submenu-toggle">
                                <a href="#">По типу топлива<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=audi-petrol">Бензин</a></li>
                                    <li><a href="index.php?action=audi-diesel">Дизель</a></li>
                                    <li><a href="index.php?action=audi-gas">Газ</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?action=audi-all">Все модели Audi</a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">BMW<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="submenu-toggle">
                                <a href="#">По двигателям<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=bmw-motor-min">От наименьшего объема</a></li>
                                    <li><a href="index.php?action=bmw-motor-max">От наибольшего объема</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="submenu-toggle">
                                <a href="#">По цене<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=bmw-price-min">От дешевых</a></li>
                                    <li><a href="index.php?action=bmw-price-max">От дорогих</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>

                            <li class="submenu-toggle">
                                <a href="#">По типу топлива<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=bmw-petrol">Бензин</a></li>
                                    <li><a href="index.php?action=bmw-diesel">Дизель</a></li>
                                    <li><a href="index.php?action=bmw-gas">Газ</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?action=bmw-all">Все модели BMW</a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">VW<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="submenu-toggle">
                                <a href="#">По двигателям<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=vw-motor-min">От наименьшего объема</a></li>
                                    <li><a href="index.php?action=vw-motor-max">От наибольшего объема</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="submenu-toggle">
                                <a href="#">По цене<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=vw-price-min">От дешевых</a></li>
                                    <li><a href="index.php?action=vw-price-max">От дорогих</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>

                            <li class="submenu-toggle">
                                <a href="#">По типу топлива<span class="caret"></span></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a href="index.php?action=vw-petrol">Бензин</a></li>
                                    <li><a href="index.php?action=vw-diesel">Дизель</a></li>
                                    <li><a href="index.php?action=vw-gas">Газ</a></li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?action=vw-all">Все модели VW</a></li>
                        </ul>
                    </li>



                    <li><a href="index.php?action=carcase-add">AddCarcase</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>