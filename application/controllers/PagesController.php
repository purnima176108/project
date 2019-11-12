<?php

class PagesController extends CI_Controller{
	public function sample()
	{
		$this->load->view('sample');
	}
	public function sample2()
	{
		//$this->load->helper('url');
		$this->load->view('sample2');
	}
	public function sample3()
	{
		$this->load->view('sample3'); 
	}
}



?>