Посещаемость:<br/>
Группа <a href="/subject/group/<?=$group->id?>"><?=html::chars($group->name)?></a><br/>
Предмет <?=html::chars($subject->name)?><br/>
<script>
    var students = [<?foreach($students as $student){ echo $student . ", "; }?>];
    function unlock(classId){
        for(k in students){
            $("#presence"+classId+"_"+students[k]).removeAttr("disabled");
        }
        $("#locker"+classId).attr("onclick", "return lock("+classId+")").html("Сохранить");
        return false;
    }
    function lock(classId){
        var was = [];
        var absent = [];
        for(k in students){
            var value = $("#presence"+classId+"_"+students[k])
                .attr("disabled", "disabled")
                .attr("checked");
            if (value == "checked"){
                was.push(students[k]);
            } else {
                absent.push(students[k]);
            }
        }
        $.post("/class/presence", {"was[]":was, "absent[]":absent, classId:classId}, function(data, code){
            $("#locker"+classId).attr("onclick", "return unlock("+classId+")").html("Изменить");
        }).error(function(data){
                alert("Произошла ошибка.");
        });
        return false;
    }
</script>

<table border="1">
    <tr>
        <td>Имя</td>
        <?foreach($classes as $class):?>
        <td><?=date('d.m.Y H:i',$class->date)?></td>
        <?endforeach?>
    </tr>
    <?foreach($students as $student):?>
    <tr>
        <td><?=html::chars($student->name)?></td>
        <?foreach($classes as $class):?>
            <td>
                <input type="checkbox" id="presence<?=$class->id?>_<?=$student->id?>" <?=$class->was_student($student->id)?> disabled="disabled"/>
            </td>
        <?endforeach?>
    </tr>
    <?endforeach?>
    <tr>
        <td></td>
        <?foreach($classes as $class):?>
        <td><a href="#" id="locker<?=$class->id?>" onclick="return unlock(<?=$class->id?>);">Изменить</a></td>
        <?endforeach?>
    </tr>
</table>
Категории <a href="/task/addcat/<?=$subject->id?>">(добавить)</a>
<table>
    <?foreach($task_categories as $task_category):?>
    <tr>
        <td><?=html::chars($task_category->name)?></td>
        <td><a href="/task/delcat/<?=$task_category->id?>">[X]</a></td>
    </tr>
    <?endforeach?>
</table>

<a href="/task/add/<?=$subject->id?>">добавить задание</a><br/>


<table border="1">
    <tr>
        <td>Имя</td>
        <?foreach($tasks as $task):?>
        <td><?=html::chars($task->name)?></td>
        <?endforeach?>
    </tr>
    <?foreach($students as $student):?>
    <tr>
        <td><?=html::chars($student->name)?></td>
        <?foreach($tasks as $task):?>
        <td>
            <input type="checkbox" id="task<?=$task->id?>_<?=$student->id?>" <?=$task->was_done($student->id)?> disabled="disabled"/>
        </td>
        <?endforeach?>
    </tr>
    <?endforeach?>
</table>

