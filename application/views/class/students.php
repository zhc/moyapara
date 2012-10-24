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
<a href="/task/add/<?=$class->id?>"><button class="btn btn-primary">Новое задание</button></a>
<span style="font-size: 20px; padding-left: 10px;">Группа <?=html::chars($group->name)?></span>
<div class="row-fluid">
<div class="span4">
    <table class="table table-hover">
        <thead>
        <td></td><td>Посещение</td>
        </thead>
        <?foreach($students as $student):?>
        <tr>
            <td><div style="height: 20px; overflow: hidden;"><?=html::chars($student->name)?></div></td>
            <td>
                <input type="checkbox" id="presence<?=$class->id?>_<?=$student->id?>" <?=$class->was_student($student->id)?"checked":""?> onclick="return save_presence(<?=$class->id?>, <?=$student->id?>)"/>
            </td>
        </tr>
        <?endforeach?>
    </table>
</div>
<div class="span6" style="overflow: auto">
    <table class="table table-hover">
        <thead>
        <?foreach($class->subject->tasks->find_all() as $task):?>
            <td><?=html::chars($task->name)?></td>
        <?endforeach?>
        </thead>
        <?foreach($students as $student):?>
        <tr>
            <?foreach($class->subject->tasks->find_all() as $task):?>
            <td>
                <input type="checkbox" id="task<?=$task->id?>_<?=$student->id?>" <?=$task->was_done($student->id)?"checked":""?> onclick="return save_task(<?=$task->id?>, <?=$student->id?>)" title="<?=html::chars($student->name.' '.$task->name.' '.date('d M H:i', $task->complete_date($student->id)))?>"/>
            </td>
            <?endforeach?>
        </tr>
        <?endforeach?>
    </table>
</div>
</div>
<div>
    <a href="/class/delete/<?=$class->id?>"><button class="btn btn-danger">Удалить занятие</button></a>
</div>