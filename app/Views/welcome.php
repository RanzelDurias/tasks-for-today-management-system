<?= view('templates/header', ['title' => $title]) ?>

<h2>Welcome</h2>
<p>Here are the tasks scheduled for today, <?= date('F j, Y') ?>.</p>

<?php if (! empty($tasks)): ?>
    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc(ucfirst($task['status'])) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>There are no tasks scheduled for today.</p>
<?php endif; ?>

<?= view('templates/footer') ?>
