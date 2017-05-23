<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Events extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("events_mdl");
        
       
    }
    public function index()
    {
       $this->data["query"] = $this->events_mdl->get_where();
       $this->render('main/events', 'template/base/index'); 
    }
}