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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $visualizador->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $visualizador->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Visualizador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visualizador form content">
            <?= $this->Form->create($visualizador) ?>
            <fieldset>
                <legend><?= __('Edit Visualizador') ?></legend>
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
