<?php

namespace App\Repositories;

use App\Models\Part;
use App\Repositories\BaseRepository;

class PartRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'description',
        'price',
        'stock',
        'image'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Part::class;
    }
}
