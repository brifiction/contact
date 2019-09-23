<?php

namespace brifiction\EntwurfhausContact\Models;

use Illuminate\Database\Eloquent\Model;

class EntwurfhausContact extends Model
{
    /**
     * The table is defined here
     *
     * @var array
     */
    protected $table = "entwurfhaus_contact_forms";

    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * Timestamps define usage
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message'
    ];
}