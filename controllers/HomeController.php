<?php

class HomeController extends BaseController
{
    function index() {
        $lastPosts = $this->model->getLastPosts();
        $this->posts = array_slice($lastPosts, 0 , 3);
        $this->sidebarPosts = $lastPosts;
    }
	
	function view($id) {
       $this->post = $this->model->getPostById($id);
        if(!($this->post))
        {
            $this->addErrorMessage("No such post!");
            $this->redirect("");
        }
    }
}
