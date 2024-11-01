<?php
namespace App\Http\Controllers\GanttChart;
use App\Models\GanttTask;
use App\Models\GanttLink;
use App\Models\GanttLink;
use App\Models\GanttLinks;
use Dhtmlx\Connector\GanttConnector;

class GanttController
{
    public function data() {
        // $connector = new GanttConnector(null, "PHPLaravel");
        // $connector->render_links(new GanttLink(), "id", "source,target,type");
        // $connector->render_table(new GanttTask(),"id","start_date,duration,text,progress,parent");

        // $tasks = [
        //     ['id' => 1, 'text' => 'Task #1', 'start_date' => '2024-04-01 00:00:00', 'duration' => 3],
        //     ['id' => 2, 'text' => 'Task #2', 'start_date' => '2024-04-02 00:00:00', 'duration' => 3],
        // ];

        // $links = [
        //     ['id' => 1, 'source' => 1, 'target' => 2, 'type' => '0']
        // ];

        // return response()->json(['data' => $tasks, 'links' => $links]);

        $tasks = GanttTask::all();
        $links = GanttLink::all();

        return response()->json(['data' => $tasks, 'links' => $links]);
    }
}