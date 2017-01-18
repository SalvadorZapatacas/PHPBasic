

<?php $this->layout('layout'); ?>

<div class="container">
    <h2>Registro de usuarios</h2>
        <?php $this->insert('partials/feedback') ?>
            <form action="/registro/doregistro" method="post" class="login">
                <section>
                    <label>Email:</label> <input type="email" name="email">
                    <br />
                    <label>Clave:</label> <input type="password" name="clave1">
                    <br />
                    <label>Repite la clave</label> <input type="password" name="clave2">
                    <br />
                    <label>Nombre</label> <input type="text" name="nombre">
                    <br />
                    <label>&nbsp;</label> <input type="submit" value="Registrar">
                </section>
            </form>
    
    <?php $this->borrar_msg_feedback() ?>
</div>
