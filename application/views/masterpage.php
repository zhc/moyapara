<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <link href="/css/ui-lightness/jquery-ui-1.8.23.custom.css" type="text/css" rel="stylesheet" />
    <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <script src="/js/jquery-1.8.0.min.js" type="text/javascript"></script>
    <script src="/js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
    <script src="/js/jquery.ui.datepicker-ru.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="/">МОЯ ПАРА</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li<?=$is_schedule_active?>><a href="/">Расписание</a></li>
                        <li<?=$is_group_active?>><a href="/group/list">Группы</a></li>
                        <li<?=$is_subject_active?>><a href="/subject/list">Предметы</a></li>
                        <li<?=$is_stat_active?>><a href="/group/stat">Статистика</a></li>
                    </ul>
                    <ul class="nav pull-right">
                        <li><a href="/profile/logout">Выход</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container">
        <?if(strlen($popup_message) > 0):?>
            <div class="alert alert-info">
                <?=$popup_message?>
            </div>
        <?endif?>
        <?=$body?>
        <hr>
        <footer>
            <p>&copy; Центр вычислительных технологий 2012</p>
        </footer>
    </div>
</body>
</html>