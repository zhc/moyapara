<? defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Пользователь
 * Date: 01.09.12
 * Time: 23:20
 * To change this template use File | Settings | File Templates.
 */
class Controller_Subject extends Controller_Website {

    public function action_group(){
        $group = ORM::factory('group', $this->request->param('id'));
        if ($group->loaded()){
            $subjects = $group->subjects->find_all();
            
            $classes = ORM::factory('class')
                ->select()
                ->where('subject_id', 'in', DB::select('id')->from('subjects')->where('group_id', '=', $group->id))
                ->order_by('date', 'asc')
                ->find_all();
            
            $view = View::factory('subject/group');
            $view->subjects = $subjects;
            $view->group = $group;
            $view->classes = $classes;
            $this->template->body = $view;
        } else {
            echo "group not found";
        }
    }
    
    public function action_list(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        $group = $subject->group;
        if ($subject->loaded()){
            $view = View::factory('subject/list');
            $view->group = $group;
            $view->subject = $subject;
//            $view->classes = $subject->classes->find_all();
            $view->classes = $subject->classes->where('date', '<', time()+60*60*24)->find_all();
            $view->students = $group->students->find_all();
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
            $this->request->redirect('/subject/group/'.$group_id);
        } else {
            echo "cannot add subject";
        }
    }

    public function action_delete(){
        $subject = ORM::factory('subject', $this->request->param('id'));
        $group = $subject->group;
        if ($subject->loaded()){
            $subject->delete();
            $this->request->redirect('/subject/group/'.$group->id);
        } else {
            echo "cannot delete subject";
        }
    }

}
