<?php


class Contact extends CI_Controller{
    public function index(){


        $data['judul'] = 'About';
        $this->load->view('templates/header', $data);
        $this->load->view('home/contact');
        $this->load->view('templates/footer');
    }


    
     public function send()
    {
        $data = array(

				'firstName'		=> $this->input->post('c_fname'),
				'lastName'		=> $this->input->post('c_lname'),
				'email'			=> $this->input->post('c_email'),
				'subject'		=> $this->input->post('c_subject'),
				'message'		=> $this->input->post('c_message'),
	
			);

			$this->db->insert('tb_contactus', $data);
			redirect('contact');
    }

	public function subscribe()
	    {
	        $data = array(
					'email'			=> $this->input->post('s_email'),
				);

				$this->db->insert('tb_subscribe', $data);
				redirect('home');
	    }


}