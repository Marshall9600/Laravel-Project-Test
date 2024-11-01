<?php  
  
namespace App\Models;
  
use MongoDB\Laravel\Eloquent\Model;

class GanttTask extends Model
{
    protected $connection = 'mongodb';  
    protected $collection = 'gantt_tasks';

    /**  
     * The attributes which are mass assigned will be used.  
     *  
     * It will return @var array
     */  
    protected $fillable = [
        'id',
        'text',
        'start_date',
        'duration',
        'progress',
        'sortorder',
        'parent',
        'deadline',
        'planned_start',
        'planned_end',
        'end_date',
    ];

    public $primaryKey = "id";
    public $timestamps = false;
}  