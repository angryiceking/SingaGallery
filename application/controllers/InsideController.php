<?php

class InsideController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model(array('EntryModel', 'AdminAPIModel'));
    }

    public function gallery()
    {
        $data = array(
            'gallery' => $this->EntryModel->get_gallery()
        );
        $this->load_template('full-width.php', $data, null, null);
    }

    public function blogs()
    {
        $data = array(
            'events' => $this->AdminAPIModel->get('events'),
            'blogs' => $this->AdminAPIModel->get('blogs'),
        );
        $this->load_template('contact.php', $data, null, null);
    }

    public function events()
    {
        $data = array(
            'events' => $this->AdminAPIModel->get('events'),
        );
        $this->load_template('carousel.php', $data, null, null);
    }

    public function contact()
    {
        $data = array(
            'gallery' => $this->EntryModel->get_gallery()
        );
        $this->load_template('contact.php', $data, null, null);
    }

    public function aboutus()
    {
        $this->load_template('about.php', null, null, null);
    }
}