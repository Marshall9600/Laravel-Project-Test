<?php
namespace App\Http\Controllers\GanttChart;
use App\Models\GanttTask;
use App\Models\GanttLink;
use Dhtmlx\Connector\GanttConnector;

class GanttController
{
    public function data() {
        $tasks = GanttTask::all();
        $links = GanttLink::all();

        return response()->json(['data' => $tasks, 'links' => $links]);
    }
}