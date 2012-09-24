<?
class Model_Schedule extends Model{

    public $month_names = array(
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
        4 => 'Апрель',
        5 => 'Май',
        6 => 'Июнь',
        7 => 'Июль',
        8 => 'Август',
        9 => 'Сентябрь',
        10 => 'Октябрь',
        11 => 'Ноябрь',
        12 => 'Декабрь',
    );
    private $weeks = null;

    private function five_weeks($begin){
        return array(
            $this->get_week($begin + 0*60*60*24*7),
            $this->get_week($begin + 1*60*60*24*7),
            $this->get_week($begin + 2*60*60*24*7),
            $this->get_week($begin + 3*60*60*24*7),
            $this->get_week($begin + 4*60*60*24*7),
        );
    }

    public function mondays(){
        $months = array();
        $d = strtotime('sep 1 monday');
        $m = 9;
        if (date('m') < 9){
            $d = strtotime('sep 1 '.(date('Y')-1).' monday');
        }
        while($m != 8){
            if (date('d', $d) > 1){
                $d = strtotime('-1 week', $d);
            }
            $months[$m] = $d;
            do {
                $d = strtotime('+1 week', $d);
            } while(date('m', $d) == $m);
            $m++;
            if ($m > 12){
                $m = 1;
            }
        }
        return $months;
    }

    public function weeks(){
        if ($this->weeks != null)
            return $this->weeks;

        $begin = strtotime('next monday') - 60*60*24*7;
        return array(
            $this->get_week($begin + 0*60*60*24*7),
            $this->get_week($begin + 1*60*60*24*7)
        );
    }

    public function set_month($month){
        if ($month > 0 and $month < 13){
            $mondays = $this->mondays();
            $this->weeks = $this->five_weeks( $mondays[$month] );
        }
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