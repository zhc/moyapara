<? defined('SYSPATH') or die('No direct script access.');

class Controller_Class extends Controller_Website {

    public function action_add(){
        $group = ORM::factory('group', $this->request->param('id'));
        $subjects = ORM::factory('subject')->where('group_id', '=', $group->id)->find_all();
        if ($group->loaded() && $subjects->count() > 0){
            $this->template->body = View::factory('class/add')->set('subjects', $subjects)->set('group', $group);
        } else {
            die("group or subjects not found");
        }
    }
    
    public function action_delete(){
        $class = ORM::factory('class', $this->request->param('id'));
        if ($class->loaded()){
            $group = $class->subject->group;
            $class->delete();
            $this->request->redirect('/group/list/'.$group->id);
        } else {
            die("cannot delete class");
        }
    }


    //Студенты могут не соответствовать предмету
    public function action_presence(){
        $class_id = $this->request->post("classId");
        $was = $this->request->post("was");
        $absent = $this->request->post("absent");

        //соединяем в один словарь
        $student_presence = array();
        if (count($was) > 0)
            foreach($was as $student_id){
                $student_presence[$student_id] = 1;
            }
        if (count($absent) > 0)
            foreach($absent as $student_id){
                $student_presence[$student_id] = 0;
            }

        //Защита от студентов из другой группы
        $class = ORM::factory('class', $class_id);
        if ($class->loaded()){
            $students = $class->subject->group->students->find_all();
            foreach($student_presence as $student_id => $val){
                $found = false;
                foreach($students as $s){
                    if ($s->id == $student_id){
                        $found = true;
                        break;
                    }
                }
                if (!$found){
                    die("student doesn't belong to subject group");
                }
            }
        }

        //сохранение
        $presences = ORM::factory('class_presence')->where('class_id', '=', $class_id)->find_all();
        foreach($student_presence as $student_id => $val){
            $presence = null;
            foreach($presences as $p){
                if ($p->student_id == $student_id){
                    $presence = $p;
                    break;
                }
            }
            if ($presence == null){
                $presence = ORM::factory('class_presence');
                $presence->class_id = $class_id;
                $presence->student_id = $student_id;
            }
            $presence->presence = $val;
            $presence->save();
        }

        //Нужно чтобы masterpage не ругался
        die();
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
            $this->request->redirect('/group/list/'.$this->request->param('id'));
        } else {
            die("group not found");
        }
    }

}
