<?php

require APPPATH . 'libraries/REST_Controller.php';

class Person extends REST_Controller{

  // construct
  public function __construct(){
    parent::__construct();
    $this->load->model('PersonM');
  }

  // function index untuk menampilkan semua data person menggunakan function get
  public function index_get(){
    $response = $this->PersonM->all_person();
    $this->response($response);
  }

  // untuk menambah person menaggunakan function post
  public function add_post(){
    $response = $this->PersonM->add_person(
        $this->post('name'),
        $this->post('address'),
        $this->post('phone')
      );
    $this->response($response);
  }

  // update data person menggunakan function put
  public function update_put(){
    $response = $this->PersonM->update_person(
        $this->put('id'),
        $this->put('name'),
        $this->put('address'),
        $this->put('phone')
      );
    $this->response($response);
  }

  // hapus data person menggunakan function delete
  public function delete_delete(){
    $response = $this->PersonM->delete_person(
        $this->delete('id')
      );
    $this->response($response);
  }

}

?>

<!-- semangat -->