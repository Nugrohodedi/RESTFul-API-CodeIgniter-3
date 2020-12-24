<?php

// import library dari REST_Controller
require APPPATH . 'libraries/REST_Controller.php';

// extends class dari REST_Controller
class TestApi extends REST_Controller{

  // constructor
  public function __construct(){
    parent::__construct();
  }

  public function index_get(){

    // testing response
    $response['status']=200;
    $response['error']=false;
    $response['message']='Hai from response';

    // tampilkan response
    $this->response($response);

  }

  public function user_get(){

    // testing response
    $response['status']=200;
    $response['error']=false;
    $response['user']['username']='dedi';
    $response['user']['email']='dediblog1@gmail.com';
    $response['user']['detail']['full_name']='Dedi Nugroho';
    $response['user']['detail']['position']='Web Developer';
    $response['user']['detail']['specialize']='Website';

    //tampilkan response
    $this->response($response);

  }

}

?>
