<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

    <div class="column-responsive column-80">
        <div class="users form content">
	   
            <?= $this->Form->create($user) ?>
            <fieldset>
		 <?= $this->Html->link(__('Voltar'), ['action' => 'login'], ['class' => 'button float-right']) ?>
                <h3><?= __('Cadastro de Usuário') ?></h3>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
         
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
