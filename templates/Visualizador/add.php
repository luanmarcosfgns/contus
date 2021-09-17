<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visualizador $visualizador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Visualizador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visualizador form content">
            <?= $this->Form->create($visualizador) ?>
            <fieldset>
                <legend><?= __('Add Visualizador') ?></legend>
                <?php
                    echo $this->Form->control('label');
                    echo $this->Form->control('visualizacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
