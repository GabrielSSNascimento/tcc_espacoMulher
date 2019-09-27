<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title;?></title>

    <script type="text/javascript" src="<?= url("/theme/js/instascan.min.js"); ?>"></script>
    <script type="text/javascript" src="<?= url("/theme/js/jquery-3.2.1.min.js"); ?>"></script>
    <link rel="stylesheet" href="<?= url("/theme/css/style.css"); ?>"/>
</head>
<body>
<nav class="main_nav">
  <?php
     if($v->section("sidebar")):
        echo $v->section("sidebar");
     else:
  ?>
         <a title="" href="<?= url() ?>">Home</a>
         <a title="" href="<?= url("contato") ?>">Contato</a>
         <a title="" href="<?= url("inifieb/incluir-frequencia") ?>">Incluir Frequência</a>
         <a title="" href="<?= url("inifieb/login") ?>">Login</a>
         <a title="" href="<?= url("teste") ?>">Teste</a>
  <?php
    endif;
  ?>
</nav>

<main class="main_content">
  <?= $v->section("content") ?>
</main>

<footer class="main_footer">
<?= SITE ?> - Todos os Direitos Reservados




    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?= $v->section("scripts") ?>
</footer>
</body>
</html>
