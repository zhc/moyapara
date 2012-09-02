<html>
<head>
    <title>StudRating</title>
    <link type="text/css" href="/css/ui-lightness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
    <script src="/js/jquery-1.8.0.min.js" type="text/javascript"></script>
    <script src="/js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
    <script src="/js/jquery.ui.datepicker-ru.js" type="text/javascript"></script>
</head>
<body>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
Добавить занятие <br/>
<form method="post" action="/class/save/<?=$group->id?>">
    <select name="subject">
        <?foreach($subjects as $subject):?>
            <option value="<?=$subject->id?>"><?=html::chars($subject->name)?></option>
        <?endforeach?>
    </select>
    <input type="text" name="date" id="datepicker"/>
    <select name="time">
        <option>8:00</option>
        <option>9:50</option>
        <option>11:40</option>
        <option>14:00</option>
        <option>15:40</option>
        <option>17:20</option>
    </select>
    <input type="submit"/>
</form>
</body>
</html>