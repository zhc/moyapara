Группа: <a href="/group/list/<?=$group->id?>"><?=html::chars($group->name)?></a><br/>
Студенты: (<a href="/student/add/<?=$group->id?>">добавить</a>)<br/>
<?foreach($students as $student):?>
    <?=html::chars($student->name)?> <a href="/student/delete/<?=$student->id?>"><button class="btn btn-danger">Удалить</button></a> <br/>
<?endforeach?>
