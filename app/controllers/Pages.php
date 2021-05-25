<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        echo 'page class is loaded<br>';
    }

    public function index(){
        echo 'index mehod is loaded<br>';
        $this->view('index');
    }

    public function about(){
        echo 'about mehod is loaded<br>';
        $this->view('about');
    }
}