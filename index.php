<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Dojo</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <h1>John Doe</h1>
        <h2>Consultant in economics</h2>
    </header>
    <main>
    <?php include ('data.php');?>
     
    <?php foreach ($data as $title => $section): ?>

        <section>
            <h1><?= $title ?></h1>
            <div class="cards">
                <?php foreach ($section as $card): ?>
                    <figure>
                        <img src="assets/images/<?= $card['image'] ?>" alt="<?= $card['title'] ?>">
                        <figcaption>
                            <div><i class="bi bi-calendar-event"></i> <?= $card ['date'] ?></div>
                            <h2><?= $card['title'] ?></h2>
                            <p><?= $card['description'] ?></p>
                            <div><i class="bi bi-bank"></i> <?= $card['location'] ?></div>
                        </figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
        </section>
      
     <?php endforeach; ?>

    </main>
</body>

</html>