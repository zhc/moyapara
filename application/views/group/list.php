<html>
<head>
    <title>StudRating</title>
</head>
<body>
Выберите группу: (<a href="/group/add">добавить</a>)<br/>
<?foreach($groups as $group):?>
    <a href="/subject/group/<?=$group->id?>"><?=html::chars($group->name)?></a><br/>
<?endforeach?>
</body>
</html>