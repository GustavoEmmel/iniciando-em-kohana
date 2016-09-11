<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?=form::open('welcome/salvar')?>

<div>Nome</div>
<div><?=form::input('nome', $usuario->nome)?></div>

<div>Sobrenome</div>
<div><?=form::input('sobrenome', $usuario->sobrenome)?></div>

<div>Idade</div>
<div><?=form::input('idade', $usuario->idade)?></div>

<?=form::hidden('id', $usuario->id)?>
<?=form::submit('btn_submit', 'Salvar')?>
<?=form::close()?>