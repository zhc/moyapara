<form method="post" action="/subject/save/<?=$group_id?>" class="form-horizontal">
    <legend>Добавить предмет</legend>
    <div class="control-group">
        <label class="control-label" for="name">Предмет</label>
        <div class="controls">
            <input name="name" type="text" id="name" class="input-medium" placeholder="Название"/>
            <input type="submit" value="Добавить" class="btn btn-primary"/>
        </div>
    </div>
</form>