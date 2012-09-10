Группа: <a href="/group/list/<?=$group->id?>"><?=html::chars($group->name)?></a><br/>
Студенты: (<a href="/student/add/<?=$group->id?>">добавить</a>)<br/>
<table class="table table-hover">
<?foreach($students as $student):?>
    <tr>
        <td><?=html::chars($student->name)?></td>
        <td><a href="/student/delete/<?=$student->id?>"><button class="btn btn-danger">Удалить</button></a></td>
    </tr>
<?endforeach?>
</table>