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
                <a class="brand" href="/">БРС ИМИ</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="/">Главная</a></li>
                        <li><a href="#about">Занятия</a></li>
                        <li><a href="#contact">Группы</a></li>
                    </ul>
                    <form class="navbar-form pull-right">
                        <input class="span2" type="text" placeholder="Email">
                        <input class="span2" type="password" placeholder="Password">
                        <button type="submit" class="btn">Войти</button>
                    </form>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <?=$body?>
        </div>
        <hr>
        <footer>
            <p>&copy; Центр вычислительных технологий 2012</p>
        </footer>
    </div>
</body>
</html>