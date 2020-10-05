<?php $this->layout('layout', ['title' => 'Blog']); ?>

<?php $this->start('main_content'); ?>
<h1>Hello world W</h1>

<p>Voici ma variable qui contient :</p>
<p><?= $myVar  ?></p>


<?php $this->stop(); ?>
