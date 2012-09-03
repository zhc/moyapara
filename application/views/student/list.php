<html>
<head>
    <title>StudRating</title>
</head>
<body>
<?=html::chars($group->name)?><br/>
<?foreach($students as $student):?>
    <?=html::chars($student->name)?><br/>
<?endforeach?>
</body>

</html>