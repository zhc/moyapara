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


}
