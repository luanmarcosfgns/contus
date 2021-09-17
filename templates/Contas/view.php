<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="contas view content">
	     <?= $this->Html->link(__('voltar'), ['action' => 'index',$conta->periodo_id], ['class' => 'button float-right']) ?>
            <center class="button button-outline">
		    <?php
		    //'R'=>'Contas a Receber','P'=>'Contas a Pagar','E'=>'Recebimento Mensal','S'=>'Pagamento Mensal'
		    switch ($conta->tipo) {
			
			
			case 'R':echo 'Contas a Receber';
			    break;
			case 'P':echo'Contas a Pagar';
			    break;
			case 'E':echo'Recebimento Mensal';
			    break;
			case 'S':echo'Pagamento Mensal';
			    break;

			
		    }
		    ?>
		    
		</center>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($conta->nome) ?></td>
                </tr>
            
                <tr>
                    <th><?= __('Periodo') ?></th>
                    <td><?= $conta->periodo->nome?></td>
                </tr>
              
                    <th><?= __('Valor') ?></th>
                    <td><?= 'R$ '.number_format($conta->valor,2,',','') ?></td>
                </tr>
                <tr>
                    <th><?= __('Vencimento') ?></th>
                    <td><?= h($conta->vencimento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pagarei') ?></th>
                    <td><?= h($conta->pagarei) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($conta->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($conta->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($conta->descricao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
