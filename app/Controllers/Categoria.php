<?php
namespace App\Controllers;

use App\Models\CategoriaModel;

// metodo para mostrar todas las categorias
class Categoria extends BaseController {
    //metodo para mostrar el menu de categorias
    public function index()
    {
    return view('categoria/MenuCategoria',[
        'categorias' => (new CategoriaModel())->findAll(),
    ]);
    }
    //metodo para editar una categoria
    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->find($id);
        echo view ('/categoria/edit', [
            'categoria' => $categoria,
            ]);
    
    }
    public function update($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
        ]);
        return redirect()->to('/categoria');
    }

    //metodo para crear una categoria
    public function new()
    {
                
        echo view('/categoria/new', [
            'categoria' => [
                'titulo' => '',
            ],
        ]);
    }
    public function create()
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
        ]);
        return redirect()->to('/categoria');
    }

    //metodo para eliminar una categoria
    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        return redirect()->to('/categoria');
    }
}
