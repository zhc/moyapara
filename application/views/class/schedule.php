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
        }).error(function(jqXHR, text, err){ alert( text + " " + err); });
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
        }).error(function(jqXHR, text, err){ alert( text + " " + err); });
    }
</script>
<h2>Расписание <a href="/class/add/" class="btn"><i class="icon-plus"></i></a></h2>
<div class="row-fluid">
    <div class="span10">
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
            <?foreach($schedule->weeks() as $week):?>
            <tr>
                <?foreach($week as $day):?>
                <td>
                    <div><?=date('d M', $day['date'])?></div>
                    <?foreach($day['classes'] as $class):?>
                    <div style="cursor: pointer;" onclick="class_click(<?=$class->id?>)" id="class_<?=$class->id?>"><?=date('H:i', $class->date)?> <?=html::chars($class->subject->name)?> <?=html::chars($class->subject->group->name)?></div>
                    <?endforeach?>
                </td>
                <?endforeach?>
            </tr>
            <?endforeach?>
        </table>
    </div>
    <div class="span2">
        <a href="/class/schedule/9">Сентябрь</a><br>
        <a href="/class/schedule/10">Октябрь</a><br>
        <a href="/class/schedule/11">Ноябрь</a><br>
        <a href="/class/schedule/12">Декабрь</a><br>
        <a href="/class/schedule/1">Январь</a><br>
        <a href="/class/schedule/2">Февраль</a><br>
        <a href="/class/schedule/3">Март</a><br>
        <a href="/class/schedule/4">Апрель</a><br>
        <a href="/class/schedule/5">Май</a><br>
        <a href="/class/schedule/6">Июнь</a><br>
        <a href="/class/schedule/7">Июль</a><br>
    </div>
</div>

<div id="clicked_class"></div>