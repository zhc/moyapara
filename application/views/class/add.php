<script>
    $(function() {
        $( "#datepicker1" ).datepicker();
        $( "#datepicker2" ).datepicker();
        $('#until-block').hide();
        $("#period").change(function(){
            this.value > 0 ? $('#until-block').show() : $('#until-block').hide();
        });
    });
</script>
Добавить занятие <br/>
<form method="post" action="/class/save/<?=$group->id?>">
    <select name="subject">
        <?foreach($subjects as $subject):?>
            <option value="<?=$subject->id?>"><?=html::chars($subject->name)?></option>
        <?endforeach?>
    </select>
    Дата: <input type="text" name="date" id="datepicker1"/>
    <select name="time">
        <option>8:00</option>
        <option>9:50</option>
        <option>11:40</option>
        <option>14:00</option>
        <option>15:40</option>
        <option>17:20</option>
    </select>
    <br/>
    <select name="period" id="period">
        <option value="0">Без периода</option>
        <option value="1">Неделя</option>
        <option value="2">2 недели</option>
    </select>
    <div id="until-block">
        Период до: <input type="text" name="until_date" id="datepicker2"/>
    </div>
    <br/>
    <input type="submit"/>
</form>