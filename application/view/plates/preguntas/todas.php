<?php $this->layout('layout'); ?>
<div class="container">
    <?php //$renderFeedbackMessages() ?>
    <h2>Todas las preguntas</h2>
    <?php if(count($preguntas) == 0): ?>
        <p>No se han encontrado preguntas en la base de datos</p>
    <?php else: ?>
        <p>Tenemos <?= count($preguntas) ?> encontradas</p>
        
    <?php foreach ($preguntas as $pregunta):  ?>
        <article class="pregunta">
            <h3><?= $pregunta->asunto ?></h3>
            <p><?= $pregunta->cuerpo ?></p>
            <footer>
                <a href="/preguntas/editar/<?= $pregunta->id_pregunta ?>">[ Editar ]</a> 
            </footer>
        </article>
    <?php endforeach; ?>
    <?php endif; ?>
</div>
