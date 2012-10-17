<form method="post" action="/task/save/<?=$subject->id?>" class="form-horizontal">
    <legend>Добавить задание <?=html::chars($subject->name)?> <?=html::chars($subject->group->name)?> </legend>
    <input type="hidden" name="assigned_date" value="<?=$class->date?>">
    <input type="hidden" name="class_id" value="<?=$class->id?>">
    <div class="control-group">
        <label class="control-label" for="task_category_id">Категория</label>
        <div class="controls">
            <select name="task_category_id" id="task_category_id">
                <?foreach($subject->task_categories->find_all() as $task_category):?>
                    <option value="<?=$task_category->id?>"><?=html::chars($task_category->name)?></option>
                <?endforeach?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="text">Задание</label>
        <div class="controls">
            <input name="name" type="text" id="text" placeholder="Название"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="description">Описание</label>
        <div class="controls">
            <textarea rows="10" cols="80" name="description" id="description"></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <input type="submit" value="Добавить" class="btn btn-primary"/>
        </div>
    </div>
</form>