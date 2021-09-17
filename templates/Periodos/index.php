<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo[]|\Cake\Collection\CollectionInterface $periodos
 */
?>
<div class="periodos index content">
    <?= $this->Html->link(__('Novo Periodo'), ['action' => 'add'], ['class' => 'button float-left ']) ?>
   
    <?= $this->Html->link(__('Voltar'), ['controller'=>'/','action' => ''], ['class' => 'button float-right load-request']) ?>
    <center> <h3 class="titulo" > <?= __('Periodos') ?></h3><center>
        <button class="float-right" onclick="pesquisa()">🔎</button>
    <div class="table-responsive">
        <table class="tabela">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('inicio') ?></th>
                    <th><?= $this->Paginator->sort('fim') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($periodos as $periodo): ?>
                <tr>
                    <td data-label='Id'><?= $this->Number->format($periodo->id) ?></td>
                    <td data-label='Nome'><?= h($periodo->nome) ?></td>
                    <td data-label='Inicio'><?= h($periodo->inicio) ?></td>
                    <td data-label='Fim'><?= h($periodo->fim) ?></td>
                    <td  data-label='Ações' class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $periodo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $periodo->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $periodo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Começo')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Proximo') . ' >') ?>
            <?= $this->Paginator->last(__('Final') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div>
</div>
