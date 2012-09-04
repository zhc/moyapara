<html>
<head>
    <title>StudRating</title>
</head>
<body>
<a href="/">Все группы</a><br/>
Группа: <?=$group->name?> <a href="/student/list/<?=$group->id?>">студенты</a><br/>
Предметы: (<a href="/subject/add/<?=$group->id?>">добавить</a>)<br/>
<?foreach($subjects as $subject):?>
<a href="/subject/list/<?=$subject->id?>"><?=html::chars($subject->name)?></a><br/>
    <?endforeach?>

Занятия: (<a href="/class/add/<?=$group->id?>">добавить</a>)<br/>
<table>
    <?foreach($classes as $class):?>
    <tr>
        <td>
            <a href="/class/info/<?=$class->id?>"><?=html::chars($class->subject->name)?> <?=date('d.m.Y H:i',$class->date)?></a>
        </td>
        <td>
            <a href="/class/delete/<?=$class->id?>/<?=$group->id?>">[X]</a>
        </td>
    </tr>
    <?endforeach?>
</table>

</body>
</html>