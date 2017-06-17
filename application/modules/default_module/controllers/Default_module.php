<?php
class Default_module extends MX_Controller 
{

//module that loads by default

function __construct() 
{
    parent::__construct();
}

function test()
{
    //attempt to load content from webpages table
    $first_bit = trim($this->uri->segment(1));

    $this->load->module('webpages');
    $query = $this->webpages->get_where_custom('page_url', $first_bit);
    $num_rows = $query->num_rows();
    
    if ($num_rows > 0){
        //we have found content
        foreach ($query->result() as $row){
            $data['page_title'] = $row->page_title;
            $data['page_url'] = $row->page_url;
            $data['page_keywords'] = $row->page_keywords;
            $data['page_description'] = $row->page_description;
            $data['page_content'] = $row->page_content;
        }
    }
    else{
        //page not found
        $this->load->module('site_settings');
        $data['page_content'] = "<h1>Page Not Found</h1>";
        $data['page_title'] = 'Page Not Found';
    }
    $template = 'public';

    $this->load->module('templates');
    $this->templates->$template($data); 
}

function index()
{
    //attempt to load content from webpages table
    $first_bit = trim($this->uri->segment(1));

    $this->load->module('webpages');
    $query = $this->webpages->get_where_custom('page_url', $first_bit);
    $num_rows = $query->num_rows();
    
    if ($num_rows > 0){
        //we have found content
        foreach ($query->result() as $row){
            $data['page_title'] = $row->page_title;
            $data['page_url'] = $row->page_url;
            $data['page_keywords'] = $row->page_keywords;
            $data['page_description'] = $row->page_description;
            $data['page_content'] = $row->page_content;
        }
    }
    else{
        //page not found
        $this->load->module('site_settings');
        $data['page_content'] = "<h1>Page Not Found</h1>";
        $data['page_title'] = 'Page Not Found';
    }

    $template = 'public_template';

    $this->load->module('templates');
    $this->templates->$template($data);

}

}//end class