<?php 
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}

if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];

?>
<?php ignore_user_abort(true); error_reporting(0);
include './meldonium/config.php';
$config = getConfig();
$page = 'index';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <?php include 'configs.php'; ?>
         <?php if (!empty($config)) include "./meldonium/include-head.php" ?>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=480">
    <title>Уникальный развивающий набор! Ускорит развитие ребенка! </title>
    <meta name="keywords" content="Магнитный пазл, деревянный пазл, магнитная деревянная доска для рисования,развивающая игрушка,вундеркинд,игрушка">
    <meta name="description" content="Уникальный развивающий набор! Ускорит развитие ребенка!">
    <link rel="stylesheet" href="static\land\css\reset.css">
    <link rel="stylesheet" href="static\land\fonts\Montserrat\Montserrat.css">
    <link rel="stylesheet" href="static\land\js\slider\slick-1.8.0\slick.css">
    <link rel="stylesheet" href="css\settings.css">
    <link rel="stylesheet" href="css\style.css">



</head>
<body>
                                   <?php include 'configs.php'; ?>
               <?php if (!empty($config)) include "./meldonium/include-body-start.php" ?>
<!--wrap-->
<div class="wrap">

    <!--offer-->
    <section class="offer">
        <div class="title">
            <h1>магнитный пазл с доской для рисования</h1>
            <h2>Веселая&nbsp;ферма</h2>
        </div>
        <div class="sale">скидка <b>-<?php echo $skidka; ?>%</b></div>
        <div class="bullet">
            <h4>Обучение в игровой форме!</h4>
            <ul>
                <li>
                    <img src="img\bullet-im1.jpg" alt="">
                    <p>Для игры</p>
                </li>
                <li>
                    <img src="img\bullet-im2.jpg" alt="">
                    <p>Для обучения <span>и творчества</span></p>
                </li>
                <li>
                    <img src="img\bullet-im3.jpg" alt="">
                    <p>Натуральное<span>дерево</span></p>
                </li>
            </ul>
        </div>
        <!--timer-->
        <div class="timer clrfix">
            <div class="timer-box"></div>
        </div>
        <!--/timer-->
        <!--price-->
        <div class="price clrfix">
            <div class="item">
                <p>Обычная цена:</p>
                <div class="value"><span><?php echo $old_price; ?></span><i>грн.</i></div>
            </div>
            <div class="item">
                <p>Цена по акции:</p>
                <div class="value"><span><?php echo $new_price; ?></span><i>грн.</i></div>
            </div>
        </div>
        <!--/price-->
        <a href="#order" class="button-m">Заказать сейчас</a>
        <div class="stock">Осталось <b>19</b> наборов по акции</div>
        <div class="bullet">
               <h4>Набор "Рисуй светом" в ПОДАРОК!</h4> 
        </div>
    </section>
    <!--/offer-->

    <!--<img class="image" src="img/photo-big.jpg" alt="">  -->
    <!--b1-->
    <section class="b1">
        <h2 class="title">УНИВЕРСАЛЬНАЯ ТВОРЧЕСКАЯ ИГРУШКА<span>ВЕСЕЛАЯ ФЕРМА</span></h2>
        <div class="desc">
            <img class="image" src="img\b1-im1.jpg" alt="">
            <p style="text-align: justify;">
                «Веселая ферма» - прекрасная универсальная творческая игрушка, совмещающая в себе развлекающие, развивающие и образовательные функции.
            </p>

            <p style="text-align: justify;">
                Играя с ней, малыш в непринужденной форме узнает, какие бывают домашние животные, изучит их части тела (голова, хвост, туловище, ноги и т.д.). Придумывая разные комбинации, игрушка даст первое представление о моделировании.
            </p>
             <img class="mini" src="img\tov-2.jpg" alt="">
             <p style="text-align: justify;">
                Магнитная игра «Веселая ферма» - это деревянная коробка с двухсторонней крышкой. На стороне с магнитной белой доской дети могут составлять различные сценки с магнитными фигурками, писать или рисовать маркером; черная доска предназначена
                    для рисования мелом, написания заметок.
            </p>
        </div>
       
        
                <h2 class="title">Посмотрите видео:</h2> 
                <div style="width:100%;max-width:480px;margin:0 auto;padding-bottom:50px">

                                                            <div class="video_block" style="width: 480px; height: 280px;">
                <div class="youtube" style="width: 100%; height: 100%;" id="8WHMNWJJVs8"></div>
            </div>
                </div> 
    </section>
    <!--/b1-->

    <!--b2-->
    <section class="b2">
        <h2 class="title">Используйте набор <br> <span>для</span></h2>
        <!--benefit_list-->
        <div class="benefit_list">
            <!--item-->
            <div class="item">
                <div class="txt">
                    <img src="img\benefit-im1.jpg" alt="">
                    <h4>Рисования</h4>
                    <p>
                        На черной доске можно рисовать сухим мелом. Дайте ребенку свободу для воображения и  развития навыков рисования. Все нарисованное легко стирается губкой.
                    </p>
                </div>
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <div class="txt">
                    <img src="img\benefit-im2.jpg" alt="">
                    <h4>Обучения</h4>
                    <p>
                        На белой доске можно учиться писать цифры и буквы, решать простые примеры, писать слова. Все написанное легко стирается ластиком. И конечно же можно рисовать!
                    </p>
                </div>
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <div class="txt">
                    <img src="img\benefit-im3.jpg" alt="">
                    <h4>Игры</h4>
                    <p>
                       На белой магнитной стороне дети могут поиграть в пазлы с магнитом. Вдохновите детское творчество и фантазию.
