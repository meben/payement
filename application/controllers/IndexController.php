<?php

class IndexController extends Zend_Controller_Action
{
    function indexAction()
    {
        $this->view->pageTitle = "Zend_Form Example";
        $this->view->bodyCopy = "<p>Please fill out this form.</p>";

        $form = new Application_Form_ContactForm();

        $this->view->form = $form;
    }
   
    
    function contactAction()
    {
    	$this->view->pageTitle = "Zend_Form contact 2";
    	$this->view->bodyCopy = "<p>Please fill out this form.</p>";
    
    	$form = new Application_Form_ContactForm();
    
    	$this->view->form = $form;
    	
    	
    }
    
    function sendmailAction()
    {
    	$this->view->pageTitle = "Zend_Form contact 2";
    	$this->view->bodyCopy = "<p>Please fill out this form.</p>";
    
    	$form = new Application_Form_ContactForm();
    
    	$this->view->form = $form;
    }
}