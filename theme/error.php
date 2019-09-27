<?php $v->layout("_theme"); ?>


<div class="error">
     <h2>Ooops erro <?= $error; ?></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem deserunt fuga harum incidunt.</p>
</div>

<?php $v->start("sidebar")?>
   <a href="<?= url() ?>" title="Voltar ao inicio!">Voltar</a>
<?php $v->end()?>