Отличная игрушка для дошкольника. Игрушка помогает изучать цвета, математику, формы и т.п. Хорошо развивает координацию рук и глаз.
                    </p>
                </div>
            </div>
            <!--/item-->
			<!--item-->
         <!-- <div class="item">
                <div class="txt">
                    <img src="img/benefit-im4.jpg" alt="">
                    <h4>Возрастное ограничение</h4>
                    <p>
                       Важно! Мелкие детали. Есть опасность попадания в дыхательные пути. Детям до 3х лет использовать строго под присмотром взрослых.
                    </p>
                </div>
            </div> --> 
            <!--/item-->
        </div>
        <!--/benefit_list-->
        <a href="#order" class="button-m">Заказать сейчас</a>
        <div class="stock">Осталось <b>19</b> наборов по акции</div>
    </section>
    <!--/b2-->

    <!--characteristic-->
    <section class="characteristic">
        <h2 class="title">Комплект<br> <span>поставки</span></h2>
        <div class="top_text">

        </div>
        <div class="box">

            <div class="slider_photo">
                <div class="item"><img src="img\slide1.jpg" alt=""></div>

            </div>

            <ul>
                <li><b>Деревянная коробка</b> <span>1 шт</span></li>
                <li><b>Двухсторонняя доска <br>для мела и маркера</b> <span>1 шт</span></li>
                <li><b>Фигурки из магнитного <br>ламинированного картона</b> <span>100 шт</span></li>
                <li><b>Мелки для черной доски</b> <span>3 шт.</span></li>
                <li><b>Маркер для белой доски</b> <span>1 шт</span></li>
                <li><b>Губка для доски</b> <span>1 шт</span></li>
                <li><b>Книга с идеями для творчества</b> <span>1 шт</span></li>
                <li><b>Набор "Рисуй светом"</b> <span>бесплатно</span></li> 
            </ul>
          <!--  <div class="slider_photo">
                <div class="item"><img src="img/slide111.jpg" alt=""></div>

            </div> -->
            

        </div>
