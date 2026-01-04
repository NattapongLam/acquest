<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerList extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'customer_list_id';
    protected $table = 'customer_lists';
    protected $guarded = ['customer_list_id'];
    
    public function msctreatment()
    {
        return $this->hasMany(MscTreatmentList::class, 'customer_list_id', 'customer_list_id');
    }

    public function nktreatment()
    {
        return $this->hasMany(NkTreatmentList::class, 'customer_list_id', 'customer_list_id');
    }
}
