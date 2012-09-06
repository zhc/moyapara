<? defined('SYSPATH') or die('No direct script access.');

class Controller_Student extends Controller_Website {

    public function action_list()
    {
        $group = ORM::factory('group', $this->request->param('id'));
        if ($group->loaded()){
            $view = View::factory('student/list');
            $view->group = $group;
            $view->students = $group->students->find_all();
            $this->template->body =$view;
        } else {
            echo "group not found";
        }

    }

    public function action_add()
    {
        $group = ORM::factory('group', $this->request->param('id'));
        if ($group->loaded()){
            $view = View::factory('student/add');
            $view->group = $group;
            $this->template->body =$view;
        } else {
            echo "group not found";
        }

    }    
    
    public function action_save(){
        $name = trim($this->request->post('name'));
        $group = ORM::factory('group', $this->request->param('id'));
        if ($name != "" && $group->loaded()){
            $student = ORM::factory('student');
            $student->name = $name;
            $student->group_id = $group->id;
            $student->save();
            $this->request->redirect('/student/list/'.$group->id);
        } else {
            echo "cannot add student";
        }
    }    

    public function action_delete(){
        $student = ORM::factory('student', $this->request->param('id'));
        $group = $student->group;
        if ($student->loaded()){
            $student->delete();
            $this->request->redirect('/student/list/'.$group->id);
        } else {
            echo "cannot delete student";
        }
    }    

}
