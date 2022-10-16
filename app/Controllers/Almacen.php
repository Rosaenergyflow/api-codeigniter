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
            'almacen'  => $model->getAlmacen(),
            'title' => 'Almacen archive',
        ];

        return view('templates/header', $data)
            . view('almacen/overview')
            . view('templates/footer');
    }

    // Pagina con 1 dato
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

    // Crear 1 dato
    public function create()
    {
        $model = model(AlmacenModel::class);
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'codigo' => 'required|min_length[3]|max_length[255]',
            'texto'  => 'required',
        ])) {
            $model->save([
                'codigo' => $this->request->getPost('codigo'),
                // 'slug'  => url_title($this->request->getPost('codigo'), '-', true),
                'texto'  => $this->request->getPost('texto'),
            ]);

            return view('almacen/success');
        }

        return view('templates/header', ['title' => 'Crea un nuevo producto'])
            . view('almacen/create')
            . view('templates/footer');
    }
}