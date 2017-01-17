


<?php $this->layout('layout') ?>


<div class="container">
    <?= $titulo ?>
    Estoy en la home de esta app
    <p><?php $this->insert("partials/banner" , [ 'dato' => 'Esto es lo que le paso como dato al banner']); ?></p>
    
</div>