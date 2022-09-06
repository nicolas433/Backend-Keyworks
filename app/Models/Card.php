<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'dead_line',
        'description',
        'balance',
        'status',
        'prevision',
        'card_group_id',
        'project_id',
        'team_id',
    ];

    public function cardGroup()
    {
        return $this->belongsTo(CardGroup::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function team()
    {
        return $this->belongsTo(CardGroup::class);
    }
}
