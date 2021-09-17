<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
   
    <div class="column-responsive column-80">
        <div class="users form content login">
            <?= $this->Form->create() ?>
            <fieldset>
                <h3><?= __('Login') ?></h3>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                 
                ?>
            </fieldset>
            <?= $this->Form->button(__('Entrar')) ?>
            <?= $this->Form->end() ?>
	    <?= $this->Html->link(__('Ainda não tem conta? Registre-se!'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
	  
    </div>
</div>
