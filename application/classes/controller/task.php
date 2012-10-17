<? defined('SYSPATH') or die('No direct script access.');

class Controller_Task extends Controller_Secured {

    public function action_addcat(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        if ($subject->loaded()){
            $this->template->body= View::factory('task/addcat')->set('subject', $subject);
        } else {
            echo "subject not found";
        }
    }

    public function action_add(){
        $class = ORM::factory('class', $this->request->param('id'));
        if ($class->loaded()){
            $subject = $class->subject;
            $this->template->body= View::factory('task/add')
                ->set('class', $class)
                ->set('subject', $subject);
        } else {
            echo "subject not found";
        }
    }

    public function action_savecat(){
        $name = trim($this->request->post('name'));
        $subject = ORM::factory('subject', $this->request->param('id'));
        if ($name != "" && $subject->loaded()){
            $taskcat = ORM::factory('task_category');
            $taskcat->subject_id = $subject->id;
            $taskcat->name = $name;
            $taskcat->description = "";
            $taskcat->save();
            $this->request->redirect('/subject/list#tab'.$subject->id);
        } else {
            $this->request->redirect('/task/addcat'.$subject->id);
        }
    }

    public function action_save(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        if ($subject->loaded()){
            $name = trim($this->request->post('name'));
            $description = trim($this->request->post('description'));
            $task_category_id = $this->request->post('task_category_id');
            $assigned_date = $this->request->post('assigned_date');

            if ($name == ""){
                die("enter name");
            }

            $task = ORM::factory('task');
            $task->task_category_id = $task_category_id;
            $task->name = $name;
            $task->description = $description;
            $task->assigned_date = $assigned_date;
            $task->subject_id = $subject->id;
            $task->ball = 1;

            $task->save();

            $this->push_message('Задание '.$name.' добавлено.');

            $class_id = $this->request->post('class_id');
            $this->request->redirect('/task/add/'.$class_id);
        } else {
            die("cannot find subject");
        }
    }

    public function action_update(){
        $task = ORM::factory('task', $this->request->param('id'));
        if (!$task->loaded())
            die();
        $student = $task->subject->group->students->where('id','=',$this->request->post('student_id'))->find();
        if ($student->loaded()){
            $task_student = ORM::factory('task_student')
                ->where('student_id','=', $student->id)
                ->and_where('task_id','=', $task->id)
                ->find();
            if ($task_student->loaded()){
                $task_student->delete();
                echo "unchecked";
            } else {
                $task_student = ORM::factory('task_student');
                $task_student->student_id = $student->id;
                $task_student->task_id = $task->id;
                $task_student->complete_date = time();
                $task_student->description = "";
                $task_student->save();
                echo "checked";
            }
        }
        die();
    }


    public function action_delcat(){
        $task_cat = ORM::factory('task_category', $this->request->param('id'));
        if ($task_cat->loaded()){
            $subject = $task_cat->subject;
            $task_cat->delete();
            $this->request->redirect('/subject/list#tab'.$subject->id);
        } else {
            echo "cannot delete group";
        }
    }

}
