<?
class Model_Subject extends ORM{

    protected $_has_many = array('classes' => array());
    protected $_belongs_to = array('group' => array());

}
?>