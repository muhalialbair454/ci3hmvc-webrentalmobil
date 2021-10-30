<?php

class Home  extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MHome");
    }

    public function callHome()
    {
        $data['mainContent'] = "home/v_home";
        $data['title'] = "Homepage";

        // Load Templates
        $this->templates->exampleTemplates($data);
    }
}
