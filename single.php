<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7f660904bd.js" crossorigin="anonymous"></script>
    <title>Geopon</title>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler ml-auto mr-auto" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link" href="#link-1" onclick="scrollMain()">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#link-2" onclick="scrollServices()">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#link-3" onclick="scrollAboutus()">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#link-4" onclick="scrollContact()">Контакты</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="container" style="padding-top: 60px">
    <div class="row">
        <div class="col-4 map-mark">
            <i class="fas fa-map-marked-alt "></i>
            <span class="town"> г. Запорожье<br>ул.Новокузнецкая21 </span>
        </div>
        <div class="col-4 col-img">
            <img src="./img/geologo.png" alt="logo">
        </div>
        <div class="col-4 phone-numer">
            <i class="fas fa-phone-square-alt "></i>
            <br>
            <span class="numer">+380 96 5396848<br>+380 99 0781841</span>
        </div>
    </div>
</div>
<div class="main-image">
    <img src="./img/geodesy-700x310.jpg" alt="content-image">
</div>
<div class="service">
    <h2>Наши услуги:</h2>
</div>

<div class="container content-tittle-geodesy">
    <span class="content-first-tittle">Геодезия: </span>
</div>
<div class="container main-content">
    <div class="row">
        <div class="col-4 main-content-geodesy">
            <span class="content-tittle-first-geodesy">1</span>
            <h4>ТОПОГРАФИЧЕСКИЕ РАБОТЫ</h4>
            <p>Топографическая съемка -</p>
        </div>
        <div class="col-4 main-content-geodesy2">
            <span class="content-tittle-second-geodesy">2</span>
            <h4>КАДАСТРОВЫЕ РАБОТЫ</h4>
            <p>Изготовление схемы -</p>
        </div>
        <div class="col-4 main-content-geodesy3">
            <span class="content-tittle-third-geodesy">3</span>
            <h4>ВЫНОС ГРАНИЦ УЧАСТКА</h4>
            <p>Вынос границ участка в натуру -</p>
        </div>
    </div>
</div>

<div class="container content-tittle">
    <span class="content-first-tittle">Землеустройство: </span>
</div>
<div class="container main-content">
    <div class="row">
        <div class="col-4 main-content-land-management">
            <span class="content-tittle-first">1</span>
            <h4>РАЗРАБОТКА ТЕХНИЧЕС-КОЙ ДОКУМЕНТАЦИИ</h4>
            <p>Техническая документация по установлению границ разрабатывается для: определения на местности границ
                участка, внесения в государственный земельный кадастр данных об участке, присвоения кадастрового номера,
                исправления ошибок -</p>
        </div>
        <div class="col-4 main-content-land-management2">
            <span class="content-tittle-second">2</span>
            <h4>ПРОЕКТ ОТВОДА ЗЕМЕЛЬНОГО УЧАСТКА</h4>
            <p>Ключевой этап при оформлении права собственности и приватизации земли -</p>
        </div>
        <div class="col-4 main-content-land-management3">
            <span class="content-tittle-third">3</span>
            <h4>РАЗДЕЛЕНИЕ/ОБЪЕДИ-НЕНИЕ УЧАСТКА</h4>
            <p>Для разделения / объединения участка готовится техническая документация. Основание для подготовки:
                нотариальное заявление собственника, договор, решение суда, или органов власти о разделе -</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4 main-content-land-management4">
            <span class="content-tittle-force">4</span>
            <h4>СМЕНА ЦЕЛЕВОГО НАЗНАЧЕНИЯ УЧАСТКА</h4>
            <p>Для использования земли согласно своим нуждам, иногда необходима смена целевого назначения земельного
                участка. Смена назначения участка оформляется путём разработки проекта землеустройства -</p>
        </div>
        <div class="col-4 main-content-land-management5">
            <span class="content-tittle-fives">5</span>
            <h4>ПРИСВОЕНИЕ КАДАСТРОВОГО НОМЕРА </h4>
            <p>Для покупки, продажи, обмена, получения в наследство земельного участка, согласно законодательству
                Украины - нужно присвоить участку кадастровый номер -</p>
        </div>
        <div class="col-4 main-content-land-management6">
            <span class="content-tittle-six">6</span>
            <h4>РЕГИСТРАЦИЯ ПРАВ СОБСТВЕННОСТИ</h4>
            <p>Для начала/окончания застройки, капитального ремонта или реконструкции частного дома или другого объекта
                1-3 категории сложности - следует получить документы, дающие разрешение на выполнение вышеуказанных
                работ, а именно декларации о начале/конце строительства. -</p>
        </div>
    </div>
</div>
<div class="main-image2">
    <img src="./img/geologo2.png" alt="content-image">
</div>
<div class="about-us">
    <h2>О нас</h2>
    <p>
        ЧП "Пономаренко"(код ЕГРПОУ ********) лидирует на рынке более десяти лет. Мы привыкли достигать результатов
        раньше остальных, покоряя своих клиентов качественной работой, гибкими ценами и кратчайшими сроками. У нас
        работают самые опытные специалисты, чей суммарный стаж работы в сфере землеустройства и геодезии составляет
        более сорока лет.
    </p>
    <p>
        Выполняя работы, мы подходим к каждому клиенту с максимальной ответственностью, несмотря на тысячные обороты
        продукции в год.
    </p>
    <p>
        Мы ставим перед собой цель не обогатиться на людях, а сделать, так, что бы каждый клиент разрешил свои проблемы
        и воплотил мечты в реальность.
    </p>
    <p>
        Встречая каждого клиента индивидуальным подходом, наши специалисты с легкостью проводят его через дебри
        земельных законов. Для нас лучшая из наград - отлично выполненная работа и довольные люди.
    </p>
</div>
<div class="about-us-image">
    <img src="./img/sertificat2.png">
</div>
</body>
</html>
<div class="contacts">
    <h2>
        Контакты
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <p>
                    Пн - Вс
                </p>
                <p>
                    9:00-18:00
                </p>
            </div>
            <div class="col-3">
                    <p>
                        ул Новокузнецкая 21/16
                    </p>
                    <p>
                        Запорожье
                    </p>
                    <p>
                        Украина
                    </p>
            </div>
            <div class="col-3">
                <p>
                    тел.:
                </p>
                <p>
                    +380 96 5396848
                </p>
                <p>
                    +380 99 0781841
                </p>
            </div>
            <div class="col-3">
                <p>
                    <a href="frendpon@gmail.com">frendpon@gmail.com</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1340.4982680791545!2d35.18183977608236!3d47.7815151947737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc5ef93b76873d%3A0x78311593ef9d95c!2sNovokuznetska%20Street%2C%2021%2C%20Zaporizhzhia%2C%20Zaporiz&#39;ka%20oblast%2C%2069000!5e0!3m2!1sen!2sua!4v1570024766409!5m2!1sen!2sua"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<footer>
    <script src="scrypt.js" crossorigin="anonymous"></script>
</footer>
<?php
