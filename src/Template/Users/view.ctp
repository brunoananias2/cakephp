<div class="users view large-12 medium-12 columns content">
    <h3><?php echo 'Detalhes do usuário ' . $usuario->name; ?></h3>

    <table class="vertical-table">
	<tr>
		<th>ID</th>
        <th><?php echo $usuario->id; ?></th>
	</tr>
    <tr>
		<th>Nome</th>
        <th><?php echo $usuario->name; ?></th>
	</tr>
    <tr>
		<th>E-mail</th>
        <th><?php echo $usuario->email; ?></th>
	</tr>
    <tr>
		<th>Usuário</th>
        <th><?php echo $usuario->username; ?></th>
	</tr>
    <tr>
		<th>Cadastrado</th>
        <th><?php echo $usuario->created; ?></th>
	</tr>
    <tr>
		<th>Alterado</th>
        <th><?php echo $usuario->modified; ?></th>
	</tr>
</table>
<?php 
    echo $this->Html->link(('Lista Usuários'), ['controler' => 'users', 'action' => 'index']);
?>
</div>
