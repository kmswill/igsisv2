<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producer->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $producer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Producers'), ['action' => 'index']) ?></li>
       
    </ul>
</nav>
<div class="producers form col-md-10 columns content">
    <?= $this->Form->create($producer) ?>
    <fieldset>
        <legend><?= __('Edit Producer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
