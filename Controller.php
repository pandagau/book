<?php 
//add comment commit
	include_once("model/Model.php");  
  //edit lan 2 hien ...
  ////edit by Kien
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
	          //add comment
	     }  
	}  
 ?>
