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
        $this->load->model('get_in_touch');

        $firstName = $this->input->post('c_fname');
        $lastName = $this->input->post('c_lname');
        $email = $this->input->post('c_email');
        $subject = $this->input->post('c_subject');
        $message = $this->input->post('c_message');

        $newMessage = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );

        $this->get_in_touch->add($newMessage);
        redirect('thankyou');
    }
}