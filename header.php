<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/slinky.min.css">
    <link rel="stylesheet" href="css/style.css?t=<?php echo(microtime(true) . rand()); ?>"> 
</head>
<body>
<div class="container-fluid">
    <header class="header" id="header-menu">
         <!-- <div class="header__background"> -->
            <div class="header__form">
                <form action="" class="search" method="get">
                    <input type="search" name="search" class="search-input" placeholder="Поиск">
                    <button type="submit" class="search-button"></button>
                </form>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span>Вход</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <form action="" method="post" class="entrance">
                            <p class="h4">Личный кабинет</p>
                            <div class="form_filling">
                                <p>Ваш E-mail</p>
                                <input type="email" class="form-control" placeholder="Введите почту" name="email"> </div>
                            <div class="form_filling">
                                <p>Пароль</p>
                                <input type="password" class="form-control" placeholder="Пароль" name="password"> </div>
                            <div class="form_filling">
                                <input type="checkbox" id="checkbox">
                                <label for="checkbox">Запомнить меня</label>
                            </div>
                            <div class="form_filling">
                                <button type="submit" class="btn btn_bg">Войти</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                $items = array(
                    array(
                        'way' => 'Registration',
                        'lnscription' => 'Регистрация',
                    ),
                );
            ?>
            </div>

            <div class="header__logo">
                <a href="/" class="logo-link">
                    <img src="photo/logo.svg" class="logo-img" width="116" height="143" alt="">
                    <span class="logo-slang">Настольные игры</span>
                </a>
            </div>
            <div class="header__menu menu">
                <div class="menu__burger" id="burger-open">
                    <span class="burger-open"></span>
                </div>
                <nav class="menu__body" id="menu-body">
                <?php
                $items = array(
                    array(
                        'way' => 'main',
                        'lnscription' => 'Главная',
                    ),
                    array(
                        'lnscription' => 'Игры',
                        'class' => 'menu-nesting',
                        'lever' => array(
                            array(
                                'lnscription' => 'Шахматы',
                                'lever' => array(
                                    array(
                                        'lnscription' => 'Классчесские',
                                        'way' => 'classical-chess',
                                    ),
                                    array(
                                        'lnscription' => 'Фишер',
                                        'way' => 'phisher-chess',
                                    ))
                            ),
                            array(
                                    'lnscription' => 'Шашки',
                                    'lever' => array(
                                            array(
                                                    'lnscription' => 'Русские',
                                                    'way' => 'russian-checkers',
                                            ),
                                            array(
                                                    'lnscription' => 'стоклеточные',
                                                    'way' => 'hundred-cellular-checkers',
                                            ),
                                        array(
                                                    'lnscription' => 'Поддавки',
                                                    'way' => 'giveaway-chess-checkers',
                                            ),
                                        array(
                                                    'lnscription' => 'Рэндзю',
                                                    'way' => 'renju-checkers',
                                            ),
                                    )
                            ),
                            array(
                                'lnscription' => 'Нарды',
                                'lever' => array(
                                    array(
                                        'lnscription' => 'Короткие нарды',
                                        'way' => 'short-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Длинные нарды',
                                        'way' => 'long-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Американка',
                                        'way' => 'american-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Бешеный гюльбар',
                                        'way' => 'mad-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Триктрак',
                                        'way' => 'triktrak-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Матадор',
                                        'way' => 'matador-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Турецкий триктрак',
                                        'way' => 'turkish-triktrak-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Тбилисские нарды',
                                        'way' => 'tbilisi-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Русский триктрак',
                                        'way' => 'russian-triktrak-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Испанские нарды (Погоня)',
                                        'way' => 'spanish-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Змей',
                                        'way' => 'dragon-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Жакет',
                                        'way' => 'jacket-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Единичка-Двоечка',
                                        'way' => 'edinichka-dvoyechka-backgammon',
                                    ),
                                    array(
                                        'lnscription' => 'Голландский триктрак',
                                        'way' => 'dutch-triktrak-backgammon',
                                    ),
                                )
                            ),
                            )
                    ),
                    array(
                        'way' => '?page=#',
                        'lnscription' => 'Обучение',
                    ),
                    array(
                        'way' => '?page=#',
                        'lnscription' => 'Турнир',
                    ),
                    array(
                        'way' => '?page=#',
                        'lnscription' => 'Правила',
                    ),
                );
                echo menu($items);
                ?>
                </nav>
            </div>
         <!-- </div> -->
    </header>

<main>
    <div class="content">