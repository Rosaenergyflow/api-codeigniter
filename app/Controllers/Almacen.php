<?php

namespace App\Controllers;

use App\Models\AlmacenModel;

class Almacen extends BaseController
{
    public function index()
    {
        $model = model(AlmacenModel::class);

        $data = [
            'almacen'  => $model->getAlmacen(),
            'title' => 'Almacen archive',
        ];

        return view('templates/header', $data)
            . view('almacen/overview')
            . view('templates/footer');
    }
    public function view($id = null)
    {
        $model = model(AlmacenModel::class);

        $data['almacen'] = $model->getAlmacen($id);
        $data['title'] = 'Producto: '.$data['almacen']['codigo'];
        
        if (empty($data['almacen'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the almacen item: ' . $id);
        }

        $data['codigo'] = $data['almacen']['codigo'];

        return view('templates/header', $data)
            . view('almacen/view')
            . view('templates/footer');
    }
}