<?php
  include 'controller.php';
   

  if (isset($_GET['action'])){

    if($_GET['action']=='clear'){
     $clearuser=new solarcalculator;
    @$clearuser->clear($_SESSION['name']);
    }
  }

  

?>
<!DOCTYPE html>
<html>
    <head>
        
        <!-- required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Karma Calculator</title>
        
        <!-- favicon -->
        <link rel="shortcut icon" href="">
        
        <!-- fontawesome -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        
        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        
        <!-- style.css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid left-side">
            <div class="row box-row">
                <div class="col-md-5 description-texts">
                    <div class="left-title"><h2>KARMA</h2></div>
                    <div class="left-text">
                        <?php
                              $calculatesolarpower = new solarcalculator;
                            $result= $calculatesolarpower->calculateSolarEnergyNeeded(@$_SESSION['name']);

                            if(isset($_SESSION['name'])){
                                echo '<p>You Require</p>
                        <h1 class="left-text-h1">Solar power of <br>'.$result.' kwh(KiloWatts/hour)</h1>';


                            }
                            else{
                                echo '<h1>SOLAR <br><strong>CALCULATOR</strong></h1>
                        <p class="mt-5">Calculate the solar power you need in your home <br>by inputting  details and get detailed power consumption estimates</p>';
                            }
                        ?>
                        
                        
                    </div>
                </div>
                <div class="col-md-7 right-side">
                  
                    <form action="index.php" method="POST">
                        <div class="container">


                            <div class="row ml-5 mt-5">
                                <div class="col">
                                    <div class="app-names">
                                        <h3>Name</h3>

                                        <?php
                                          if(isset($_SESSION['name'])){
                                             $sessionname=$_SESSION['name'];
                                             echo '<input class="form-control form-control-lg" name="username" type="text" value="'.$sessionname.' " readonly>';

                                          }
                                          else{

                                            echo '<input class="form-control form-control-lg" name="username" type="text" placeholder="Your name">';
                                          }
                                        ?>
                                         
                                    </div>

                                   
                                </div>
                               
                            </div>

                            <div class="row ml-5 mt-5">
                                <div class="col">
                                    <div class="app-names">
                                        <h5>Appliance Name</h5>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="app-names">
                                        <h5>Unit watts</h5>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="app-names">
                                        <h5>Hour usage/Day</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-5 mt-3">
                                
                                <div class="col-4">
                                    <input class="form-control form-control-lg" name="appliancename" type="text" placeholder="eg. Heater" required="required">
                                </div>
                                <div class="col-4">
                                    <input class="form-control form-control-lg" name="unitwatts" type="number" placeholder="amps * volts" min="0" step="0.01" required="required">
                                </div>
                                <div class="col-4">
                                    <input class="form-control form-control-lg" name="hourlyusage" type="number" placeholder="input digit" min="0" step="0.01" required="required">
                                </div>
                                <br><br><br><br>
                                 
                                

                            </div>
                            <div class="row ml-5 mt-3">
                           <div class="col-2">

                                    <button name="addappliance" type="submit" class="btn btn-light btn-lg btn-circle m-1"><i class="fa fa-plus"></i></button>  
                                </div>

                                <div class="col-2">

                                   <h3>Add appliance</h3>
                                </div>
                                 
                            </div>

                              <?php
                        if(isset($_POST['addappliance'])){

                            $username=$_POST['username'];

                            $appliancename=$_POST['appliancename'];
                            $unitwatts=$_POST['unitwatts'];
                            $hourlyusage=$_POST['hourlyusage'];

                            $addappliance = new solarcalculator;
                            $addappliance->addAppliance($username, $appliancename,$unitwatts,$hourlyusage);
                        }

                        $fetchappliance = new solarcalculator;
                            $fetchappliance->fetchuserAppliances(@$_SESSION['name']);

                    ?>

                            </form>

                      
                           
                            
                           
                            
                        </div>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>