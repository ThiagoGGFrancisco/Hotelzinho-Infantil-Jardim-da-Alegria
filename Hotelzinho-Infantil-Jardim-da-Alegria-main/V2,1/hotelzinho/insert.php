<?php

        require_once('conexao.php');
        if(isset($_POST['submit_btn']))
        {
            $name = $_POST['user_name'];
            $email= $_POST['user_email'];
            $contact = $_POST['user_contact'];
            $profile = $_FILES['user_profile']['name'];
            $profile_temp = $_FILES['user_profile']['tmp_name'];
            $profile_location = $profile;
            $adm= $_POST['user_adm'];
            $password = $_POST['user_password'];
            $confirm_password = $_POST['confirm_user_password'];
            if($password == $confirm_password)
            {
                
                
                
                $insert_data = "INSERT INTO `cadastro`(`nome`, `email`, `telefone`, `adm`, `senha`, `confirma`) VALUES ('$name','$email','$contact','$adm','$password','$confirm_password')";
                move_uploaded_file($profile_temp, $profile_location);
                $insert_query = mysqli_query($conexao,$insert_data);
                
                if($insert_query)
                {
                    header('location:sistema.php');
                }
                else
                {
                    echo 'Data Not Insert';
                     header('location:sistema.php');
                }
            }
            else
            {
                echo 'Both Password Are Not Matched';
                 header('location:sistema.php');
            }
        }
    ?>