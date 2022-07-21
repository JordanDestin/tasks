<?php

namespace App\Models;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =['name'];
  
    /**
     * Get all of the tasks for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(task::class);
    }

    /**
     * The teams that belong to the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
