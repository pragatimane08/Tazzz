    <?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "tazz";

    //create connection 
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if($conn -> connect_errno){
    die("Connection failed ".mysqli_connect_errno($conn));
    }
    else{
       
        if(isset($_POST['Log-in'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
    
            $sql = "select * from admin where email ='$email' and pass = '$pass' ";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count==1){
                header("Location:welcome.php");
                echo "Login Succesfully" ;
            }else{
                echo "Invalid Email address and Password !!";
    
            }
        }
        echo "Login succesfully ";
}

    ?>