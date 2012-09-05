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
        <td><?=$student->name?></td>
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
