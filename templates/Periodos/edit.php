<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo $periodo
 */
?>
<div class="row">
    
    <div class="column-responsive column-80">
        <div class="periodos form content">
            <?= $this->Form->create($periodo) ?>
            <fieldset>
                <h3><?= __('Editar Periodo') ?></h3>
		<?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'button float-right']) ?>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('descricao',['label'=>'Descrição']);
                    echo $this->Form->control('inicio');
                    echo $this->Form->control('fim');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

