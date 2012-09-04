<?
class Model_Group extends ORM{
    protected $_has_many = array(
        'students' => array(),
        'subjects' => array(),
        );
}
?>