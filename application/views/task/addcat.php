
<form method="post" action="/task/savecat/<?=$subject->id?>" class="form-horizontal">
    <legend>Добавить категорию</legend>
    <div class="control-group">
        <label class="control-label" for="text">Категория</label>
        <div class="controls">
            <input name="name" type="text" id="text"/>
            <input type="submit" value="Добавить" class="btn btn-primary"/>
        </div>
    </div>
</form>
