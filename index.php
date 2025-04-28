<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonathan Krusemark-Camin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">

        <img src="<?php echo $config['profile_image']; ?>" alt="Profilbild" class="profile-img">
        <h1><?php echo $config['name']; ?></h1>
        <p class="title"><?php echo $config['job']; ?></p>
        <p>📞 <?php echo $config['phone']; ?></p>
        <p>✉️ <?php echo $config['email']; ?></p>

        <div class="socials">
            <?php foreach ($config['socials'] as $platform => $url): ?>
                <a href="<?php echo $url; ?>" target="_blank">
                    <i class="fab fa-<?php echo $platform; ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>


        <div class="buttons">
            <a href="download_vcard.php" class="btn">Kontakt herunterladen</a>
        </div>
    </div>

</body>
</html>
