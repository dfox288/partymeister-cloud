<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Motor\Backend\Models\Client;
use Motor\Core\Traits\Searchable;
use Motor\Core\Traits\Filterable;
use Culpa\Traits\Blameable;
use Culpa\Traits\CreatedBy;
use Culpa\Traits\DeletedBy;
use Culpa\Traits\UpdatedBy;

class Project extends Model
{

    use Searchable;
    use Filterable;
    use Blameable, CreatedBy, UpdatedBy, DeletedBy;

    /**
     * Columns for the Blameable trait
     *
     * @var array
     */
    protected $blameable = [ 'created', 'updated', 'deleted' ];

    /**
     * Searchable columns for the searchable trait
     *
     * @var array
     */
    protected $searchableColumns = [
        'client.name',
        'name',
        'subdomain'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'client_id',
        'api_token',
        'subdomain'
    ];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }


    public function apps()
    {
        return $this->hasMany(App::class);
    }


    public function websites()
    {
        return $this->hasMany(Website::class);
    }
}
