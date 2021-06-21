<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" />
  <link rel="stylesheet" href="<?=url("theme/css/err.css")?>" />

  <title><?=$title?></title>
</head>

<body>

  <main>
    <?=$v->section("content")?>
  </main>

  <?=$v->section("scripts")?>

</body>
</html>
