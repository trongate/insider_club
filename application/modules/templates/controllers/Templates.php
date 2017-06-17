<?php
class Templates extends MX_Controller 
{

function __construct() 
{
    parent::__construct();
}

function public_template($data=null)
{
	if (!isset($data['view_module'])) {
		$data['view_module'] = $this->uri->segment(1);
	}
	
    $this->load->view('public', $data);
}

function _draw_right_side()
{
    $this->load->view('right_side');
}

}