<script>
    $(function() {
        $("[href='"+document.location.hash+"']").tab("show");
        $('a[data-toggle="tab"]').on('shown', function (e) {
            document.location.hash = e.target.hash;
        });
    });
</script>
<h2>Группы</h2>
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
                <?foreach($group->subjects->find_all() as $subject):?>
                    <a href="/subject/list/<?=$subject->id?>"><?=html::chars($subject->name)?></a>
                <?endforeach?>
            </div>
        <?endforeach?>
    </div>
</div>