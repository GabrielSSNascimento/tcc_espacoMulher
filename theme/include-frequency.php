<?php $v->layout("_theme"); ?>

<div class="contact">
    <h2>Posicione sua câmera!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, officia.</p>

    <div id="resultado"></div>
    <video id="preview"></video>

</div>


<?php $v->start("scripts"); ?>

<script>
    let scanner = new Instascan.Scanner(
        {
            video: document.getElementById('preview')
        }
    );
    scanner.addListener('scan', function(content) {
       // alert('Escaneou o conteudo: ' + content);
        //console.log(content);
        buscarAluno(content);
       // window.open(content, "_blank");
    });
    Instascan.Camera.getCameras().then(cameras =>
    {
        if(cameras.length > 0){
            scanner.start(cameras[0]);
        } else {
            console.error("Não existe câmera no dispositivo!");
        }
    });

</script>

<script>

    function buscarAluno(content){

        $.post("<?= url("inifieb/ajax-incluir-frequencia"); ?>", {rsm: content},
            //function(retorno){
            retorno =>{
                $("#resultado").html(retorno);

            }
        );


    }
</script>

<?php $v->end(); ?>


