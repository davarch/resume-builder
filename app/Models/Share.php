<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\HasToken;
use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Share extends Model
{
    use HasToken;
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'token',
        'email',
        'template',
        'profile_id',
    ];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }
}
