Выберите группу: (<a href="/group/add">добавить</a>)<br/>
<table>
<?foreach($groups as $g):?>
    <tr>
        <td><a href="/group/list/<?=$g->id?>"><?=html::chars($g->name)?></a></td>
        <td><a href="/group/delete/<?=$g->id?>">[x]</a></td>
    </tr>
<?endforeach?>
</table>