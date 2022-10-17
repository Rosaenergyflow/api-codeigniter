<?php

namespace App\Controllers;

use App\Models\AlmacenModel;

class Almacen extends BaseController
{
    // pagina con todos los datos
    public function index()
    {
        $model = model(AlmacenModel::class);

        $data = [
            'productos' => $model->getAlmacen(),
            'success' => true,
        ];
        return $this->response->setJSON($data);
    }

    // Pagina con 1 dato
    public function view($id = null)
    {
        $model = model(AlmacenModel::class);

        $data['producto'] = $model->getAlmacen($id);

        if (empty($data['producto'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the almacen item: ' . $id);
        }

        return $this->response->setJSON($data);
    }

    // Crear 1 dato
    public function create()
    {
        $model = model(AlmacenModel::class);

        $model->save([
            'codigo' => $this->request->getPost('codigo'),
            'texto' => $this->request->getPost('texto'),
        ]);

        return $this->response->setJSON($data);
    }
}
