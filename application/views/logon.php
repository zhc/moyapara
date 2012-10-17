<!DOCTYPE html>
<html>
<head>
    <title>Моя пара</title>
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
    <div class="container">
        <form class="form-horizontal" method="post" action="/profile/login">
            <legend>Авторизуйтесь</legend>
            <div class="control-group">
                <label class="control-label" for="username">Логин</label>
                <div class="controls">
                    <input class="span2" type="text" placeholder="Логин" name="username" id="username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="username">Пароль</label>
                <div class="controls">
                    <input class="span2" type="password" placeholder="Пароль" name="password" id="password">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <input type="submit" value="Войти" class="btn btn-primary"/>
                </div>
            </div>
        </form>
        <hr>
        <footer>
            <p>&copy; Центр вычислительных технологий 2012</p>
        </footer>
    </div>
</body>
</html>