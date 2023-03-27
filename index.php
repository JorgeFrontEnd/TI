<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">
    <title>Login</title>
</head>

<body>

    <?php
       $username="Joao@gmail.com";
       //echo password_hash("1234", PASSWORD_DEFAULT);   
       $password_hash='$2y$10$WWMLaxKwfprpaqvCbAc9QuQ0FV8tuvOyOBw3MFa.Wt/0sMTRi4BdW';

       if( isset($_POST['username']) && isset($_POST['password']) ){
            if (password_verify ($_POST['password'], $password_hash) || $_POST['username'] != $username) {
                $_SESSION["username"]=$_POST['username']; 
                header('Location: dashboard.php');  
            }  
            else{
                echo "Password incorreta!";
            }
        }
        

    ?>

        <div class="login">
            <div class="container">
                
                    <a href="index.php">
                        <img src="Lab03_CSS_Imagens/imagens/estg_h.png">
                    </a>
            
                    <form method="POST" class="TIform">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="username" class="form-control" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Submeter</button>
                    </form>
                
            </div>
        </div>
</body> 

</html>