<html>
<head>
    <title>StudRating</title>
</head>
<body>
Добавить занятие <br/>
<form method="post" action="/class/save/<?=$group->id?>">
    <select name="subject">
        <?foreach($subjects as $subject):?>
            <option value="<?=$subject->id?>"><?=html::chars($subject->name)?></option>
        <?endforeach?>
    </select>
    <input type="text" name="date"/>
    <input type="submit"/>
</form>
</body>
</html>