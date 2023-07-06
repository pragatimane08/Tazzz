<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = filter_input(INPUT_POST,'name');
    $city = filter_input(INPUT_POST,'city');
    $pname = filter_input(INPUT_POST,'pname');
    $pno = filter_input(INPUT_POST,'pno');
    $email = filter_input(INPUT_POST,'email');
    $pass = filter_input(INPUT_POST,'pass');
    $repass = filter_input(INPUT_POST,'repass');
    if(!empty($name)){
        if(!empty($city)){
            if(!empty($pname)){
                if(!empty($pno)){
                    if(!empty($email)){
                        if(!empty($pass)){
                            if ($pass !== $repass) {
                                 echo "<script type ='text/javascript'>alert('password and repassword not match')";
                            }else {
                                $host = "localhost";
                                $dbusername = "root";
                                $dbpassword = "";
                                $dbname = "tazz";

                                //create connection 
                                $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
                                if(isset($_POST['log-in'])){
                                    header("Location: Login.html ");
                                    exit;
                                }else{

                                if(mysqli_connect_errno()){
                                    die ("Connection Error ".mysqli_connect_errno($conn));
                                }else{
                                    $sql = "INSERT INTO farmer (name,city,pname,pno,email,pass,repass)values('$name','$city','$pname','$pno','$email','$pass','$repass')";
                                    if($conn->query($sql)){
                                        echo "New Record Inserted succesfully !";
                                        $myfile = fopen('index.html','r') or die("Unable to open file!");
                                        echo fread($myfile,filesize("index.html"));
                                        fclose($myfile);
                                    }else{
                                        echo "Error:",$sql."<br>".$conn->error;
                                        exit;
                                        
                                    }
                                }
                                
                            }
                        }
                           
                        }
                    }
                }
            }
                            
           }
        }
    ?>
</body>
</html>

