<h1><?=html::chars($subject->name)?> <?=html::chars($group->name)?></h1>
<h2>Посещаемость</h2>
<table class="table table-hover">
    <thead>
        <td>Студент</td>
        <?foreach($classes as $class):?>
        <td><?=date('d M H:i', $class->date)?></td>
        <?endforeach?>
    </thead>
    <?foreach($students as $student):?>
    <tr>
        <?$i=0;?>
        <td><?=html::chars($student->name)?></td>
        <?foreach($classes as $class):?>
            <td>
                <?if($class->was_student($student->id)):?>
                    +
                    <?$i++;?>
                <?endif?>
            </td>
        <?endforeach?>
        <td><?=$i?>/<?=count($classes)?></td>
    </tr>
    <?endforeach?>
</table>

<h2>Задания</h2>
<table class="table table-hover">
    <thead>
    <td>Студент</td>
    <?foreach($tasks as $task):?>
        <td><?=html::chars($task->name)?></td>
    <?endforeach?>
    </thead>
    <?foreach($students as $student):?>
    <tr>
        <?$i=0;?>
        <td><?=html::chars($student->name)?></td>
        <?foreach($tasks as $task):?>
            <td>
                <?if($task->was_done($student->id)):?>
                +
                <?$i++;?>
                <?endif?>
            </td>
        <?endforeach?>
        <td><?=$i?>/<?=count($tasks)?></td>
    </tr>
    <?endforeach?>
</table>