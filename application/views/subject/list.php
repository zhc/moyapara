<h2><?=html::chars($subject->name)?> <?=html::chars($group->name)?> </h2>
<table class="table table-hover">
    <tr>
        <td>Имя</td>
        <?foreach($classes as $class):?>
        <td><?=date('d.m.Y H:i',$class->date)?></td>
        <?endforeach?>
    </tr>
    <?foreach($students as $student):?>
    <tr>
        <td><?=html::chars($student->name)?></td>
        <?foreach($classes as $class):?>
            <td><?=$class->was_student($student->id)?"+":"-"?></td>
        <?endforeach?>
    </tr>
    <?endforeach?>
</table>