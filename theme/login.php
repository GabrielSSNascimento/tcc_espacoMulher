<?php $v->layout("_theme"); ?>

<div class="contact">
    <h2>Login de Usuário</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, officia.</p>

    <form action="<?= url("inifieb/login"); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="login" placeholder="Seu Nome"/>
        <input type="password" name="senha" placeholder="Sua Senha"/>

        <button>Login!</button>
    </form>
</div>


<?php $v->start("scripts"); ?>
<script>
    $(function () {
       $("button").after('<button type="reset">Limpar</button>');
    });
</script>

<?php $v->end(); ?>


