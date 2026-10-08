<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $day = static fn (string $offset): string => date('Y-m-d', strtotime($offset));
        $now = date('Y-m-d H:i:s');

        $rows = [
            ['title' => 'Review pull requests from the team',    'status' => 'done',        'task_date' => $day('-3 days')],
            ['title' => 'Update project documentation',          'status' => 'done',        'task_date' => $day('-3 days')],
            ['title' => 'Fix login page validation bug',         'status' => 'done',        'task_date' => $day('-1 day')],
            ['title' => 'Back up the production database',       'status' => 'pending',     'task_date' => $day('-1 day')],
            ['title' => 'Daily stand-up meeting at 9:00 AM',     'status' => 'done',        'task_date' => $day('today')],
            ['title' => 'Design the dashboard wireframe',        'status' => 'in_progress', 'task_date' => $day('today')],
            ['title' => 'Prepare sprint report for the manager', 'status' => 'pending',     'task_date' => $day('today')],
            ['title' => 'Reply to client emails',                'status' => 'pending',     'task_date' => $day('today')],
            ['title' => 'Deploy version 1.1 to staging',        'status' => 'pending',     'task_date' => $day('+1 day')],
            ['title' => 'Conduct user acceptance testing',       'status' => 'pending',     'task_date' => $day('+2 days')],
        ];

        foreach ($rows as &$row) {
            $row['created_at'] = $now;
        }
        unset($row);

        $this->db->table('tasks')->truncate();
        $this->db->table('tasks')->insertBatch($rows);
    }
}
