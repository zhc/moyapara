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

    public function action_delete(){
        $class = ORM::factory('class', $this->request->param('id'));
        if ($class->loaded())
            $class->delete();
        $this->request->redirect('/subject/group/'.$this->request->param('group_id'));
    }

    public function action_save(){
        $subject = ORM::factory('subject', $this->request->post('subject'));
        if ($subject->loaded()){
            $date = $this->request->post('date');
            $time = $this->request->post('time');
            $until = $this->request->post('until_date');
            $period = $this->request->post('period');

            $summator = 0;
            if ($period == 1){
                $summator = 60 * 60 * 24 * 7; //week
            } else if ($period == 2){
                $summator = 60 * 60 * 24 * 7 * 2; //2 weeks
            }
            $from = strtotime($date.' '.$time);
            $until = strtotime($until) + 60 * 60 * 24;

            $classes = ORM::factory('class')->where('subject_id','=', $subject->id)->find_all();
            $i = $from;
            do{
                $found = false;
                foreach($classes as $class){
                    if ($class->date == $i){
                        $found = true;
                        break;
                    }
                }
                if (!$found){
                    $class = ORM::factory('class');
                    $class->subject_id = $subject->id;
                    $class->date = $i;
                    $class->save();
                }
                $i += $summator;
            }while($i < $until);
            $this->request->redirect('/subject/group/'.$this->request->param('id'));
        }
    }

}
