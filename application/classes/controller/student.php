<? defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Пользователь
 * Date: 01.09.12
 * Time: 23:20
 * To change this template use File | Settings | File Templates.
 */
class Controller_Student extends Controller {

    public function action_list()
    {
        $group = ORM::factory('group', $this->request->param('id'));
        if ($group->loaded()){
            $view = View::factory('student/list');
            $view->group = $group;
            $view->students = $group->students->find_all();
            $this->response->body($view);
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
            $this->response->body($view);
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
