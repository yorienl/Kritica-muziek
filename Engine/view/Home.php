<?php
namespace Engine\View;

class Home implements View
{
    
    private $content;

    public function __construct()
    {
        
    }
    
    public function view()
    {
        echo $this->content;
    }
    
}