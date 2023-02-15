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

    <title>VEIKKAUSLIIGA</title>
</head>
<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #212529;">
        <p style="color: #fff; margin:0">SARJATAULUKKO</p>
    </nav>

    <div class="container">
        <a href="add_new.php" class="btn btn-dark  mb-3">Lisää uusi joukkue</a>

        <table class="table table-striped text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">Ottelut</th>
                <th scope="col">Joukkue</th>
                <th scope="col">Voitot</th>
                <th scope="col">Tasapelit</th>
                <th scope="col">Häviöt</th>
                <th scope="col">Pisteet</th>
                <th scope="col">Muokkaa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";

                    $sql = "SELECT * FROM `sarjataulukko`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['voitot'] + $row['tasapelit'] + $row['tappiot'] ?></td>
                                <td><?php echo $row['joukkue'] ?></td>
                                <td><?php echo $row['voitot'] ?></td>
                                <td><?php echo $row['tasapelit'] ?></td>
                                <td><?php echo $row['tappiot'] ?></td>
                                <td><?php echo $row['voitot'] * 3 + $row['tasapelit'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id'] ?>"
                                    class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                    <a href="delete.php?id=<?php echo $row['id'] ?>"
                                    class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>