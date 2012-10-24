<? defined('SYSPATH') or die('No direct script access.');

class Controller_Class extends Controller_Secured {

    public function action_add(){
        $groups = ORM::factory('group')->find_all();
        $this->template->body = View::factory('class/add')
            ->set('groups', $groups);
    }

    public function action_delete(){
        $class = ORM::factory('class', $this->request->param('id'));
        if ($class->loaded()){
            $group = $class->subject->group;
            $class->delete();
            $this->request->redirect('/class/schedule');
        } else {
            die("cannot delete class");
        }
    }

    public function action_presence(){
        $class_id = $this->request->param('id');
        $student_id = $this->request->post('student_id');

        $class = ORM::factory('class', $class_id);
        $student = ORM::factory('student', $student_id);

        if (!$class->loaded()){
            die('class not found');
        }
        if (!$student->loaded()){
            die('student not found');
        }
        if ($class->subject->group->id != $student->group->id){
            die('class and student are from different groups');
        }
        if (time() < $class->date){
            die('cannot change future');
        }

        $presence = ORM::factory('class_presence')->where('class_id', '=', $class_id)->and_where('student_id', '=', $student_id)->find();
        if ($presence->loaded()){
            $presence->delete();
            die('unchecked');
        } else {
            $presence = ORM::factory('class_presence');
            $presence->class_id = $class_id;
            $presence->student_id = $student_id;
            $presence->save();
            die('checked');
        }
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
            $this->request->redirect('/class/schedule');
        } else {
            die("subject not found");
        }
    }

    public function action_schedule(){
        $schedule = Model::factory('schedule');
        $month = $this->request->param('id');
        $schedule->set_month($month);
        $this->template->is_schedule_active = ' class="active"';
        $this->template->body = View::factory('class/schedule')
            ->set('schedule', $schedule);
    }

    public function action_students(){
        $class_id = $this->request->param('id');
        $class = ORM::factory('class', $class_id);
        if ($class->loaded()){
            $students = $class->subject->group->students->order_by('name')->find_all();
            $this->template = View::factory('class/students')
                ->set('class', $class)
                ->set('students', $students)
                ->set('group', $class->subject->group);
        } else {
            $this->template = View::factory('class/empty');
        }
    }

}
