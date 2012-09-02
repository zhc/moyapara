<html>
<head>
    <title>StudRating</title>
</head>
<body>
Предметы: (<a href="/subject/add/<?=$group->id?>">добавить</a>)<br/>
<?foreach($subjects as $subject):?>
    <a href="/subject/info/<?=$subject->id?>"><?=html::chars($subject->name)?></a><br/>
<?endforeach?>

Занятия: (<a href="/class/add/<?=$group->id?>">добавить</a>)<br/>
<?foreach($classes as $class):?>
    <a href="/class/info/<?=$class->id?>"><?=html::chars($class->subject->name)?> <?=date('d.m.Y H:i',$class->date)?></a><br/>
<?endforeach?>


</body>
</html>