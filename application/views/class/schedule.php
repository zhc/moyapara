<script>
    var cur_class_id = -1;
    function cal_click(time){
        if (cur_time > -1){
            $("#cal"+cur_time).css("background", "none");
        }
        $("#cal"+time).css("background", "#ebebeb");
        cur_time = time;

        $("#clicked_day").html('<div class="progress progress-striped active"><div class="bar" style="width: 100%;"></div></div>');
        $.get('/class/day/'+time, function(data){
            $("#clicked_day").html(data);
        });
    }
    function class_click(class_id){
        if (cur_class_id > -1){
            $("#class_"+cur_class_id).css("background", "none");
        }
        $("#class_"+class_id).css("background", "#ebebeb");
        cur_class_id = class_id;

        $("#clicked_class").html('<div class="progress progress-striped active"><div class="bar" style="width: 100%;"></div></div>');
        $.get('/class/students/'+class_id, function(data){
            $("#clicked_class").html(data);
        });
    }
</script>
<h2>Расписание <a href="/class/add/" class="btn"><i class="icon-plus"></i></a></h2>
<table class="table table-hover">
    <thead>
        <td>Понедельник</td>
        <td>Вторник</td>
        <td>Среда</td>
        <td>Четверг</td>
        <td>Пятница</td>
        <td>Суббота</td>
        <td>Воскресенье</td>
    </thead>
    <tr>
        <?foreach($schedule->curr_week() as $day):?>
        <td>
            <div><?=date('d M', $day['date'])?></div>
            <?foreach($day['classes'] as $class):?>
            <div style="cursor: pointer;" onclick="class_click(<?=$class->id?>)" id="class_<?=$class->id?>"><?=date('H:i', $class->date)?> <?=$class->subject->name?></div>
            <?endforeach?>
        </td>
        <?endforeach?>
    </tr>
    <tr>
        <?foreach($schedule->next_week() as $day):?>
        <td>
            <div><?=date('d M', $day['date'])?></div>
            <?foreach($day['classes'] as $class):?>
            <div style="cursor: pointer;" onclick="class_click(<?=$class->id?>)" id="class_<?=$class->id?>"><?=date('H:i', $class->date)?> <?=$class->subject->name?></div>
            <?endforeach?>
        </td>
        <?endforeach?>
    </tr>
</table>

<div id="clicked_class"></div>