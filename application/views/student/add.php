<html>
<head>
    <title>StudRating</title>
</head>
<body>
Добавить студента в группу <?=html::chars($group->name)?>
<form method="post" action="/student/save/<?=$group->id?>">
    <input name="name" type="text"/>
    <input type="submit"/>
</form>
</body>
</html>