<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndividualController extends CI_Controller {

	public function index()
	{
		$this->load->view('homepage');
	}

	public function register_individual()
	{
		$this->load->view('register_individual');
	}

	public function donate_now()
	{
		$this->form_validation->set_rules('amount', 'donation amount', 'trim|alpha_numeric_spaces|required');
		$this->form_validation->set_rules('timeframe', 'time period', 'required');
		$this->form_validation->set_rules('iban_agree', 'IBAN agreement', 'required');
		$this->form_validation->set_rules('iban', 'IBAN', 'required|min_length[18]|max_length[18]'); 
		$this->form_validation->set_rules('paymentmethod', 'payment method', 'required');
		$this->form_validation->set_rules('firstname', 'first name', 'alpha|required');   
		$this->form_validation->set_rules('lastname', 'last name', 'alpha|required');  
		$this->form_validation->set_rules('email', 'e-mail', 'valid_email|required|is_unique[donors.email]');  
		$this->form_validation->set_rules('password', 'password', 'min_length[7]|required'); 
		$this->form_validation->set_rules('confirm_password', 'password confirmation', 'matches[password]'); 

		if ($this->form_validation->run() === false) {
			$data['errorsRegister'] = validation_errors();
			$this->load->view('register_individual', $data); 
		} else {
			$info = $this->input->post(NULL, TRUE);

			// echo '<pre>';
			// var_dump($info);
			// echo '</pre>';
			// die();
			 
			$info['password'] = $this->encryption->encrypt($info['password']);

			$donordata = array(  
				'timetype' => $info['timeframe'],	
				'bankaccount' => $info['iban'],
				'firstname' => $info['firstname'],
				'lastname' => $info['lastname'],
				'email' => $info['email'],
				'password' => $info['password']
			);

			$donationdata = array(
				'amount' => $info['amount']
				# also insert the donor id here, which is auto-incremented from table donors
	
			);

			$this->load->model('individual');
			$this->individual->add_donor($donordata);
			$this->individual->add_donation($donationdata);

			$reg['success'] = "Congratulations " . $donordata['firstname'] . ", your donation has been registered successfully!";
			$this->load->view('register_individual', $reg); # adjust the view

		}
	}
}
