<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pribadi</title>
</head>
<body>
    <center>
        <h1>Biodata Pribadi</h1>
        <img src="image/sarah.jpg" alt="Foto Profil" width="200" style="border-radius: 50%;">
        <?php
            // Mendefinisikan variabel dengan data diri
            $nama = "Sarah Khoirunnisa";
            $tempat_lahir = "Cirebon";
            $tanggal_lahir = "14 April 2003";
            $alamat = "Jl.Raya Kadugede Desa.Kadugede kec.Kadugede, Kab.Kuningan";
            $email = "sarahkhoirunnisa14.com";
            $no_telepon = "089276878396";
            $pendidikan = "Sarjana Teknik Informatika, Universitas Kuningan";
        ?>
        <p><strong>Nama:</strong> <?php echo $nama; ?> </p>
        <p><strong>Tempat, Tanggal Lahir:</strong> <?php echo $tempat_lahir . ", " . $tanggal_lahir; ?></p>
        <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>No. Telepon:</strong> <?php echo $no_telepon; ?></p>
        <p><strong>Pendidikan:</strong> <?php echo $pendidikan; ?></p>
    </center>
</body>
</html>
