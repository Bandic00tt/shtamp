<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <a href="/">
                        <i class="fa fa-cogs fa-3x"></i>
                    </a>
                    <br>
                    <div class="logo-title">СпецТехОснастка</div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <p class="header-desc">Проектирование и изготовление нестандартного оборудования
                            (штампы, инструменты) по техническому заданию заказчика</p>
                    </div>
                    <div class="col-md-5">
                        <div class="header-contacts">
                            <table>
                                <tr>
                                    <td>
                                        <div class="go-to-youtube-channel">
                                            <a href="http://www.youtube.com/channel/UCXCXObdaAxDywwo1GNGw9qA" target="_blank">
                                                <img src="/img/YouTube-logo.png" alt="Канал YouTube">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        т. 8 (8352) 36-62-62 <br>
                                        <a href="mailto:shtamp-21@mail.ru">shtamp-21@yandex.ru</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-menu-wrapper clearfix">
                            <ul class="top-menu">
                                <li><a href="/">Главная</a></li>
                                <li><a href="#">Продукция</a></li>
                                <li><a href="/technologies">Технологии</a></li>
                                <li><a href="/contact">Контакты</a></li>
                                <li><a href="/novelties">Новинки</a></li>
                                <li><a href="#">Реквизиты</a></li>
                                <!--                        <li><a href="/catalog">Каталог</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="sidebar">
                <ul class="left-menu">
                    <li><a href="/catalog">Каталог</a></li>
                    <li>
                        <a href="#">Ювелирные штампы и приспособления</a>
                        <ul>
                            <!--
                            <li><a href="#">Штампы ювелирных цепочек и браслетов</a></li>
                            <li><a href="#">Штампы ювелирные</a></li>
                            <li><a href="#">Приспособления</a></li>
                            -->
                            <!-- TODO: Здесь добавил сам, нужно согласовать (было в разделе Ювелирные приспособления) -->
                            <li><a href="/izgotovlenie-yuvelirnyh-tsepochek">Изготовление ювелирных цепочек</a></li>
                            <!-- Штампы -->
                            <li><a href="/shtamp-ruchnoj-shagovyj-zveno-tsepi">Штамп ручной шаговый "Звено цепи"</a></li>
                            <li><a href="/komplekt-shtampov-yuvelirnaya-shvenza">Комплект штампов ювелирная швенза</a></li>
                            <li><a href="/shtamp-kontsevik-dlya-yuvelirnoj-tsepi">Штамп концевик для ювелирной цепи</a></li>
                            <li><a href="/shtamp-ruchnoj-vyrubnoj-pusseta">Штамп ручной вырубной "пуссета"</a></li>
                            <li><a href="/shtamp-sovmeshhennogo-dejstviya-element">Штамп совмещенного действия элемент "подвеска"</a></li>
                            <li><a href="/shtamp-chekanochnyj-yuvelirnyj-ikonka">Штамп чеканочный ювелирный "иконка"</a></li>
                            <li><a href="/shtamp-yuvelirnyj-vyrubnoj-krest">Штамп ювелирный вырубной "крест"</a></li>
                            <li><a href="/shtamp-relefnoj-formovki-koltso">Штамп рельефной формовки "кольцо"</a></li>
                            <li><a href="/shtamp-ruchnoj-vyrubnoj-polumesyats">Штамп ручной вырубной "полумесяц"</a></li>
                            <li><a href="/shtamp-poluavtomaticheskij-shagovyj-zv">Штамп полуавтоматический шаговый "звено цепи"</a></li>
                            <li><a href="/komplekt-shtampov-vyrubnyh-ruchnyh-kol">Комплект штампов вырубный ручных "Колодка для медали"</a></li>
                            <li><a href="/shtamp-vyrubnoj-ruchnoj-buhtirovannoe">Штамп вырубной ручной "бухтированное ювелирное кольцо"</a></li>
                            <li><a href="/shtamp-dlya-izgotovleniya-zamkovoj-chast">Штамп для изготовления замковой части ювелирной булавки</a></li>
                            <li><a href="/zamok-yuvelirnoj-tsepi-krab">Замок ювелирной цепи "Краб"</a></li>
                            <li><a href="/zamok-yuvelirnoj-tsepi-karabin">Замок ювелирной цепи "Карабин"</a></li>
                            <!-- Приспособления -->
                            <li><a href="/prisposoblenie-dlya-izgotovleniya-pan">Приспособление для изготовления панцирной ювелирной цепи</a></li>
                            <li><a href="/opoka-litejnaya-tselnometallicheskaya">Опока литейная цельнометаллическая перфорированная</a></li>
                            <li><a href="/smennyj-valik-k-yuvelirnym-valtsam">Сменный валик к ювелирным вальцам</a></li>
                            <li><a href="/filiera">Фильера для изготовления полой трубки</a></li>
                            <li><a href="/prochaya-produktsiya">Прочая продукция</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Штампы листовой штамповки</a>
                        <ul>
                            <li><a href="#">Штамп для вырубки круглой печатной платы</a></li>
                            <li><a href="#">Штамп для изготовления приборной панели</a></li>
                            <li><a href="#">Штамп для вырубки отвествия в алюминиевом профиле</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Пресс-формы и литьевые формы</a></li>
                    <li><a href="#">Фильера экструзионная</a></li>
                    <li>
                        <a href="#">Прессы</a>
                        <ul>
                            <li><a href="/press-vintovoj-ruchnoj">Пресс винтовой</a></li>
                            <li><a href="/press-gidravlicheskij-pgm-yu-100-16">Пресс гидравлический ПГМ(ю)</a></li>
                            <li><a href="/press-pnevmaticheskij-ppyu-100">Пресс пневматический ППЮ-100</a></li>
                            <li><a href="/press-ekstsentrikovyj-ruchnoj">Пресс эксцентриковый ручной</a></li>
                            <li><a href="/press-elektrogidravlicheskij-pegm-840">Пресс электрогидравлический ПЭгМ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Нестандартное оборудование и приспособления</a>
                        <ul>
                            <li><a href="/tsanga-mashinostroitelnaya">Цанга машиностроительная</a></li>
                            <li><a href="#">Метчик</a></li>
                            <li><a href="#">Комплект приспособлений для опрессовки шнурка</a></li>
                        </ul>
                    </li>
                    <!--
                    <li>
                        <a href="#">Прессы</a>
                        <ul>
                            <li><a href="">Пресс винтовой ручной</a></li>
                            <li><a href="">Пресс электрогидравлический ПЭгМ-8/40</a></li>
                            <li><a href="">Пресс гидравлический ПГМ (ю) 100(50)-16</a></li>
                            <li><a href="">Пресс пневматический ППЮ-100</a></li>
                            <li><a href="">Пресс эксцентировый ручной</a></li>
                        </ul>
                    </li>
                    -->
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="content">
                <?= $content ?>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; <span>Copyright</span> <?php echo date('Y'); ?> |
        СпецТехОснастка | <strong>т. 8 (8352) 36-62-62</strong> |
        <strong><a href="mailto:shtamp-21@mail.ru">shtamp-21@mail.ru</a></strong></p>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>