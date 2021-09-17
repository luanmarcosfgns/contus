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
            <?= $this->Html->link(__('Edit Visualizador'), ['action' => 'edit', $visualizador->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Visualizador'), ['action' => 'delete', $visualizador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visualizador->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Visualizador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Visualizador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visualizador view content">
            <h3><?= h($visualizador->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Label') ?></th>
                    <td><?= h($visualizador->label) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($visualizador->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Visualizacao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($visualizador->visualizacao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
