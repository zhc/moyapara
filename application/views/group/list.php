Выберите группу: (<a href="/group/add">добавить</a>)<br/>
<table class="table table-hover">
<?foreach($groups as $g):?>
    <tr>
        <td><h4><a href="/group/list/<?=$g->id?>"><?=html::chars($g->name)?></a></h4></td>
        <td><a href="/group/delete/<?=$g->id?>"><button class="btn btn-danger">Удалить</button></a></td>
    </tr>
<?endforeach?>
</table>