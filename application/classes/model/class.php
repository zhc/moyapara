<?
class Model_Class extends ORM{

    protected $_belongs_to = array('subject' => array());
    protected $_has_many = array('class_presence' => array());

    public function was_student($studentId){
        $pr = $this->class_presence->find_all(); //можно ускорить сделав static
        foreach($pr as $presence){
            if ($presence->student_id == $studentId){
                return $presence->presence > 0 ? "checked" : "";
            }
        }
        return "";
    }

}
?>