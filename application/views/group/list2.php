<?include 'list.php'?>

Группа: <?=html::chars($group->name)?> <a href="/student/list/<?=$group->id?>">студенты</a><br/>
Предметы: (<a href="/subject/add/<?=$group->id?>">добавить</a>)<br/>
<table>
    <?foreach($subjects as $s):?>
    <tr>
        <td><a href="/subject/list/<?=$s->id?>"><?=html::chars($s->name)?></a></td>
        <td><a href="/subject/delete/<?=$s->id?>"><button class="btn btn-danger">Удалить</button></a></td>
    </tr>
    <?endforeach?>
</table>
Занятия: (<a href="/class/add/<?=$group->id?>">добавить</a>)<br/>
<table>
    <?foreach($classes as $c):?>
    <tr>
        <td>
            <a href="/subject/list/<?=$s->id?>"><?=html::chars($c->subject->name)?> <?=date('d.m.Y H:i',$c->date)?></a>
        </td>
        <td>
            <a href="/class/delete/<?=$c->id?>"><button class="btn btn-danger">Удалить</button></a>
        </td>
    </tr>
    <?endforeach?>
</table>
