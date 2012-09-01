<html>
<head>
    <title>StudRating</title>
</head>
<body>
Предметы: (<a href="/subject/add/<?=$group->id?>">добавить</a>)<br/>
<?foreach($subjects as $subject):?>
    <a href="/subject/info/<?=$subject->id?>"><?=html::chars($subject->name)?></a><br/>
<?endforeach?>
</body>
</html>