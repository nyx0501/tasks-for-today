<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1>Task List</h1>
<p class="sub">Every task, ordered by date (<?= count($tasks) ?> total)</p>

<div class="card">
    <?php if (empty($tasks)): ?>
        <p class="empty">No tasks found.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr><th>ID</th><th>Title</th><th>Status</th><th>Task Date</th></tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']) ?></td>
                        <td><?= esc($task['title']) ?></td>
                        <td><span class="badge <?= esc($task['status'], 'attr') ?>"><?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?></span></td>
                        <td><?= esc(date('M d, Y', strtotime($task['task_date']))) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
