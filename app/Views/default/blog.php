<?php $this->layout('layout', ['title' => 'Blog']); ?>

<?php $this->start('main_content'); ?>
<div class="container">
    <div class="row">
        <div class="col-s12">
            <h1>Hello world W</h1>

            <p>Voici ma variable qui contient :</p>
            <p><?= $myVar  ?></p>

        </div>

    </div>

</div>



<?php $this->stop(); ?>