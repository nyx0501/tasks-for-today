<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table            = 'tasks';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['title', 'status', 'task_date', 'created_at'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = '';

    public function getToday(): array
    {
        return $this->where('task_date', Time::today()->toDateString())
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }

    public function getAllOrderedByDate(): array
    {
        return $this->orderBy('task_date', 'ASC')
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }
}
