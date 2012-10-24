<? defined('SYSPATH') or die('No direct script access.');

class Controller_Subject extends Controller_Secured {

    public function action_list(){
        $subjects = ORM::factory('subject')->order_by('name')->find_all();
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
            die("cannot add subject");
        }
    }

    public function action_delete(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        if ($subject->loaded()){
            $subject->delete();
            $this->request->redirect('/subject/list');
        } else {
            die("cannot delete subject");
        }
    }

    public function action_stat(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        if ($subject->loaded()){
            $group = $subject->group;
            $students = $group->students->order_by('name')->find_all();

            $view = View::factory('subject/stat');
            $view->subject = $subject;
            $view->classes = $subject->classes->find_all();
            $view->students = $students;
            $view->group = $group;
            $view->tasks = $subject->tasks->find_all();

            $this->template->body = $view;
            $this->template->is_stat_active = ' class="active"';

        } else {
            die("cannot find subject");
        }
    }

}
