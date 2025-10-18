<?php $this->layout('Master', ['title' => 'Contactos']); ?>

<h1>Contactos</h1>
<a href="/">Voltar</a>

<br><br>

<form action="/contact" method="POST">
    <input type="text" name="nome" placeholder="Seu nome">
    <button type="submit">Enviar</button>
</form>
