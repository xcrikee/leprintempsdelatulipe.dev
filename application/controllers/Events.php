<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Events extends MY_Controller {
    public function __construct(){
        parent::__construct();
       
    }
    public function index()
    {
       $this->render('main/events', 'template/base/index'); 
    }
}