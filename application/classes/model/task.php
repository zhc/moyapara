<?
class Model_Task extends ORM{

    protected $_belongs_to = array('subject' => array());

    public function was_done($student_id){
        return "";
    }

}
?>