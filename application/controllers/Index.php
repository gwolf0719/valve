<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Index extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // 語系設定
        $this->language = $this->mod_config->getLanguage();
    }

	public function index() {
		$this->load->view('welcome_message');
    }
    public function setting_list(){
        $data = array(
            "path"=>"setting_list"
        );
        $this->load->view('pages/_layout',$data);
    }
    public function down_json($key){
        $array["0"][] = array(
            "start"=>'20180902',
            "end"=>'20181010',
            "max"=>'0',
            "min"=>'0'
        );
        
        $array["1"][] = array(
            "start"=>'20180902',
            "end"=>'20180908',
            "max"=>'50',
            "min"=>'40'
        );
        $array["1"][] = array(
            "start"=>'20180909',
            "end"=>'20180930',
            "max"=>'40',
            "min"=>'20'
        );
        $array["1"][] = array(
            "start"=>'20181001',
            "end"=>'20181005',
            "max"=>'30',
            "min"=>'10'
        );

        $array["2"][] = array(
            "start"=>'20180902',
            "end"=>'20181010',
            "max"=>'100',
            "min"=>'90'
        );


        header('Content-type:text/json');
        echo json_encode($array[$key],JSON_UNESCAPED_UNICODE);
    }
    

    function view($page = 'index') {
        if (!file_exists('application/views/pages/'.$page.'.php')) show_404();
	    $pageInfo['title'] = ucfirst($page); // 第一個字母大寫
        $this->load->view('pages/'.$page, $pageInfo);
    }
  
}

?>