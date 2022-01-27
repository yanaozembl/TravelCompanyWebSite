
<?php
require "bd.php";
$single = get_single_by_id($_GET['id']);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $single["title"];?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="tour.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Cairo:wght@500;700&family=Montserrat+Alternates&family=Montserrat:wght@400;500;600&family=Playfair+Display+SC&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>
<?php include "../header.php" ?>

<section class="tour">
    <div class="container">
        <div class="heading">
            <?php echo $single["title"];?>, 7 дней
        </div>
        <div class="flexRowMain">
            <div class="flexColumn" style="margin-right:50px">
                <div class="item">
                    <hr class="hr2">
                </div>
                <div class="item">
                    <div class="infoBlock">
                        <?php echo $single["text"];?>
                    </div>
                </div>
                <div class="flexRow">
                    <div class="item">
                        <div class="infoHeading">
                            Дата
                        </div>
                    </div>
                    <div class="item">
                        <div class="date">
                            <?php echo $single["date"];?>
                        </div>
                    </div>
                </div>
                <div class="flexRow">
                    <div class="item">
                        <div class="infoHeading">
                            Гид
                        </div>
                    </div>
                    <div class="item">
                        <div class="date">
                            <?php echo $single["guide"];?>
                        </div>
                    </div>
                </div>
                <div class="flexRow">
                    <div class="item">
                        <div class="infoHeading">
                            Стоимость
                        </div>
                    </div>
                    <div class="item">
                        <div class="date">
                            <?php echo $single["price"];?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flexColumnImg" style="margin-top:5px">
                <div class="flexRowImg">
                    <img src="<?php echo $single["img1"];?>" alt="1">
                    <img src="<?php echo $single["img2"];?>" alt="1">
                    <img src="<?php echo $single["img3"];?>" alt="1">
                </div>
                <div class="flexRowImg">
                    <img src="<?php echo $single["img4"];?>" alt="1">
                    <img src="<?php echo $single["img5"];?>" alt="1">
                    <img src="<?php echo $single["img6"];?>" alt="1">
                </div>
            </div>
        </div>
        <div class="heading">
            Программа тура
        </div>
        <div class="flexRowText">
            <div class="flexColumnText1" >
                <div class="item">
                    <div class="day">
                        1 день
                    </div>
                    <div class="text">
                        <?php echo $single["first"];?>
                    </div>
                </div>
                <div class="item">
                    <div class="day">
                        2 день
                    </div>
                    <div class="text">
                        <?php echo $single["second"];?>
                    </div>
                </div>
                <div class="item">
                    <div class="day">
                        3 день
                    </div>
                    <div class="text">
                        <?php echo $single["third"];?>
                    </div>
                </div>
                <div class="item">
                    <div class="day">
                        4 день
                    </div>
                    <div class="text">
                        <?php echo $single["fourth"];?>
                    </div>
                </div>
            </div>

            <div class="flexColumnText2">
                <div class="item">
                    <div class="day">
                        5 день
                    </div>
                    <div class="text">
                         <?php echo $single["fifth"];?>
                    </div>
                </div>
                <div class="item">
                    <div class="day">
                        6 день
                    </div>
                    <div class="text">
                        <?php echo $single["sixth"];?>
                    </div>
                </div>
                <div class="item">
                    <div class="day">
                        7 день
                    </div>
                    <div class="text">
                        <?php echo $single["seventh"];?>
                    </div>
                </div>
              
            </div>

        </div>
        <div class="heading">Оставьте заявку</div>
        <div class="form">
            <form action="sendmail.php" method="POST" id="form" class="form__body">
                <div class="form__item">
                    <label for="formName">Название тура:</label>
                    <select name="name" id="formName" class="form_select">
                        <option value="Загадочная Исландия">Загадочная Исландия</option>
                        <option value="Новый год в Исландии">Новый год в Исландии</option>
                        <option value="Живописные водопады">Живописные водопады</option>
                        <option value="Страна кристальных льдов">Страна кристальных льдов</option>
                    </select>
                </div>

                <div class="form__item">
                    <label for="formCount">Количество человек:</label>
                    <input type="text" id="formCount" name="count" class="form__input">
                </div>

                <div class="form__item">
                    <label for="formCustomer">Контактное лицо:</label>
                    <input type="text" id="formCustomer" name="customer" class="form__input _req">
                </div>

                <div class="form__item">
                    <label for="formEmail">Электронная почта:</label>
                    <input type="text" id="formEmail" name="email" class="form__input _req">
                </div>

                <div class="form__item">
                    <label for="formTel">Телефон:</label>
                    <input type="text" id="formTel" name="tel" class="form__input">
                </div>

                <input type="checkbox" id="formAgreement" name="agreement" required>
                <label for="formAgreement" >Согласен(-на) на обработку персональных данных</label>

                <div class="form__item">
                    <button type="submit" class="form__button">Отправить заявку</button>
                </div>
            </form>
        </div>     
    </div>
</section>
<?php include "../footer.php"?>
</body>
</html>