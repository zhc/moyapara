<? defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller_Template {

    public $template;
    protected $user;
    private $popup_messages = array();

    public function before(){
        $this->template = View::factory('masterpage');
        $this->template->title = 'Моя Пара';
        $this->template->is_schedule_active= '';
        $this->template->is_group_active= '';
        $this->template->is_stat_active= '';
        $this->template->is_subject_active= '';

        $this->user = Auth::instance()->get_user();
        if (!$this->user){
            $this->user = false;
        }
        $this->template->user = $this->user;
    }

    public function after(){
        $messages = Session::instance()->get('popup_message');
        $s = '';
        if ($messages != NULL){
            while(count($messages) > 0){
                $m = array_pop($messages);
                $s .= html::chars($m).'<br/>';
            }
            Session::instance()->delete('popup_message');
        }
        $this->template->popup_message = $s;
        parent::after();
    }

    public function push_message($message){
        $messages = Session::instance()->get('popup_message');
        if ($messages == NULL){
            $messages = array();
        }
        array_push($messages, $message);
        Session::instance()->set('popup_message', $messages);
    }
}
