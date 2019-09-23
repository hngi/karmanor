<?php
    class goaltracker{
    	  private $db_server = "localhost";
          private $db_name = "goaltracker";
          private $db_user = "root";
          private $db_pass = ""; 

       
     function signIn($username, $password){

      
     } 

     function access_control(){
			ob_start();
		    @session_start();

		    if(!isset($_SESSION['username'])){
				header('location: login.php');
			}
	 }	

     function userexists($username){


     }

     function signUp($fullname, $username, $email, $password){


     }
     function signOut(){


     }
     function createGoal($username, $title, $description, $deadline){


     }
     function createTask($taskname){


     }
     function calculateProgress($goalname){


     }
     function alert(){


     }



    }


?>