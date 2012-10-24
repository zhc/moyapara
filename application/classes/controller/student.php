<? defined('SYSPATH') or die('No direct script access.');

class Controller_Student extends Controller_Secured {

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
            $this->request->redirect('/group/list#tab'.$group->id);
        } else {
            echo "cannot add student";
        }
    }    

    public function action_delete(){
        $student = ORM::factory('student', $this->request->param('id'));
        if ($student->loaded()){
            $group = $student->group;
            $student->delete();
            $this->request->redirect('/group/list#tab'.$group->id);
        } else {
            echo "cannot delete student";
        }
    }    

}
