<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <?php
                            
                            $posts = [

                                [
                                    "title" => "<h1>Первый заголовок статьи</h1>",

                                    "description" => "<p>Оставим заметки в тестовом тексте — без постоянной практики в начеле #кашиНеСваришь. Когда то давно я занимался через день, после бросал, опять начинал — но уже с погружением в теорию, каждый день что-то читал, смотрел и почти ничего не писал... Путь в никуда, это не учеба, а самообман. Это задание я сделал с третьего раза с подсказками, хотя думал, что знаю основы. 
                                    <br>
                                    Последняя ошибка которая почти заставила переписать всё, была выявлена чтением текста кода с права налево, так мозг уже смотрит не привычным взглядом, а более осознанно. Сама ошибка приводила к тому, что foreach работал криво. Выяснилось что была орфографическая ошибка в имени ключа — d*i*scription</p>"
                                ],
                                
                                [
                                    "title" => "<h1>Второй заголовок для статьи</h1>",
                                    "description" => "<p>
                                    Хотел сделать чтобы заголовок был динамическим. Не вышло. Сегодня проверка заданий, не буду тратить время ибо я тот еще тормоз, убью часа три на это наверное.
                                    <br><br>
                                    Нет, ну вот реально! Два дня не думал о программировании, и сегодня переделывал то, что сделал до этого...Правда я делал чуть иначе...#ПовтореньеМатьУченья.Присылайте нам ваши рыбные тексты! Мы будем рады!
                                </p>"
                                ],
                                [
                                    "title" => "<h3>Вместо вывода и эпилога</h3>",
                                    "description" => "<a>Ты запомнил и понял? Теперь возрадуйся — это работает. Ну кроме динамическрих заголовков =)</a>"

                                ]

                                ];

                            foreach ($posts as $post) {
                                    echo $post["title"];
                                    echo $post["description"];
                                    

                                }
                            ?>
                            
                            
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
