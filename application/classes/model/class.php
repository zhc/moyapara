<?
class Model_Class extends ORM{

    protected $_belongs_to = array('subject' => array());
    protected $_has_many = array('class_presence' => array());

    public function was_student($student_id){
        $pr = $this->class_presence->find_all(); //можно ускорить сделав static
        foreach($pr as $presence){
            if ($presence->student_id == $student_id){
                return true;
            }
        }
        return false;
    }

}
?>