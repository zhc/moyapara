<?
class Model_Task extends ORM{

    protected $_belongs_to = array('subject' => array());

    public function was_done($student_id){
        $task_student = ORM::factory('task_student')
            ->where('student_id', '=', $student_id)
            ->and_where('task_id', '=', $this->id)
            ->find();
        if ($task_student->loaded()){
            return true;
        }
        return false;
    }

}
?>