<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo $periodo
 */
?>
<div class="row">
    
    <div class="column-responsive column-80">
        <div class="periodos view content">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'button float-right']) ?>
            <h3><?= h($periodo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($periodo->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($periodo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inicio') ?></th>
                    <td><?= h($periodo->inicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fim') ?></th>
                    <td><?= h($periodo->fim) ?></td>
                </tr>
            </table>

            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($periodo->descricao)); ?>
                </blockquote>
            </div>
            <h4><?= __('Contas') ?></h4>
                <?php if (!empty($periodo->contas)) : ?>
               
                    <table class="tabela">
                        <thead>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Descrição') ?></th>
                            <th><?= __('Valor') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Vencimento') ?></th>
                            <th><?= __('Pagarei') ?></th>
                            
                           
                           
                        </tr>
                    </thead>
                        <?php foreach ($periodo->contas as $contas) : ?>
                        <tr>
                            <td data-label='ID'><?= h($contas->id) ?></td>
                            <td data-label='Nome'><?= h($contas->nome) ?></td>
                            <td data-label='Descrição'><?= h($contas->descricao) ?></td>
                            <td data-label='Valor'><?= h($contas->valor) ?></td>
                            <td data-label='Tipo'><?= h($contas->tipo=='P'?'Saida':'Entrada') ?></td>
                            <td data-label='Vencimento'><?= h($contas->vencimento) ?></td>
                            <td data-label='Pagarei'><?= h($contas->pagarei) ?></td>
                            
                            
                         
                        </tr>
                        <?php endforeach; ?>
                    </table>
                
                <?php endif; ?>
            
        </div>
    </div>
</div>
