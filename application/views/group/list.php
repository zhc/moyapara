Выберите группу: (<a href="/group/add">добавить</a>)<br/>
<table>
<?foreach($groups as $group):?>
    <tr>
        <td><a href="/subject/group/<?=$group->id?>"><?=html::chars($group->name)?></a></td>
        <td><a href="/group/delete/<?=$group->id?>">[x]</a></td>
    </tr>
<?endforeach?>
</table>