<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use CodeIgniter\RESTful\ResourceController;

class ReservationController extends ResourceController
{
    protected $modelName = ReservationModel::class;
    protected $format    = 'json';

    public function index()
    {
        $reservations = $this->model->findAll();
        return $this->respond($reservations);
    }

    public function show($id = null)
    {
        $reservation = $this->model->find($id);
        if (!$reservation) {
            return $this->failNotFound('Reserva no encontrada');
        }
        return $this->respond($reservation, 200);
    }

    public function create()
    {
        $input = $this->request->getJSON(true);

        if (!$this->model->insert($input)) {
            return $this->failValidationErrors($this->model->errors());
        }

        $created = $this->model->find($this->model->getInsertID());
        return $this->respondCreated($created, 'Reserva creada correctamente');
    }

    public function update($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->failNotFound('Reserva no encontrada');
        }

        $input = $this->request->getJSON(true);

        if (!$this->model->update($id, $input)) {
            return $this->failValidationErrors($this->model->errors());
        }

        $updated = $this->model->find($id);
        return $this->respond($updated, 200);
    }

    public function delete($id = null)
    {
        $reservation = $this->model->find($id);
        if (!$reservation) {
            return $this->failNotFound('Reserva no encontrada');
        }

        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Reserva eliminada (soft delete)']);
    }

}