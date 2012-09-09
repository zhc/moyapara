<form method="post" action="/student/save/<?=$group->id?>" class="form-horizontal">
    <legend>Добавить студента в <?=html::chars($group->name)?></legend>
    <div class="control-group">
        <label class="control-label" for="name">Студент</label>
        <div class="controls">
            <input name="name" type="text" id="name" class="input-medium" placeholder="ФИО"/>
            <input type="submit" value="Добавить" class="btn btn-primary"/>
        </div>
    </div>
</form>