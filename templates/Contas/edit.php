<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>
<div class="row">
   
    <div class="column-responsive column-80">
        <div class="contas form content">
            <?= $this->Form->create($conta) ?>
            <fieldset>
                <h3><?= __('Editar Conta') ?></h3>
		<center class="button button-outline">
		    <?php
		    //'R'=>'Contas a Receber','P'=>'Contas a Pagar','E'=>'Recebimento Mensal','S'=>'Pagamento Mensal'
		    switch ($conta->tipo) {
			
			
			case 'R':echo 'Contas a Receber';
			    break;
			case 'P':echo'Contas a Pagar';
			    break;
			

			
		    }
		    ?>
		    
		</center>
		 <?= $this->Html->link(__('voltar'), ['action' => 'index',$conta->periodo_id], ['class' => 'button float-right']) ?>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('descricao',['label'=>'Descrição']);
                    echo $this->Form->control('valor');
    
                    echo $this->Form->control('vencimento');
                    echo $this->Form->control('pagarei', ['empty' => true]);
                    echo $this->Form->control('periodo_id',['type'=>'hidden','value'=>$conta->periodo_id]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
