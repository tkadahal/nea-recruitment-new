<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Str;

class Media extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'resource_id',
        'resource_type',
        'media_type_id',
        'name',
        'file_name',
        'mime_type',
        'path',
        'disk',
        'file_hash',
        'collection',
        'size',
        'is_modified',
        'created_at',
        'updated_at',
    ];

    public function mediaType(): BelongsTo
    {
        return $this->belongsTo(MediaType::class);
    }

    public function resource(): MorphTo
    {
        return $this->morphTo();
    }

    public function __toString(): string
    {
        $url = $this->short_url;
        $imageSrc = '<img src="' . $url . '" alt="" class="img-fluid" style="max-width:100%; max-height:150px; margin-top:10px;">';
        $fileNameWithoutExtension = pathinfo($this->attributes['file_name'], PATHINFO_FILENAME);
        $link = '<a target="_blank" href="' . $url . '">' . $fileNameWithoutExtension . '</a>';
        $pdfIcon = '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';

        $html = Str::startsWith($this->attributes['mime_type'], 'image/')
            ? (request()->is('admin/*') ? '<div class="card">' . $imageSrc . '</div>' : $imageSrc)
            : $pdfIcon . ' ' . $link;

        return $html;
    }

    public function toSmallImageString(): string
    {
        $url = $this->short_url;
        $smallImageSrc = '<img src="' . $url . '" alt="" class="img-fluid" style="max-width:100px; max-height:100px; margin-top:5px;">';

        return $smallImageSrc;
    }

    public function toLargeImageString(): string
    {
        $url = $this->short_url;
        $largeImageSrc = '<img src="' . $url . '" alt="" class="img-fluid" style="width: 90%;">';

        return $largeImageSrc;
    }

    public function generateHtmlWithoutBorder(): string
    {
        $url = $this->short_url;
        $imageSrc = '<img src="' . $url . '" alt="" class="img-fluid" style="max-width:100%; max-height:150px; margin-top:10px;">';
        $fileNameWithoutExtension = pathinfo($this->attributes['file_name'], PATHINFO_FILENAME);
        $link = '<a target="_blank" href="' . $url . '">' . $fileNameWithoutExtension . '</a>';
        $pdfIcon = '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';

        $html = Str::startsWith($this->attributes['mime_type'], 'image/')
            ? $imageSrc
            : $pdfIcon . ' ' . $link;

        return $html;
    }

    public function getShortUrlAttribute(): string
    {
        return route('download.media', ['media' => $this->id]);
    }

    public function getUrl(): string
    {
        return $this->attributes['file_name'];
    }

    public function getFileUrl(): string
    {
        if (Str::startsWith($this->attributes['mime_type'], 'image/')) {
            return $this->attributes['file_name'];
        } else {
            // Assuming the media file is stored in the 'public' disk
            return asset('storage/' . $this->attributes['file_path']);
        }
    }
}
