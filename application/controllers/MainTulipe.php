<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MainTulipe extends MY_Controller {
    public function __construct(){
        parent::__construct();
        // charge notre model
        //$this->load->model('');
        $this->load->helper('form'); 
        $this->load->library('session');
        }
    public function index()
    {
        $this->render('main/index', 'template/base/home');
    }
}