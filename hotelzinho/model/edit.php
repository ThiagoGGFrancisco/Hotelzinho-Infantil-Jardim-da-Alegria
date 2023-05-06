<?php
session_start();
include('conexao.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edita cadastro.</h1>
            <div>
            <a href="sistema.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("conexao.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM cadastro WHERE id=$id";
                $result = mysqli_query($conexao,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Title:" value="<?php echo $row["id"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name:" value="<?php echo $row["email"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Book Description:"><?php echo $row["telefone"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id["id"]; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Envia " class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Book Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>