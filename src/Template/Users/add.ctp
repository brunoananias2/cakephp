<h1>Cadastrar Usuário</h1>
<div class="users add large-12 medium-12 columns content">
<?php 
    echo $this->Form->create($user);
    echo $this->Form->control('name');
    echo $this->Form->control('email');
    echo $this->Form->control('username');
    echo $this->Form->control('password');
    echo $this->Form->button('Cadastrar');
    echo $this->Form->end();

?>
</div>