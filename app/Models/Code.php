<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Code extends Model
{
    use HasFactory;
    /**
     * The table associated with the model
     *
     * @var string
     */
    protected $table = 'code';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        // 'is_idn'
    ];

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Indicates if the ID is auto-incrementing
     *
     * @var bool
     */
    public $incrementing = true;

}
