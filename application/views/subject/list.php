<script>
    $(function() {
        $("[href='"+document.location.hash+"']").tab("show");
        $('a[data-toggle="tab"]').on('shown', function (e) {
            document.location.hash = e.target.hash;
        });
    });
</script>
<h2>Предметы <a href="/subject/add/" class="btn"><i class="icon-plus"></i></a></h2>
<div class="tabbable tabs-left">
    <ul class="nav nav-tabs" id="myTab">
        <?foreach($subjects as $subject):?>
            <li>
                <a href="#tab<?=$subject->id?>" data-toggle="tab">
                    <?=html::chars($subject->name).' '.html::chars($subject->group->name)?>
                </a>
            </li>
        <?endforeach?>
    </ul>
    <div class="tab-content">
        <?foreach($subjects as $subject):?>
        <div class="tab-pane" id="tab<?=$subject->id?>">
            <h4>Категории <a href="/task/addcat/<?=$subject->id?>" class="btn"><i class="icon-plus"></i></a></h4>
            <table class="table table-hover">
                <?foreach($subject->task_categories->find_all() as $task_cat):?>
                <tr>
                    <td><?=html::chars($task_cat->name)?></td>
                    <td><a href="/task/delcat/<?=$task_cat->id?>" class="btn"><i class="icon-minus"></i></a></td>
                </tr>
                <?endforeach?>
            </table>
            <a href="/subject/delete/<?=$subject->id?>"><button class="btn btn-danger">Удалить предмет</button></a>
        </div>
        <?endforeach?>
    </div>
</div>