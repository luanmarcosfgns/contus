<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
$periodo_id = explode('/', $_SERVER['REQUEST_URI']);
$periodo_nome = $this->SQL->selectwhere('select concat(id,"-",nome)as nome from periodos where id = :id', [':id' => $periodo_id[4]])[0]['nome'];
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="contas form content">
            <?= $this->Form->create($conta) ?>
            <fieldset>
                <h3><?= __($periodo_nome) ?></h3>
                <?= $this->Html->link(__('voltar'), ['action' => 'index', $periodo_id[4]], ['class' => 'button float-right']) ?>
                <?php
                echo $this->Form->control('nome');
                echo $this->Form->control('descricao', ['label' => 'Descrição']);
                echo $this->Form->control('valor');
                echo $this->Form->control('tipo', ['options' => ['P' => 'Saida','R' => 'Entrada'] ,'onchange'=>'mudalabel(this)']);
               

                ?>
                <div class="input date required">
                    <label class="data-vencimento">Vencimento</label>
                    <input type="date" name="vencimento" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(''); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity('')" id="vencimento" value="">
                </div>

                <div class="input date">
                    <label class="data-pagarei">Pagarei</label>
                    <input type="date" name="pagarei" empty="1" id="pagarei" value="">
                </div>

                <div class="periodo">
                    <?= $this->Form->control('periodo_id', ['type' => 'hidden', 'value' => $periodo_id[4]]) ?>
                </div>

            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>