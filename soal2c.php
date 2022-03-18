<html>

<head>
</head>

<body>
    <form action="soal2d.php" method="post">
        <div>
            <input type="hidden" value="<?= $_POST['nama']; ?>" name="nama" class="form-control">
            <input type="hidden" value="<?= $_POST['umur']; ?>" name="umur" class="form-control">

            <label class="form-label">Hobi Anda : </label>
            <input type="text" name="hobi" class="form-control">
        </div>

        <div>
            <button class="text-center" type="submit">Submit</button>
        </div>

    </form>

</body>


</html>