<?= view('templates/header', ['title' => $title]) ?>

<h2>Complete Task List</h2>
<p>This page shows every task, ordered by date.</p>

<?php if (! empty($tasks)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc(ucfirst($task['status'])) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No tasks were found.</p>
<?php endif; ?>

<?= view('templates/footer') ?>
