<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'customer_id',
        'contact_type', // 'whatsapp' ou 'phone'
        'number',
    ];

    /**
     * Relacionamento com a tabela customers.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}