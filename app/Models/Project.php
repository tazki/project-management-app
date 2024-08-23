<?php

namespace App\Models;
use App\Models\Task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
