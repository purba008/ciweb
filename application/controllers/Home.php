<?php

class Home extends CI_Controller{
	public function index()
	{
		echo 'Study WEB Framework';
	}
	public function tampil()
	{
		return $this->load->view('v_tampil');
	}
}
