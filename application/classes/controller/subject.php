<? defined('SYSPATH') or die('No direct script access.');

class Controller_Subject extends Controller_Secured {

    public function action_list(){
        $subjects = ORM::factory('subject')->find_all();
        $view = View::factory('subject/list');
        $view->subjects = $subjects;
        $this->template->body = $view;
        $this->template->is_subject_active = ' class="active"';
    }

    public function action_add(){
        $groups = ORM::factory('group')->find_all();
        $this->template->body = View::factory('subject/add')->set('groups', $groups);
    }

    public function action_save(){
        $name = trim($this->request->post('name'));
        $group_id = trim($this->request->post('group_id'));
        $group = ORM::factory('group', $group_id);
        if ($name != "" && $group->loaded()){
            $group = ORM::factory('subject');
            $group->name = $name;
            $group->group_id = $group_id;
            $group->save();
            $this->request->redirect('/subject/list#tab'.$group->id);
        } else {
            echo "cannot add subject";
        }
    }

    public function action_delete(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        $group = $subject->group;
        if ($subject->loaded()){
            $subject->delete();
            $this->request->redirect('/subject/list');
        } else {
            echo "cannot delete subject";
        }
    }

}
