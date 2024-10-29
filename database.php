<?php
        try{
            $conn = new mysqli("localhost","root","","project_1");
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                $discription = filter_input(INPUT_POST, "discription", FILTER_SANITIZE_SPECIAL_CHARS);
        
                if(empty($name)){
                    echo "Please enter a name";
                }
                elseif(empty($email)){
                    echo "Please enter a email";
                }
                elseif(empty($discription)){
                    echo "Please enter a discription";
                }
                else{
                    $sql = "INSERT INTO questions (name,email,discription) VALUES ('$name','$email','$discription')";
                    mysqli_query($conn,$sql);
                    echo "<div>Your question has been submitted.</div>";
                }
            }
            mysqli_close($conn);
        }
        catch(mysqli_sql_exception){
            echo "Could not connect to the server!";
        }    
?>