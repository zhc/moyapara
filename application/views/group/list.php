<script>
    $(function() {
        $("[href='"+document.location.hash+"']").tab("show");
        $('a[data-toggle="tab"]').on('shown', function (e) {
            document.location.hash = e.target.hash;
        });
    });
</script>
<h2>Группы <a href="/group/add/" class="btn"><i class="icon-plus"></i></a></h2>
<div class="tabbable tabs-left">
    <ul class="nav nav-tabs" id="myTab">
        <?foreach($groups as $group):?>
            <li>
                <a href="#tab<?=$group->id?>" data-toggle="tab">
                    <?=html::chars($group->name)?>
                </a>
            </li>
        <?endforeach?>
    </ul>
    <div class="tab-content">
        <?foreach($groups as $group):?>
        <div class="tab-pane" id="tab<?=$group->id?>">
            <h4>Студенты <a href="/student/add/<?=$group->id?>" class="btn"><i class="icon-plus"></i></a></h4>
            <table class="table table-hover">
                <?foreach($group->students->find_all() as $student):?>
                <tr>
                    <td><?=html::chars($student->name)?></td>
                    <td><a href="/student/delete/<?=$student->id?>" class="btn"><i class="icon-minus"></i></a></td>
                </tr>
                <?endforeach?>
            </table>
            <a href="/group/delete/<?=$group->id?>"><button class="btn btn-danger">Удалить группу</button></a>
        </div>
        <?endforeach?>
    </div>
</div>