<? defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Пользователь
 * Date: 01.09.12
 * Time: 23:20
 * To change this template use File | Settings | File Templates.
 */
class Controller_Subject extends Controller {

    public function action_group(){
        $group_id = $this->request->param('id');
        $group = ORM::factory('group', $group_id);
        if ($group->loaded()){
            $subjects = ORM::factory('subject')->where('group_id', '=', $group_id)->find_all();
            $classes = ORM::factory('class')->
                where('subject_id', 'in', DB::select('id')->from('subjects')->where('group_id', '=', $group_id))->find_all();
            $view = View::factory('subject/list');
            $view->subjects = $subjects;
            $view->group = $group;
            $view->classes = $classes;
            $this->response->body($view);
        } else {
            echo "group not found";
        }
    }

    public function action_add(){
        $this->response->body(View::factory('subject/add')->set('group_id', $this->request->param('id')));
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


}
