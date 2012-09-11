<script>
    var cur_time = -1;
    function cal_click(time){
        if (cur_time > -1){
            $("#cal"+cur_time).css("background", "none");
        }
        $("#cal"+time).css("background", "#ebebeb");
        cur_time = time;

        $.get('/class/day/'+time, function(data){
            $("#clicked_day").html(data);
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
        <td style="cursor: pointer;" onclick="cal_click(<?=$day['date']?>)" id="cal<?=$day['date']?>">
            <div><?=date('d M', $day['date'])?></div>
            <?foreach($day['classes'] as $class):?>
            <div><?=date('H:i', $class->date)?> <?=$class->subject->name?></div>
            <?endforeach?>
        </td>
        <?endforeach?>
    </tr>
    <tr>
        <?foreach($schedule->next_week() as $day):?>
        <td style="cursor: pointer;" onclick="cal_click(<?=$day['date']?>)" id="cal<?=$day['date']?>">
            <div><?=date('d M', $day['date'])?></div>
            <?foreach($day['classes'] as $class):?>
            <div><?=date('H:i', $class->date)?> <?=$class->subject->name?></div>
            <?endforeach?>
        </td>
        <?endforeach?>
    </tr>
</table>

<div id="clicked_day"></div>