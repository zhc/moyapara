<? defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller_Template {

    public $template;

    public function before(){
        $this->template = View::factory('masterpage');
        $this->template->title = 'СуперТитл';
        $this->template->is_schedule_active= '';
        $this->template->is_group_active= '';
        $this->template->is_stat_active= '';
    }

}
