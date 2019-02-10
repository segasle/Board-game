<section>
    <div class="menu">
        <?php

        $items = array(
            array(
                'way' => 'main',
                'lnscription' => 'Главная',
            ),
            array(
                'lnscription' => 'Игры',
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
        echo menu($items);?>
        <div class="pull-right">
            <form action="" class="search" method="get">
                <input type="search" name="search" placeholder="Поиск">
                <button type="submit" class="search"></button>
            </form>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Вход</button>
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
            echo menu2($items);?>
    </div>
</section>
<section>
    <div class="content">