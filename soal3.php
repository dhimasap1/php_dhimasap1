<<<<<<< HEAD
<html>
<?php
$servername = "localhost";
$dbname = "testdb";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM person JOIN hobi where person.id=hobi.person_id";
$hasil = mysqli_query($conn, $query);
$detail = mysqli_fetch_assoc($hasil);


// var_dump($row);
?>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama </th>
                <th scope="col">Alamat</th>
                <th scope="col">Hobi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($hasil)) { ?>
                <tr>
                    <td>
                        <p><?= $row['nama'] ?></p>
                    </td>
                    <td>
                        <p><?= $row['alamat'] ?></p>
                    </td>
                    <td>
                        <p><?= $row['hobi'] ?></p>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

    <form action="" method="post">
        <div>
            <label class="form-label">Nama : </label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div>
            <label class="form-label">Alamat : </label>
            <input type="text" name="alamat" class="form-control">
        </div>

        <div>
            <button class="text-center" type="submit">Submit</button>
        </div>

    </form>
</body>


=======
<html>
<?php
$servername = "localhost";
$dbname = "testdb";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM person JOIN hobi where person.id=hobi.person_id";
$hasil = mysqli_query($conn, $query);
$detail = mysqli_fetch_assoc($hasil);


// var_dump($row);
?>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama </th>
                <th scope="col">Alamat</th>
                <th scope="col">Hobi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($hasil)) { ?>
                <tr>
                    <td>
                        <p><?= $row['nama'] ?></p>
                    </td>
                    <td>
                        <p><?= $row['alamat'] ?></p>
                    </td>
                    <td>
                        <p><?= $row['hobi'] ?></p>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

    <form action="" method="post">
        <div>
            <label class="form-label">Nama : </label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div>
            <label class="form-label">Alamat : </label>
            <input type="text" name="alamat" class="form-control">
        </div>

        <div>
            <button class="text-center" type="submit">Submit</button>
        </div>

    </form>
</body>


>>>>>>> 64660446bfa1251e2dadbe08d8bfbaddb2257680
</html>