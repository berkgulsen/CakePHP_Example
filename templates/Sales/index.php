<h1>Sale Datas</h1>
<?= $this->Html->link(__('Add Sale'), ['action' => 'add'], ['class' => 'button']) ?>
<table>
    <tr>
        <th>ID</th>
        <th>Revenue</th>
        <th>Units Sold</th>
        <th>User ID</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($sales as $row) : ?>
        <tr>
            <td><?= $row->id ?></td>
            <td><?= h($row->revenue) ?></td>
            <td><?= h($row->units_sold) ?></td>
            <td><?= h($row->user_id) ?></td>
            <td><?= h($row->created) ?></td>
            <td><?= h($row->modified) ?></td>
            <td>
                <?php if ($this->request->getAttribute('identity')->id == $row->user_id || $this->request->getAttribute('identity')->role == 1): ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $row->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $row->id], ['confirm' => __('Are you sure you want to delete this sale?'), 'class' => 'delete-link']) ?>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
