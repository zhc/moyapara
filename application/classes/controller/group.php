<? defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends Controller_Secured {

    public function action_add(){
        $this->template->body= View::factory('group/add');
    }

    public function action_list()
    {
        $groups = ORM::factory('group')->find_all();
        $view = View::factory('group/list');
        $view->groups = $groups;
        $this->template->body = $view;
        $this->template->is_group_active = ' class="active"';
    }

    public function action_stat()
    {
        $groups = ORM::factory('group')->find_all();
        $view = View::factory('group/stat');
        $view->groups = $groups;
        $this->template->body = $view;
        $this->template->is_stat_active = ' class="active"';
    }

    public function action_save(){
        $name = trim($this->request->post('name'));
        if ($name != ""){
            $group = ORM::factory('group');
            $group->name = $name;
            $group->save();
            $this->request->redirect('/group/list#tab'.$group->id);
        } else {
            $this->request->redirect('/group/add');
        }
    }

    public function action_delete(){
        $group = ORM::factory('group', $this->request->param('id'));
        if ($group->loaded()){
            $group->delete();
            $this->request->redirect('/group/list');
        } else {
            echo "cannot delete group";
        }
    }

}
