<? defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Пользователь
 * Date: 01.09.12
 * Time: 23:20
 * To change this template use File | Settings | File Templates.
 */
class Controller_Class extends Controller {

    public function action_add(){
        $group = ORM::factory('group', $this->request->param('id'));
        $subjects = ORM::factory('subject')->where('group_id', '=', $group->id)->find_all();
        if ($group->loaded() && $subjects->count() > 0){
            $this->response->body(View::factory('class/add')->set('subjects', $subjects)->set('group', $group));
        } else {
            echo "group or subjects not found";
        }
    }

    public function action_save(){
        $subject = ORM::factory('subject', $this->request->post('subject'));
        if ($subject->loaded()){
            $class = ORM::factory('class');
            $class->subject_id = $subject->id;
            $class->date = time();
            $class->save();
            $this->request->redirect('/subject/group/'.$this->request->param('id'));
        }
    }

}
