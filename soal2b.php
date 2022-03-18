<html>

<head>
</head>

<body>
    <form action="soal2c.php" method="post">
        <div>
            <input type="hidden" value="<?= $_POST['nama']; ?>" name="nama" class="form-control">
            <label class="form-label">Umur Anda : </label>
            <input type="text" name="umur" class="form-control">
        </div>

        <div>
            <button class="text-center" type="submit">Submit</button>
        </div>

    </form>

</body>


</html>