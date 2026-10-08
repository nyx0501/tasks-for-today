<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1>About</h1>
<p class="sub">About this system</p>

<div class="card">
    <p>The <strong>Tasks for Today Management System</strong> is a small internal tool for tracking daily to-do items. It was built with CodeIgniter 4 and MySQL as Technical Summative Assessment 1 for IT0049 (Web System Technologies).</p>
    <dl>
        <dt>Developer</dt><dd>YOUR FULL NAME</dd>
        <dt>Section</dt><dd>YOUR SECTION</dd>
        <dt>School</dt><dd>FEU Institute of Technology</dd>
        <dt>Course</dt><dd>IT0049 - Web System Technologies</dd>
    </dl>
</div>
<?= $this->endSection() ?>
