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
                <table class="table table-hover">
                    <?foreach($class->subject->group->students->find_all() as $student):?>
                        <tr>
                            <td><?=html::chars($student->name)?></td>
                            <td>
                                <input type="checkbox" id="presence<?=$class->id?>_<?=$student->id?>" <?=$class->was_student($student->id)?"checked":""?> disabled="disabled" student_id="<?=$student->id?>"/>
                            </td>
                        </tr>
                    <?endforeach?>
                    <tr>
                        <td></td>
                        <td><a href="#" id="locker<?=$class->id?>" onclick="return unlock(<?=$class->id?>);">Изменить</a></td>
                    </tr>
                </table>
            </div>
        <?endforeach?>
    </div>
</div>