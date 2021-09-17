<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta[]|\Cake\Collection\CollectionInterface $contas
 */
$totaldevido=empty($_SESSION['totaldevido'])?0:$_SESSION['totaldevido'];
$totalrecebido=empty($_SESSION['totalrecebido'])?0:$_SESSION['totalrecebido'];
$lucrodivida= $totalrecebido-$totaldevido;

  $periodoid=$_SESSION['periodo_id'];
  $periodo_id=explode('/',$_SERVER['REQUEST_URI']);

?>
<div class="contas index content">
    <?= $this->Html->link(__('Nova Conta'), ['action' => 'add',$periodo_id[4]], ['class' => 'button float-left']) ?>
    <?= $this->Html->link(__('Voltar'), ['controller'=>'/','action' => ''], ['class' => 'button float-right load-request']) ?>

    <center><h3><?= __('Contas') ?></h3></center>
      <button class="float-right" onclick="pesquisa()">🔎</button>
    <div class="table-responsive">
        <table class="tabela">
            <thead>
		<tr>
		    
		   <?=$this->Form->control('periodo_id',['label'=>'Periodo', 'options'=>$periodoid,'value'=>$periodo_id[4],'onchange'=>'setrequest()'])?>
 
		</tr>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('vencimento') ?></th>
                    <th><?= $this->Paginator->sort('pagarei') ?></th>
                   
                    
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
		
                <?php foreach ($contas as $conta): ?>
                <tr>
                    <td data-label="id"><?= $this->Number->format($conta->id) ?></td>
                    <td data-label="Nome"><?= h($conta->nome) ?></td>
                    <td class="valor" data-label="Valor"><?= 'R$ '.number_format($conta->valor,2,',','') ?></td>
                    <td data-label="Tipo"><?php
		    //'R'=>'Contas a Receber','P'=>'Contas a Pagar','E'=>'Recebimento Mensal','S'=>'Pagamento Mensal'
		    switch ($conta->tipo) {
			
			
			case 'R':echo 'Contas a Receber';
			    break;
			case 'P':echo'Contas a Pagar';
			    break;
			

			
		    }
		    ?></td>
                    <td data-label="vencimento"><?= h($conta->vencimento) ?></td>
                    <td data-label="Pagarei"><?= h($conta->pagarei=='' and $conta->tipo=='R'?'Ainda Recebido':$conta->pagarei=='' and $conta->tipo=='P'?'Ainda não pago':$conta->pagarei) ?></td>
                   
             
                    
                    <td data-label="Ações" class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $conta->id,$conta->periodo_id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $conta->id,$conta->periodo_id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $conta->id,$conta->periodo_id], ['confirm' => __('Are you sure you want to delete # {0}?', $conta->id)]) ?>
                    </td>
                </tr>
		
                <?php endforeach; ?>
		
            </tbody>
        </table>
    </div>
    <br>
    <div> <ul class="row" >
	    <div class="column-responsive column-30"><label class="button button-outline float-left"><b>Valor Devido: R$ </b><?= number_format(empty($totaldevido)?0:$totaldevido,2,',','') ?> </label></div>
		    <div  class="column-responsive column-15"><label class="button button-outline"><b>Valor Recebido: R$ </b> <?= number_format(empty($totalrecebido)?0:$totalrecebido,2,',','') ?> </label></div>
		    <div  class="column-responsive column-25"><label class="button button-outline"><b>Lucro/Divida: R$ </b><?= number_format(empty($lucrodivida)?0:$lucrodivida,2,',','') ?></label></div>
		</ul></div>
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
