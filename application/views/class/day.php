<script>
    function unlock(class_id){
        $("[id^=presence"+class_id+"]").each(function(){
            $(this).removeAttr("disabled");
        });
        $("#locker"+class_id).attr("onclick", "return lock("+class_id+")").html("Сохранить");
        return false;
    }
    function lock(class_id){
        var was = [];
        var absent = [];

        $("[id^=presence"+class_id+"]").each(function(){
            var value = $(this)
                .attr("disabled", "disabled")
                .attr("checked");
            var student_id = $(this).attr("student_id");
            if (value == "checked"){
                was.push(student_id);
            } else {
                absent.push(student_id);
            }
        });

        $.post("/class/presence", {"was[]":was, "absent[]":absent, classId:class_id}, function(data, code){
            $("#locker"+class_id).attr("onclick", "return unlock("+class_id+")").html("Изменить");
        }).error(function(data){
                alert("Произошла ошибка.");
            });
        return false;
    }
    function save_task(task_id, student_id) {
        $.post("/task/update", {task_id:task_id, student_id:student_id}, function(data, code){
            if (data == "check"){
                $("#task"+task_id+"_"+student_id).attr("check", true);
            } else {
                $("#task"+task_id+"_"+student_id).attr("check", false);
            }
        }).error(function(data){
                alert("Произошла ошибка.");
        });
    }
</script>
<div class="tabbable tabs-left">
    <ul class="nav nav-tabs">
        <?foreach($classes as $class):?>
            <li>
                <a href="#tab<?=$class->id?>" data-toggle="tab">
                    <?=date('H:i', $class->date)?>
                    <?=html::chars($class->subject->name)?>
                    <?=html::chars($class->subject->group->name)?>
                </a>
            </li>
        <?endforeach?>
    </ul>
    <div class="tab-content">
        <?foreach($classes as $class):?>
            <div class="tab-pane" id="tab<?=$class->id?>">
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
                            <td class="affix"><?=html::chars($student->name)?></td>
                            <td style="padding-left: 200px;">
                                <input type="checkbox" id="presence<?=$class->id?>_<?=$student->id?>" <?=$class->was_student($student->id)?"checked":""?> disabled="disabled" student_id="<?=$student->id?>"/>
                            </td>
                            <?foreach($class->subject->tasks->find_all() as $task):?>
                                <td>
                                    <input type="checkbox" id="task<?=$task->id?>_<?=$student->id?>" <?=$task->was_done($student->id)?"checked":""?> onclick="save_task(<?=$task->id?>,<?=$student->id?>)"/>
                                </td>
                            <?endforeach?>
                        </tr>
                    <?endforeach?>
                    <?if($can_edit):?>
                        <tr>
                            <td></td>
                            <td><a href="#" id="locker<?=$class->id?>" onclick="return unlock(<?=$class->id?>);">Изменить</a></td>
                        </tr>
                    <?endif?>
                </table>
                <div><a href="/class/delete/<?=$class->id?>"><button class="btn btn-danger">Удалить занятие</button></a></div>
            </div>
        <?endforeach?>
    </div>
</div>