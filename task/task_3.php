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
                            
                                <?php
                                $box = [
                                    [
                                        "title" => "Мои задачи",
                                        "value" => "7 / 10",
                                        "bg" => "bg-fusion-400",
                                        "prog_bar" => "65",
                                    ],

                                    [
                                        "title" => "Емкость диска",
                                        "value" => "440 TB",
                                        "bg" => "bg-success-500",
                                        "prog_bar" => "34",
                                    ],

                                    [
                                        "title" => "Пройдено уроков",
                                        "value" => "77%",
                                        "bg" => "bg-info-400",
                                        "prog_bar" => "77",
                                    ],

                                    [
                                        "title" => "Осталось дней",
                                        "value" => "2 дня",
                                        "bg" => "bg-primary-300",
                                        "prog_bar" => "84",
                                    ],
                                ];
                                ?>
                                <?php foreach ($box as $i):?>
                            <div class="d-flex mt-2">
                                <?php echo $i["title"];?>
                                <span class="d-inline-block ml-auto"><?php echo $i["value"];?></span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar <?php echo $i["bg"];?>" role="progressbar" style="width: <?php echo $i["prog_bar"];?>%;" aria-valuenow="<?php echo $i["prog_bar"];?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php endforeach; ?>
                            <!--<div class="d-flex">
                                Емкость диска
                                <span class="d-inline-block ml-auto">440 TB</span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-success-500" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex">
                                Пройдено уроков
                                <span class="d-inline-block ml-auto">77%</span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-info-400" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex">
                                Осталось дней
                                <span class="d-inline-block ml-auto">2 дня</span>
                            </div>
                            <div class="progress progress-sm mb-g">
                                <div class="progress-bar bg-primary-300" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> -->
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
