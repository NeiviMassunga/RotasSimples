<?php $this->layout('Master', ['title' => 'Página Inicial']); ?>

<h1>Home</h1>
<p>Olá, <?= $this->e($name) ?>! Seja bem-vindo ao sistema de rotas simples.</p>

<a href="/contact">Ir para Contactos</a>