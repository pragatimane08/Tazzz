    <?php
    $name = filter_input(INPUT_POST,'name');
    $city = filter_input(INPUT_POST,'city');
    $phno = filter_input(INPUT_POST,'phno');
    $addr = filter_input(INPUT_POST,'addr');
    $email = filter_input(INPUT_POST,'email');
    $pass = filter_input(INPUT_POST,'pass');
    $repass = filter_input(INPUT_POST,'repass');
    if(!empty($name)){
        if(!empty($city)){
            if(!empty($phno)){
                if(!empty($addr)){
                    if(!empty($email)){
                        if(!empty($pass)){
                            if(!empty($pass)){

                                $host = "localhost";
                                $dbusername = "root";
                                $dbpassword = "";
                                $dbname = "tazz";

                                //create connection 
                                $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
                                if(mysqli_connect_errno()){
                                    die("Connection error".mysqli_connect_errno($conn));
                                }else{
                                    $sql = "INSERT INTO customer (name,city,phno,addr,email,pass,repass)values('$name','$city','$phno','$addr','$email','$pass','$repass')";
                                    if($conn->query($sql)){
                                        echo "New Record Inserted Succesfully !";
                                    }else{
                                        echo "Error:",$sql."<br>".$conn->error;
                                    }
                                }
                                $conn->close();
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

