<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1>Welcome</h1>
<p class="sub">Your tasks for <?= esc($today) ?></p>

<div class="card">
    <?php if (empty($tasks)): ?>
        <p class="empty">No tasks scheduled for today.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr><th>#</th><th>Title</th><th>Status</th></tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $i => $task): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= esc($task['title']) ?></td>
                        <td><span class="badge <?= esc($task['status'], 'attr') ?>"><?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
