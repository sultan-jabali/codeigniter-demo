<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{
    public function index()
    {
		$this->load->model('User_model');
		$data['users'] = $this->User_model->get_all();
        $this->load->view('users', $data);
    }

    public function add()
    {
        $this->load->view('add_user');
    }

	public function create()
    {
		$this->load->model('User_model');
		$post_data = $this->input->post();
		$this->User_model->create($post_data);
        redirect('User');
    }

    public function edit($id)
    {
        $this->load->model('User_model');
        $data['user'] = $this->User_model->get_by_id($id);
        $this->load->view('edit_user', $data);
    }
    
    public function update()
    {
        $id = $this->input->post('id'); // same as $_POST['id']
        $post_data = $this->input->post(); // same as $_POST

        $this->load->model('User_model');
        $this->User_model->update($id, $post_data);
        redirect('User/index');
    }

    public function delete($id) {
        $this->load->model('User_model');
        $this->User_model->delete($id);
        redirect('User/index');
    }

}
