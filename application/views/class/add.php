<script>
    $(function() {
        $("#datepicker1").datepicker();
        $("#datepicker2").datepicker();
        $("#until-block").hide();
        $("#period").change(function(){
            this.value > 0 ? $("#until-block").show() : $("#until-block").hide();
        });


        $("#subject").children().each(function(){
            options.push(this);
            //$("#subject").children($(this)).remove();
        });
        //select_group($("#group").val());
    });
    var options = [];
    function select_group(group_id){
        $("#subject").children().remove();
        for(var i=0;i<options.length;i++){
            alert(options[i]);
            if ($(options[i]).id.indexOf('subopt'+group_id) == 0){
                $("#subject").appendChild(opt);
            }
        }
    }
</script>

<form method="post" action="/class/save" class="form-horizontal">
    <legend>Добавить занятие</legend>

    <div class="control-group">
        <label class="control-label" for="subject">Предмет</label>
        <div class="controls">
            <select name="group" id="group" onchange="select_group(this.value)">
                <?foreach($groups as $group):?>
                    <option value="<?=$group->id?>"><?=html::chars($group->name)?></option>
                <?endforeach?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="subject">Предмет</label>
        <div class="controls">
            <select name="subject" id="subject">
                <?foreach($groups as $group):?>
                    <?foreach($group->subjects->find_all() as $subject):?>
                        <option value="<?=$subject->id?>" id="subopt<?=$group->id?>_<?=$subject->id?>"><?=html::chars($subject->name)?></option>
                    <?endforeach?>
                <?endforeach?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="datepicker1">Время занятия</label>
        <div class="controls">
            <input type="text" name="date" id="datepicker1" placeholder="Дата начала"/>
            <select name="time" id="time">
                <option>8:00</option>
                <option>9:50</option>
                <option>11:40</option>
                <option>14:00</option>
                <option>15:40</option>
                <option>17:20</option>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="period">Повтор</label>
        <div class="controls">
            <select name="period" id="period">
                <option value="0">Без повтора</option>
                <option value="1">Через неделю</option>
                <option value="2">Через 2 недели</option>
            </select>
        </div>
    </div>

    <div class="control-group" id="until-block">
        <label class="control-label" for="datepicker2">Повтор до</label>
        <div class="controls">
            <input type="text" name="until_date" id="datepicker2" placeholder="Дата конца"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <input type="submit" value="Добавить" class="btn btn-primary"/>
        </div>
    </div>

</form>