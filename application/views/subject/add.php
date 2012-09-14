<form method="post" action="/subject/save" class="form-horizontal">
    <legend>Добавить предмет</legend>
    <div class="control-group">
        <label class="control-label" for="group">Группа</label>
        <div class="controls">
            <select name="group_id" id="group">
                <?foreach($groups as $group):?>
                    <option value="<?=$group->id?>"><?=html::chars($group->name)?></option>
                <?endforeach?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="name">Предмет</label>
        <div class="controls">
            <input name="name" type="text" id="name" placeholder="Название"/>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <input type="submit" value="Добавить" class="btn btn-primary"/>
        </div>
    </div>
</form>