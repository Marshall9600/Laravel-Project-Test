<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class TicketModel extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'coverdesk_ticket';

    /**
     * The attributes which are mass assigned will be used.
     *
     * It will return @var array
     */
    protected $fillable = [
        'cvdtic_company_id',
        'cvdtic_user_id',
        'cvdtic_asset_id',
        'cvdtic_custody_id',
        'cvdtic_alert_id',
        'cvdtic_status_id',
        'cvdtic_merge_id',

        'cvdtic_merge_finder_id',
        'cvdtic_ref_old_ticket_id',

        'cvdtic_id',
        'cvdtic_channel',
        'cvdtic_subject',

        'cvdtic_service_id',
        'cvdtic_sub_service_id',
        'cvdtic_mrt',
        'cvdtic_service_tagging',
        'cvdtic_software_id',

        'cvdtic_symptom',
        'cvdtic_root_cause',
        'cvdtic_resolution',

        'cvdtic_saved_to',
        'cvdtic_saved_cc',
        'cvdtic_saved_draft_message',
        'cvdtic_saved_draft_date_time',
        'cvdtic_saved_read',
        'cvdtic_saved_new_ticket',

        'cvdtic_notification_index',
        'cvdtic_last_auto_time',

        'cvdtic_last_reply_date_time',
        'cvdtic_created_date',
        'cvdtic_created_date_time',
        'cvdtic_modified_date',
        'cvdtic_modified_date_time',
        'cvdtic_closed_date',
        'cvdtic_closed_date_time',
        'cvdtic_created_by',
        'cvdtic_merge',
        'cvdtic_merge_old_date_time',
        'cvdtic_deletion',
    ];
}
