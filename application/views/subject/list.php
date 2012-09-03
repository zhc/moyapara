<html>
<head>
    <title>StudRating</title>
</head>
<body>
Группа: <?=$group->name?><br/>
Предметы: (<a href="/subject/add/<?=$group->id?>">добавить</a>)<br/>
<?foreach($subjects as $subject):?>
<a href="/subject/info/<?=$subject->id?>"><?=html::chars($subject->name)?></a><br/>
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