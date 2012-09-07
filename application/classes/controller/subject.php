<? defined('SYSPATH') or die('No direct script access.');

class Controller_Subject extends Controller_Website {

    public function action_list(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        $group = $subject->group;
        if ($subject->loaded()){
            $view = View::factory('subject/list');
            $view->group = $group;
            $view->subject = $subject;

            //посещаемость
            $view->classes = $subject->classes->where('date', '<', time()+60*60*24)->find_all();
            $view->students = $group->students->find_all();

            //задания
            $view->task_categories = $subject->task_categories->find_all();
            $view->tasks = $subject->tasks->find_all();

            $this->template->body = $view;
        }
    }

    public function action_add(){
        $this->template->body = View::factory('subject/add')->set('group_id', $this->request->param('id'));
    }

    public function action_save(){
        $name = trim($this->request->post('name'));
        $group_id = $this->request->param('id');
        $group = ORM::factory('group', $group_id);
        if ($name != "" && $group->loaded()){
            $group = ORM::factory('subject');
            $group->name = $name;
            $group->group_id = $group_id;
            $group->save();
            $this->request->redirect('/group/list/'.$group_id);
        } else {
            echo "cannot add subject";
        }
    }

    public function action_delete(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        $group = $subject->group;
        if ($subject->loaded()){
            $subject->delete();
            $this->request->redirect('/group/list/'.$group->id);
        } else {
            echo "cannot delete subject";
        }
    }

}
