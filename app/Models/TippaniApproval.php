<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TippaniApproval extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'tippani_id',
        'sender_office_id',
        'approver_office_id',
        'status_id',
        'comment',
        'modification',
        'created_at',
        'updated_at',
    ];

    public function tippani(): BelongsTo
    {
        return $this->belongsTo(Tippani::class);
    }

    public function senderOffice(): BelongsTo
    {
        return $this->belongsTo(Office::class, 'sender_office_id', 'ID');
    }

    public function approverOffice(): BelongsTo
    {
        return $this->belongsTo(Office::class, 'approver_office_id', 'ID');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public static function getFirstSender($userOfficeId, $tippaniId): mixed
    {
        $approval = TippaniApproval::where('approver_office_id', $userOfficeId)
            ->where('tippani_id', $tippaniId)
            ->orderBy('created_at')
            ->first();

        if ($approval) {
            return $approval->sender_office_id;
        }

        return null;
    }
}
