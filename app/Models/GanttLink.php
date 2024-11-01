<?php  
  
namespace App\Models;
  
use MongoDB\Laravel\Eloquent\Model;

class GanttLink extends Model
{
    protected $connection = 'mongodb';  
    protected $collection = 'gantt_links';

    /**  
     * The attributes which are mass assigned will be used.  
     *  
     * It will return @var array
     */  
    protected $fillable = [
        'id',
        'source',
        'target',
        'type',
    ];

    public $primaryKey = "id";
    public $timestamps = false;
}  