<br>
         <h2 class="title">Набор "Рисуй светом" в <span>ПОДАРОК!</span></h2>
                <div style="width:100%;max-width:480px;margin:0 auto;padding-bottom:50px">

                                    <div class="video_block" style="width: 480px; height: 280px;">
                <div class="youtube" style="width: 100%; height: 100%;" id="oJyqrf4PO4g"></div>
            </div>
                </div> 
    </section> 
     <!--characteristic-->


     <section class="characteristic">
        <h2 class="title"> <span>Фотогалерея</span></h2>


        <div class="slider_photo">
                <div class="item"><img src="img\slide1.jpg" alt=""></div>
                <div class="item"><img src="img\slide2.jpg" alt=""></div>
                <div class="item"><img src="img\slide3.jpg" alt=""></div>
                <div class="item"><img src="img\slide4.jpg" alt=""></div>
                <div class="item"><img src="img\slide5.jpg" alt=""></div>
                <div class="item"><img src="img\slide7.jpg" alt=""></div>
            </div>



    </section>







    <!--reviews-->
    <section class="reviews">
        <h2 class="title">Отзывы наших <span>покупателей</span></h2>
        <!--slider-->
        <div class="slider">
            <!--item-->
            <div class="item">
                <div class="photo">
                    <img src="img\rev-im1.jpg" alt="">
                </div>
                <div class="ava">
                    <img src="img\rev-ava1.jpg" alt="">
                </div>
                <h4>Екатерина Якунина, 24 года</h4>
                <p>
            "Мой ребенок целыми днями может играть в свой набор, я обожаю когда он рисует истории, детализирует, придумывает персонажей... даже разговаривает иногда сам с собой ну фантазёр же!!! Есть один хороший метод - убрать на время игру, чтобы потом влюбиться в нее заново!
            Но тут тот самый случай, когда он проверяет ее наличие и убирать не разрешает. Мы в машину часто берем коробочку, в комплекте и магнитная доска и меловая и маркер и спонж и множество магнитных деталей!"
                </p>
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <div class="photo">
                    <img src="img\rev-im2.jpg" alt="">
                </div>
                <div class="ava">
                    <img src="img\rev-ava2.jpg" alt="">
                </div>
                <h4>Иван Ивазов, 32 года</h4>
                <p>
            "Мы с женой долго мучились - не могли научить дочку писать слова и буквы. Набор нам очень помог - сложила дочка из магнитов корову, говорим: пиши "корова". Так по-тихоньку она не только все слова писать научилась, но еще и читать. Класс!"
                </p>
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <div class="photo">
                    <img src="img\rev-im3.jpg" alt="">
                </div>
                <div class="ava">
                    <img src="img\rev-ava3.jpg" alt="">
                </div>
                <h4>Анна Воробицкая, 25 лет</h4>
                <p>
            "Покажу, что нравится Никите последнее время: вот такой набор "Счастливая Ферма". Это такая деревянная доска, на одной стороне можно писать-рисовать маркерами и стирать, другая сторона - меловая. Все фигурки
            - магниты, позволяют создавать разные истории, последовательности (из цифр), фигуры животных (даже есть книжечки- подсказки). Казалось бы, простая вещь, а занимает ребенка отлично!"
 </p>
            </div>
            <!--/item-->
        </div>
        <!--/slider-->
    </section>
    <!--/reviews-->

    <!--order_info-->
    <section class="order_info">
        <h2 class="title"><span>Как сделать заказ?</span></h2>
        <ul>
            <li>
                <div class="item">
                    <p>Оставляете заявку на нашем сайте</p>
                </div>
            </li>
            <li>
                <div class="item">
                    <p>Менеджер уточняет детали заказа</p>
                </div>
            </li>
            <li>
                <div class="item">
                    <p>Доставляем заказ в течение 1-3 дней</p>
                </div>
            </li>
            <li>
                <div class="item">
                    <p>Оплачиваете заказ при получении</p>
                </div>
            </li>
        </ul>
        <!--guarantees-->
        <div class="guarantees">
            <div class="txt">
                <img src="img\guarantees-icon.png" alt="">
                <h4>Гарантия магазина</h4>
                <p style="text-align: justify;">
                Набор соответствует всем стандартам качества и безопасности. Перед отправкой мы тщательно проверяем товар на предмет заводского брака и дефектов. 
                Также мы соблюдаем не только законы, но и человеческие отношения, поэтому при возникновении претензий со стороны покупателя, мы решим проблему в кратчайшие сроки.    
                </p>
                <h4 class="line">Доставка</h4>
                <p style="text-align: justify;">Доставка осуществляется Новой почтой. Стоимость доставки от 40 грн.</p>
            </div>
        </div>
        <!--/guarantees-->
    </section>
    <!--/order_info-->


    <!--offer-->
    <section class="offer bottom">
        <div class="title">
            <h1>магнитный пазл с доской для рисования</h1>
                        <h2>Веселая&nbsp;ферма</h2>
        </div>
        <div class="sale">скидка <b>-<?php echo $skidka; ?>%</b></div>
        <div class="bullet">
           <h4>Обучение в игровой форме!</h4>
        </div>
        <!--timer-->
        <div class="timer clrfix">
            <div class="timer-box"></div>
        </div>
        <!--/timer-->
        <div class="bullet">
         <h4>Набор "Рисуй светом" в ПОДАРОК!</h4> 
        </div>
        <!--price-->
        <div class="price clrfix">
            <div class="item">
                <p>Обычная цена:</p>
                <div class="value"><span><?php echo $old_price; ?></span><i>грн.</i></div>
            </div>
            <div class="item">
                <p>Цена по акции:</p>
                <div class="value"><span><?php echo $new_price; ?></span><i>грн.</i></div>
            </div>
        </div>
        <!--/price-->
        <div class="stock">Осталось <b>19</b> наборов по акции</div>
        <!--m1-form-->
        <form class="m1-form" id="order" action="thankyou.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
            <input class="field name" type="text" name="name" placeholder="Введите имя" autocomplete="off" required="">
            <input class="field phone" type="tel" name="phone" placeholder="Введите телефон" autocomplete="off" required="">
            <button class="button-m">Заказать сейчас</button>
        </form>
        <!--/m1-form-->
        <div class="private">
            <span>Полностью конфиденциально.</span>
            Ваши данные не будут переданы третьим лицам.
        </div>
    </section>
    <!--/offer-->

    <!--footer-->
    <footer class="footer">
        <p>
            <a href="politics.html" target="_blank">Политика&nbsp;конфиденциальности</a>
        </p>
		<p>
            <a href="soglashenie.html" target="_blank">Контакты и публичная офферта</a>
        </p>
    </footer>
    <!--/footer-->
</div>
<!--/wrap-->
<script src="static\js\jquery.js" type="text/javascript"></script>

<script type="text/javascript" src="js/previewYouTube.js"></script>

<script src="static\land\js\slider\slick-1.8.0\slick.min.js"></script>
<script src="js\init.js"></script>
<script src="js/maskedinput.js"></script>
<link rel="stylesheet" type="text/css" href="static\fonts\roboto.css">


<?php if (!empty($config)) include "./meldonium/include-body-end.php" ?>
</body>
</html>
