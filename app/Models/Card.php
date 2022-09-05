<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public const STATUS = [
        'WARNING' => 'ATENÇÃO',
        'DELAYED' => 'ATRASADO',
        'ALRIGHT' => 'EM DIA',
    ];

    protected $fillable = [
        'title',
        'jurisdiction',
        'project',
        'dead_line',
        'description',
        'balance',
        'prevision',
        'status',
        'team',
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
