<html>

<head>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama </th>
                <th scope="col">Umur</th>
                <th scope="col">Hobi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo ($_POST['nama']); ?>
                </td>
                <td>
                    <?php echo ($_POST['umur']); ?>
                </td>
                <td>
                    <?php echo ($_POST['hobi']); ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>


</html>