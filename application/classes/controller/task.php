<? defined('SYSPATH') or die('No direct script access.');

class Controller_Task extends Controller_Website {

    public function action_addcat(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        if ($subject->loaded()){
            $this->template->body= View::factory('task/addcat')->set('subject', $subject);
        } else {
            echo "subject not found";
        }
    }

    public function action_add(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        if ($subject->loaded()){
            $this->template->body= View::factory('task/add')->set('subject', $subject);
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
            $this->request->redirect('/subject/list/'.$subject->id);
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

            if ($name == ""){
                die("enter name");
            }

            $task = ORM::factory('task');
            $task->task_category_id = $task_category_id;
            $task->name = $name;
            $task->description = $description;
            $task->assigned_date = time();
            $task->subject_id = $subject->id;
            $task->ball = 1;

            $task->save();

            $this->request->redirect('/subject/list/'.$subject->id);
        } else {
            die("cannot find subject");
        }
    }


    public function action_delcat(){
        $task_cat = ORM::factory('task_category', $this->request->param('id'));
        if ($task_cat->loaded()){
            $subject = $task_cat->subject;
            $task_cat->delete();
            $this->request->redirect('/subject/list/'.$subject->id);
        } else {
            echo "cannot delete group";
        }
    }

}