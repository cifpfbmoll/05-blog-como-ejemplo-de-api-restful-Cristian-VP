<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table            = 'reservations';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;

    protected $allowedFields    = [
        'customer_name',
        'email',
        'phone',
        'reservation_date',
        'reservation_time',
        'people',
        'table_number',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'customer_name'    => 'required|min_length[2]',
        'email'            => 'required|valid_email',
        'phone'            => 'required|min_length[5]',
        'reservation_date' => 'required|regex_match[/^\d{4}-\d{2}-\d{2}$/]',
        'reservation_time' => 'required|regex_match[/^\d{2}:\d{2}$/]',
        'people'           => 'required|integer|greater_than[0]',
        'status'           => 'permit_empty|in_list[pending,confirmed,cancelled]',
        'table_number'     => 'permit_empty|integer|greater_than_equal_to[1]',
    ];

    protected $validationMessages = [
        'reservation_date' => [
            'regex_match' => 'Formato de fecha inválido (YYYY-MM-DD).'
        ],
        'reservation_time' => [
            'regex_match' => 'Formato de hora inválido (HH:MM).'
        ],
    ];

    protected $skipValidation = false;
}