<?php

/**
 *
 */
class Login_ctrl extends CI_Controller
{
	public function index()
	{
		$this->load->view('login');
	}

	public function check()
	{
		$result = $this->Login_mdl->login();
		// echo $this->db->last_query(); exit;
		// print_R($result); exit;

		if ($result)
		{
			$session_data = array(
				'id'		=>	$result['id'],
				'name'  =>	$result['user_name'],
				'email'	=>	$result['users_email'],
				'type'	=>	$result['users_type']
			);

			$this->session->set_userdata('logged_in', $session_data);
			if($result['users_type']==1){
				redirect('category');
			}else{
				redirect('recipe');
			}

		}
		else
		{
			$data = array('error_message' => 'Invalid email or password or Type.');

			$this->load->view('login',$data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();

		redirect('login');
	}











}
?>
