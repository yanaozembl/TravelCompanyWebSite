<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>О стране</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="contacts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Playfair+Display+SC&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header id="header" class="header">
        <div class="container">
            <div class="nav">
                <img src="../img/logo.svg" alt="logo">
                <ul class="menu">
                    <li>
                        <a href="../index.php">Все туры</a>
                    </li>

                    <li>
                        <a href="../country/country.php">О стране</a>
                    </li>

                    <li>
                        <a href="contacts.php">Контакты</a>
                        <hr class="hr1">
                    </li>
                </ul>
                <a href="tel:+375333920207" class="tel">+375-33-392-02-07
                </a>
            </div>
            <div class="headText1">
                Водопад Годафосс
            </div>
        </div>
    </header>
    <section class="contacts">
        <div class="container">
            <p class="line"><span>Контакты</span></p>
            <div class="contactsflexRow">
                <div class="flexColumn firstAnimate">
                    <div class="item">
                        <img src="../img/time.png" alt="time">
                    </div>
                    <div class="item" style="font-size: 23px;">Время</div>
                    <div class="item">
                        Пн-Пт: с 10:00 до 18:00
                        <br />
                        Сб-Вс: выходные

                    </div>
                    <hr class="hr2">
                    <div class="item">
                        Особый режим<br />
                        работы в <br />праздничные дни
                    </div>
                </div>

                <div class="flexColumn secondAnimate">
                    <div class="item">
                        <img src="../img/adress.png" alt="time">
                    </div>
                    <div class="item" style="font-size: 23px;">Адрес</div>
                    <div class="item">
                        Минск, ул.Первомайская, д. 1, оф. 415

                    </div>
                    <hr class="hr2">
                    <div class="item">
                        Технический офис: Гродно, ул. Советская, д. 5, оф. 333
                    </div>
                </div>

                <div class="flexColumn thirdAnimate">
                    <div class="item">
                        <img src="../img/tel.png" alt="time">
                    </div>
                    <div class="item" style="font-size: 23px;">Связь с нами</div>
                    <div class="item">
                        +375 44 500 70 50<br />
                        8029 110 33 30

                    </div>
                    <hr class="hr2">
                    <div class="item">
                        Телефон экстренной помощи в поездке
                        +375 44 800 14 14
                        Viber
                    </div>
                </div>
            </div>
            <div class="heading">
                Офис в Минске на карте
            </div>
            <div class="map">
                <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8b75f7dcf63a2d57142bd4ac3a096ffff5bc828bb380f961d53ef9025ea782eb&amp;width=600&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>
    <script src="animateContact.js"></script>
    <?php include "../footer.php"?>
</body>
</html>