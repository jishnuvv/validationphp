<?php
class Login extends CI_controller
{
	public function loginService()
	{
		$user['mobileno']=$this->input->get_post('email');
		$user['password']=$this->input->get_post('password');
		
		$this->load->model('loginm');
		$this->loginm->loginmService($user);

	}
	

}

?>