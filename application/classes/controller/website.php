<? defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller_Template {

    public $template;
    protected $user;

    public function before(){
        $this->template = View::factory('masterpage');
        $this->template->title = 'Моя Пара';
        $this->template->is_schedule_active= '';
        $this->template->is_group_active= '';
        $this->template->is_stat_active= '';

        $this->user = Auth::instance()->get_user();
        if (!$this->user){
            $this->user = false;
        }
        $this->template->user = $this->user;
    }

}
