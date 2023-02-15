<?php
include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])) {
    $joukkue = $_POST['joukkue'];
    $voitot = $_POST['voitot'];
    $tasapelit = $_POST['tasapelit'];
    $tappiot = $_POST['tappiot'];

    $sql = "UPDATE `sarjataulukko` SET `joukkue`='$joukkue',`voitot`='$voitot',`tasapelit`='
    $tasapelit',`tappiot`='$tappiot' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Data updated successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Veikkausliiga</title>
</head>
<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #212529;">
        <p style="color: #fff; margin:0">SARJATAULUKKO</p>
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Muokkaa Joukkueen Tietoja</h3>
        </div>

        <?php
        $sql = "SELECT * FROM `sarjataulukko` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:40vw; min-widht:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Joukkue:</label>
                        <input type="text" class="form-control" name="joukkue"
                        value="<?php echo $row['joukkue'] ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Voitot:</label>
                        <input type="text" class="form-control" name="voitot"
                        value="<?php echo $row['voitot'] ?>">
                    </div>
                
                    <div class="col">
                        <label class="form-label">Tasapelit:</label>
                        <input type="text" class="form-control" name="tasapelit"
                        value="<?php echo $row['tasapelit'] ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Tappiot:</label>
                        <input type="text" class="form-control" name="tappiot"
                        value="<?php echo $row['tappiot'] ?>">
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>