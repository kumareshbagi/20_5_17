
<?php
class Test extends CI_Controller {

public function index()
	{
		$this->load->model('my_model');
		$this->load->database();
		$this->load->my_model->get_entry();
		//$this->load->view('test'); 
	}

      public function two()
	{
		$this->load->view('t1');
	}
  
	public function three()
	{
		$this->load->view('fb');
	}
   public function four()
	{
		
		$this->load->view('test');
	}
  }
?>
