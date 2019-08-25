<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 public function __construct()
	 {
	    parent::__construct();
	    $this->load->helper('url');
		$this->load->model('model');
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->helper('string');
		$this->load->library('email');
	}

	function check_session()
	{
		if($this->session->userdata('mid_admin')) 
		{
			return true;
		}
		redirect('admin/login');
	}

	function login()
	{
		if($this->input->server('REQUEST_METHOD')=='POST')
		{
			$post_data= $this->input->post();
			$post_data['pass']= md5($post_data['pass']);
			// die()
			if ($this->model->login($post_data)) 
			{
				$this->session->set_userdata('mid_admin',$post_data['user_name']);
				$this->session->set_flashdata('success', 'Login Successful <br> Redirecting Dashboard.');
			}
			else
			{
				$this->session->set_flashdata('error','User Name Or Password Invalid.');
			}
			redirect('admin');
		}
		
		
		$this->load->view('login');
	}

	function index()
	{
		$this->check_session();
		$data['approval_requests']=$this->model->get('location_master',array('IsApproved'=>0));
		$data['locations']=$this->model->get('location_master',array('IsApproved'=>1));
		$this->load->view('header',$data);	
		$this->load->view('index');	
		$this->load->view('footer');	
	}

	function approval_requests()
	{
		$this->check_session();
		$data['approval_requests']=$this->model->get('location_master',array('IsApproved'=>0));
		$this->db->order_by('category','asc');
		$data['categories']=$this->model->get('categories_master');
		$data['photos']=$this->model->get('photo_master');
		$this->load->view('header',$data);	
		$this->load->view('approval_requests');	
		$this->load->view('footer');
	}

	function location_list()
	{
		$this->check_session();
		$this->db->order_by('IsApproved','desc');
		$data['approval_requests']=$this->model->get('location_master');
		$data['photos']=$this->model->get('photo_master');
		$this->db->order_by('category','asc');
		$data['categories']=$this->model->get('categories_master');
		$this->load->view('header',$data);	
		$this->load->view('location_list');	
		$this->load->view('footer');
	}

	function users_list()
	{
		$this->check_session();
		$this->db->order_by('first_name','desc');
		$data['users']=$this->model->get('app_user_master');
		$this->load->view('header',$data);	
		$this->load->view('users_list');	
		$this->load->view('footer');
	}

	public function location_approve($id,$status){	
		$data = array('IsApproved'=>$status);
		$this->model->update('location_master',$data,$id);
		$status = $this->model->get('location_master',array('id' => $id ))[0]->IsApproved;
		if($status ==1)
		{ ?>
			<button class="btn btn-success" onclick="location_approve(<?=$id?>,0)">Approved</button>
		<?php 
		}
		else
		{ ?>
			<button class="btn btn-danger " onclick="location_approve(<?=$id?>,1)">Not Approved</button>
		<?php
		}
	}
	public function active_user($id,$status){	
		$data = array('active'=>$status);
		$this->model->update('app_user_master',$data,$id);
		$status = $this->model->get('app_user_master',array('id' => $id ))[0]->active;
		if($status ==1){ ?>
			<button class="btn btn-success" onclick="active(<?=$id?>,0)">Active</button>
		<?php 
		}
		else { ?>
			<button class="btn btn-danger " onclick="active(<?=$id?>,1)">Not Active</button>
		<?php
		}
	}

	public function change_password()
	{
		$post_data=$this->input->post();
		
		$user_name = $this->session->userdata('mid_admin');
		$user=$this->model->get('admin',array('user_name' => $user_name ))[0];
		$pass=md5($post_data['password']);
		$new_pass=md5($post_data['user_password']);
		
		if ($user->pass==$pass) 
		{
			if($this->model->update('admin',array('pass'=>$new_pass),$user->id))
			{
				echo'Password Updated Successfully. Login Again With New Password.';
				$this->session->unset_userdata('mid_admin');
			}
			else
			{
				echo'Some error occured.';
			}
		}
		else
		{
			echo "Incorrect Password. Try Again";
		}
	}

	function logout()
	{
		$this->session->unset_userdata('mid_admin');
		redirect('admin/login');
	}
}
