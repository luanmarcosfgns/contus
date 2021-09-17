<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visualizador[]|\Cake\Collection\CollectionInterface $visualizador
 */
?>
<div class="visualizador index content">
    <?= $this->Html->link(__('New Visualizador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Visualizador') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('label') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visualizador as $visualizador): ?>
                <tr>
                    <td><?= $this->Number->format($visualizador->id) ?></td>
                    <td><?= h($visualizador->label) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visualizador->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visualizador->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visualizador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visualizador->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
