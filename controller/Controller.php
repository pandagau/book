<?php 
	include_once("model/Model.php");  
  
	class Controller {  
	     public $model;   
	  
	     public function __construct()    
	     {    
	          $this->model = new Model();  
	     }   
	     public function invoke()  
	     {  
	          if (!isset($_GET['user']))  
	          {  
	               // no special book is requested, we'll show a list of all available books  
	               $books = $this->model->getBookList();  
	               include 'view/booklist.php'; 
	          } 
	          else 
	          { 	echo $_GET['user'];
	               // show the requested book 
	               $book = $this->model->getBook($_GET['user']); 
	               include 'view/viewbook.php';  
	          }  
	     }  
	     // Comment Bin
	}  
 ?>
