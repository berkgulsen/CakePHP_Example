<h1>Add Sale</h1>
<?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button']) ?>
<?= $this->Form->create($sale) ?>
<?= $this->Form->control('revenue') ?>
<?= $this->Form->control('units_sold') ?>
<?= $this->Form->control('user_id', ['options' => $users]) ?>
<?= $this->Form->button(__('Save')) ?>
<?= $this->Form->end() ?>
