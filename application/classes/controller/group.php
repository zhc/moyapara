<? defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Пользователь
 * Date: 01.09.12
 * Time: 23:20
 * To change this template use File | Settings | File Templates.
 */
class Controller_Group extends Controller {

    public function action_add(){
        $this->response->body(View::factory('group/add'));
    }

    public function action_list()
    {
        $groups = ORM::factory('group')->find_all();
        $view = View::factory('group/list');
        $view->groups = $groups;
        $this->response->body($view);
    }

    public function action_save(){
        $name = trim($this->request->post('name'));
        if ($name != ""){
            $group = ORM::factory('group');
            $group->name = $name;
            $group->save();
            $this->request->redirect('/group/list');
        } else {
            $this->request->redirect('/group/add');
        }
    }

}
