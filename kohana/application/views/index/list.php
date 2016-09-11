<?php defined('SYSPATH') or die('No direct script access.'); ?>
<h1>Lista dos usuários ( <?=html::anchor('welcome/formulario/', 'Adicionar Novo')?> )</h1>

<?php
foreach($usuarios as $usuario){ ?>

<div><?=$usuario->nome .' '.$usuario->sobrenome?> | <?=html::anchor('welcome/formulario/'.$usuario->id, 'EDITAR')?> | <?=html::anchor('welcome/deletar/'.$usuario->id, 'EXCLUIR')?></div>

<?php } ?>
