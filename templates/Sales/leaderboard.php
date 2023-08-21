<!-- src/Template/Sales/leaderboard.ctp -->
<h1>Sale Leaderboard</h1>
<table>
    <tr>
        <th>Rank</th>
        <th>User</th>
        <th>Total Revenue</th>
    </tr>
    <?php $rank = 1; ?>
    <?php foreach ($leaderboard as $row): ?>
        <tr>
            <td><?= $rank++ ?></td>
            <td>
                <?php if ($row->_matchingData['Users']->email != null) :?>
                    <?= h($row->_matchingData['Users']->email) ?>
                <?php else : ?>
                    User Not Found
                <?php endif; ?>
            </td>
            <td><?= h($row->total_revenue) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
