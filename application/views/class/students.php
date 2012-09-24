<script>
    function save_presence(class_id, student_id){
        var element = $("#presence"+class_id+"_"+student_id);
        element.attr("disabled", true);
        $.post("/class/presence/"+class_id, {student_id:student_id}, function(data){
            element.removeAttr("disabled");
            if (data == "checked"){
                element.attr("checked", true);
            } else if (data == "unchecked") {
                element.removeAttr("checked");
            }
        });
        return false;
    }
    function save_task(task_id, student_id){
        var element = $("#task"+task_id+"_"+student_id);
        element.attr("disabled", true);
        $.post("/task/update/"+task_id, {student_id:student_id}, function(data){
            element.removeAttr("disabled");
            if (data == "checked"){
                element.attr("checked", true);
            } else if (data == "unchecked") {
                element.removeAttr("checked");
            }
        });
        return false;
    }
</script>
<div>
    <a href="/task/add/<?=$class->id?>"><button class="btn btn-primary">Новое задание</button></a>
</div>
<br>
<table class="table table-hover">
    <thead>
    <td></td><td style="padding-left: 200px;">Посещение</td>
    <?foreach($class->subject->tasks->find_all() as $task):?>
        <td><?=html::chars($task->name)?></td>
    <?endforeach?>
    </thead>
    <?foreach($class->subject->group->students->find_all() as $student):?>
    <tr>
        <td><?=html::chars($student->name)?></td>
        <td>
            <input type="checkbox" id="presence<?=$class->id?>_<?=$student->id?>" <?=$class->was_student($student->id)?"checked":""?> onclick="return save_presence(<?=$class->id?>, <?=$student->id?>)"/>
        </td>
        <?foreach($class->subject->tasks->find_all() as $task):?>
            <td>
                <input type="checkbox" id="task<?=$task->id?>_<?=$student->id?>" <?=$task->was_done($student->id)?"checked":""?> onclick="return save_task(<?=$task->id?>, <?=$student->id?>)"/>
            </td>
        <?endforeach?>
    </tr>
    <?endforeach?>
</table>
<div><a href="/class/delete/<?=$class->id?>"><button class="btn btn-danger">Удалить занятие</button></a></div>