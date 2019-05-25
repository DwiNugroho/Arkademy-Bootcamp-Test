<?php

// Koneksi Ke Database

$host = "localhost";
$name = "root";
$pass = "";
$dbname = "arkademy";

$conn = mysqli_connect($host, $name, $pass, $dbname) or die(mysqli_errorr());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 6B | Arkademy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="container">
    <div class="card">
        <div class="card-header">
            Data
        </div>
        <div class="card-body">
            <form class="mb-2" action="" method="post">
                <div class="form-inline">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text">
                    </div>
                    <button class="btn btn-primary" name="tambah_programmer" type="submit">Tambah Programmer</button>
                </div>
            </form>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama Programmer</th>
                        <th scope="col">Tambah Skill</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query_users = "SELECT * FROM users";
                    $result_users = mysqli_query($conn, $query_users);

                    // Looping

                    while ($users = mysqli_fetch_assoc($result_users)) {
                        ?>
                        <tr>
                            <td><strong><?php echo $users['name'] ?></strong></td>
                            <td rowspan="2">
                                <form class="form-inline" action="" method="post">
                                    <input class="form-control form-control-sm" name="user_id" type="hidden" value="<?php echo $users['id'] ?>">
                                    <input class="form-control form-control-sm" name="skill" type="text">
                                    <button class="btn btn-primary btn-sm" name="input_skill" type="submit">Submit</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $user_id = $users['id'];
                                $query_skills = mysqli_query($conn, "SELECT * FROM skills WHERE user_id = $user_id");

                                while ($skills = mysqli_fetch_assoc($query_skills)) {
                                    echo $skills['name'] . ', ';
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<body>

</body>

</html>


<?php
if (isset($_POST['input_skill'])) {
    $skill = $_POST['skill'];
    $user_id = $_POST['user_id'];

    if (!empty($skill)) {
        mysqli_query($conn, "INSERT INTO skills(name, user_id) VALUES ('$skill', '$user_id')");
    }

    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=6B.php">';
}

if (isset($_POST['tambah_programmer'])) {
    $name = $_POST['name'];

    if (!empty($name)) {
        mysqli_query($conn, "INSERT INTO users(name) VALUES ('$name')");
    }

    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=6B.php">';
}
?>
