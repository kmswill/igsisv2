<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Surrogates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Internal Events'), ['controller' => 'InternalEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Internal Event'), ['controller' => 'InternalEvents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="surrogates form col-md-10 columns content">
    <?= $this->Form->create($surrogate) ?>
    <fieldset>
        <legend><?= 'Add Surrogate' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('rf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>