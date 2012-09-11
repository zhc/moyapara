<?
class Model_Schedule extends Model{

    public function curr_week(){
        $monday = 'monday';
        if (time() < strtotime('monday'))
            $monday = 'previous monday';
        return $this->get_week(strtotime($monday));
    }

    public function next_week(){
        return $this->get_week(strtotime('next monday'));
    }

    private function get_week($begin_date){
        $end_date = $begin_date + 60*60*24*7;

        $classes =ORM::factory('class')
            ->where('date', '>', $begin_date)
            ->and_where('date', '<', $end_date)
            ->order_by('date', 'asc')
            ->find_all();

        $days = array();
        for($i= $begin_date; $i < $end_date; $i += 60*60*24 ){
            $days[$i] = array(
                'date' => 0,
                'classes' => array()
            );
            $days[$i]['date'] = $i;

            foreach($classes as $class){
                if ($class->date >= $i && $class->date < $i + 60*60*24){
                    array_push($days[$i]['classes'], $class);
                }
            }
        }
        return $days;
    }

}
?>