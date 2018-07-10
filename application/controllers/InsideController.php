<?php

class InsideController extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function gallery()
    {
        $this->load_template('full-width.php', null, null, null);
    }

    public function blogs()
    {
        $this->load_template('full-width.php', null, null, null);
    }

    public function events()
    {
        $this->load_template('carousel.php', null, null, null);
    }

    public function contact()
    {
        $this->load_template('contact.php', null, null, null);
    }

    public function aboutus()
    {
        $this->load_template('about.php', null, null, null);
    }
}