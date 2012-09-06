<form method="post" action="/task/save/<?=$subject->id?>">
    <select name="task_category_id">
        <?foreach($subject->task_categories->find_all() as $task_category):?>
        <option value="<?=$task_category->id?>"><?=html::chars($task_category->name)?></option>
        <?endforeach?>
    </select>
    <br/>
    <input name="name" type="text"/>
    <br/>
    <textarea rows="10" cols="80" name="description"></textarea>
    <br/>
    <input type="submit"/>
</form>