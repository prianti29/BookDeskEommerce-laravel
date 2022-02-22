<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\IBaseRepository;

class BaseRepositories implements IBaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function get()
    {
        return $this->model->get();
    }
    public function find($id)
    {
        return $this->model->find($id);
    }
    public function delete($id)
    {
        $data = $this->model->find($id);
        if (!$data) {
            flash('No item Found')->error();
        } else {
            $data->delete();
        }
    }
}
