<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Tasks for Today') ?> | Tasks for Today</title>
    <style>
        :root { --green: #0b5d2a; --gold: #f2b705; --bg: #f5f7f6; --ink: #1d2a24; --line: #dfe5e1; }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif; background: var(--bg); color: var(--ink); }
        header { background: var(--green); color: #fff; }
        .bar { max-width: 960px; margin: 0 auto; padding: 14px 20px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 10px; }
        .brand { font-weight: 700; font-size: 1.15rem; }
        nav a { color: #fff; text-decoration: none; margin-left: 18px; padding-bottom: 3px; border-bottom: 2px solid transparent; }
        nav a:hover, nav a.active { border-bottom-color: var(--gold); }
        main { max-width: 960px; margin: 28px auto; padding: 0 20px; }
        h1 { margin: 0 0 4px; }
        .sub { color: #5b6b63; margin: 0 0 20px; }
        .card { background: #fff; border: 1px solid var(--line); border-radius: 10px; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 12px 10px; border-bottom: 1px solid var(--line); }
        th { font-size: .8rem; text-transform: uppercase; letter-spacing: .04em; color: #5b6b63; }
        tr:last-child td { border-bottom: 0; }
        .badge { display: inline-block; padding: 2px 10px; border-radius: 999px; font-size: .8rem; font-weight: 600; }
        .pending { background: #fff3cd; color: #7a5b00; }
        .in_progress { background: #dbeafe; color: #1e40af; }
        .done { background: #d1fae5; color: #065f46; }
        .empty { text-align: center; color: #5b6b63; padding: 30px 0; }
        dl { display: grid; grid-template-columns: 160px 1fr; gap: 12px 16px; margin: 0; }
        dt { font-weight: 600; color: #5b6b63; }
        dd { margin: 0; }
        footer { text-align: center; color: #5b6b63; font-size: .85rem; padding: 30px 0; }
        @media (max-width: 560px) { dl { grid-template-columns: 1fr; } nav a { margin: 0 14px 0 0; } }
    </style>
</head>
<body>
    <header>
        <div class="bar">
            <span class="brand">Tasks for Today</span>
            <nav>
                <a href="<?= base_url('/') ?>" class="<?= uri_string() === '' ? 'active' : '' ?>">Welcome</a>
                <a href="<?= base_url('tasks') ?>" class="<?= uri_string() === 'tasks' ? 'active' : '' ?>">Task List</a>
                <a href="<?= base_url('profile') ?>" class="<?= uri_string() === 'profile' ? 'active' : '' ?>">Profile</a>
                <a href="<?= base_url('about') ?>" class="<?= uri_string() === 'about' ? 'active' : '' ?>">About</a>
            </nav>
        </div>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer>IT0049 Web System Technologies &middot; Technical Summative Assessment 1</footer>
</body>
</html>
