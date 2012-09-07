<? defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends Controller_Website {

    public function action_add(){
        $this->template->body= View::factory('group/add');
    }

    public function action_list()
    {
        $group = ORM::factory('group', $this->request->param('id'));
        if ($group->loaded()){
            $groups = ORM::factory('group')->find_all();

            $subjects = $group->subjects->find_all();

            $classes = ORM::factory('class')
                ->select()
                ->where('subject_id', 'in', DB::select('id')->from('subjects')->where('group_id', '=', $group->id))
                ->order_by('date', 'asc')
                ->find_all();

            $view = View::factory('group/list2');
            $view->subjects = $subjects;
            $view->group = $group;
            $view->groups = $groups;
            $view->classes = $classes;
            $this->template->body = $view;
        } else {
            $groups = ORM::factory('group')->find_all();
            $view = View::factory('group/list');
            $view->groups = $groups;
            $this->template->body = $view;
        }
    }

    public function action_save(){
        $name = trim($this->request->post('name'));
        if ($name != ""){
            $group = ORM::factory('group');
            $group->name = $name;
            $group->save();
            $this->request->redirect('/group/list/'.$group->id);
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
