<html>
<head>
    <title>StudRating</title>
</head>
<body>
Посещаемость:<br/>    
Группа <a href="/subject/group/<?=$group->id?>"><?=html::chars($group->name)?></a></br>
Предмет <?=html::chars($subject->name)?></br>

<table border="1">
    <tr>
        <td>Имя</td>
        <?foreach($classes as $class):?>
        <td><?=date('d.m.Y H:i',$class->date)?></td>
        <?endforeach?>
    </tr>
    <?foreach($students as $student):?>
    <tr>
        <td><?=$student->name?></td>
        <?foreach($classes as $class):?>
            <td>-</td>
        <?endforeach?>
    </tr>
    <?endforeach?>
</table>

</body>
</html>
