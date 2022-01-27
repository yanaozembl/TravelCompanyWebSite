<?php
include "index2.php";
$result=mysqli_query($connect, "SELECT * FROM `main`");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Montserrat+Alternates&family=Montserrat:wght@400;500;600&family=Playfair+Display+SC&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    </head>

<body>
    <header id="header" class="header">
        <div class="container">
            <div class="nav">
                <img src="img/logo.svg" alt="logo">
                <ul class="menu">
                    <li>
                        <a href="index.php">Все туры</a>
                        <hr class="hr1">
                    </li>

                    <li>
                        <a href="country/country.php">О стране</a>
                    </li>

                    <li>
                        <a href="contacts/contacts.php">Контакты</a>
                    </li>
                </ul>
                <a href="tel:+375333920207" class="tel">+375-33-392-02-07
                </a>
            </div>
            <div class="nav2">
                <div class="headText1 _anim-items">Открой для себя Новую Исландию</div>
                <div class="headText2">
                    Авторские семидневные туры по экзотическим уголкам Исландии от Яны Озембловской
                </div>
                <div class="nav3">
                    <button class="btn" onClick="document.getElementById('applicate').scrollIntoView({behavior: 'smooth'})" >
                        Оставить заявку
                    </button>
                    <a href="video/video.php">
                        <img src="img/iconPlay .svg" alt="Пуск">
                    </a>
                    <div class="headText3">
                        Посмотрите
                        видео-отчет
                        2019-2020
                    </div>
                </div>
            </div>
    </header>
        <script src="animate.js"></script>
    <section class="tour">
        <div class="container">
            <div class="tourText1">
                Туры в Исландию
            </div>
            <hr class="hr2">
            <div class="tourFlexBox">
                <div class="tourBar">
                    <?php
                    while($items=mysqli_fetch_assoc($result))
                    {
                    ?>
                    <div id="item<?php echo $items['id'];?>" class="items" >
                        <div class="heading">
                            <a href="tour/tour.php?id=<?php echo $items['id'];?>">
                                <?php echo $items['title'];?>
                            </a>
                        </div>
                        <div class="tours">
                            <img src="img/<?php echo $items['image'];?>" alt="tour1">
                            <div class="flexColumn">
                                <div class="infoBlock">
                                    <?php echo $items['text'];?>
                                </div>
                                <div class="infoHeading">
                                    Даты
                                </div>
                                <div class="date">
                                    <?php echo $items['date'];?>
                                </div>
                                <div class="flexRow">
                                    <div class="infoHeading">Стоимость</div>
                                    <div class="infoHeading">от
                                    <span class="changePrice">
                                        <?php echo $items['price'];?>€
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                    <div class="sortBar">

                        <div class="largeText">
                            Валюта
                        </div>
                        
                        <input type="checkbox" id="one" name="currency" onchange="fun1()">
                        <label for="one">Рубли</label>
                        
                        <hr class="hr4">
                        
                        <div class="largeText">
                            Сезон
                        </div>
                        <div>
                        <input type="radio" id="three" name="season"  onclick="fun3(this) ">
                        <label for="three">Зима</label>
                        <input type="radio" id="four" name="season" onclick="fun4(this)"
                         >
                        <label for="four">Весна</label>
                        <input type="radio" id="five" name="season" onclick="fun5(this)" 
                        >
                        <label for="five">Лето</label>
                        </div>
                        
                        <hr class="hr4">

                        <form method="GET">
                         <div class="largeText">
                            Цена
                        </div>
                        <label for="price_from">от
                            <input type="text" id="price_from" name="price_from" value="3999" size="2">
                        </label>
                        <label for="price_to">до
                            <input type="text" id="price_to" name="price_to" value="9999" size="2">
                        </label>
                        <input type="button" id="button" value="Search" onclick="price()">
                        </form>
                        
                        <hr class="hr4">

                            <div class="lastText">Найдено туров: 
                                <span id="last" class="last">                            
                                    <?php 
                                        $data_count = mysqli_num_rows($result);       
                                        echo $data_count; ?>
                                </span>
                            </div>
                    </div>
            </div>
        </div>
        <script src="sortBar.js"></script>        
        <div class="application" id="applicate">
            <div class="container">
                <div class="flexRow">
                    <div class="flexColumn">
                        <div class="appText1">
                            Оставьте заявку
                            на бесплатную
                            консультацию
                        </div>
                        <div class="appText2">Мы перезвоним вам в ближайшее время</div>
                    </div>
                    <form action="sendmail_index.php" method="POST" id="form" class="form__body">
                        <div class="flexColumn">
                            <input type="text" id="name" name="Name" class="appBtn1" placeholder="Имя">
                            <input type="text" id="name" name="Tel" class="appBtn2" placeholder="Телефон">
                                 <button type="submit" class="btnMain">Отправить заявку</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
        <?php include "footer.php"?>
</body>

</html>