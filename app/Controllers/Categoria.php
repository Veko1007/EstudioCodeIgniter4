<?php
namespace App\Controllers;

use App\Models\CategoriaModel;

// metodo para mostrar todas las categorias
class Categoria extends BaseController {
    //metodo para mostrar el menu de categorias
    public function index()
    {
    return view('categoria/MenuCategoria',[
        'categorias' => (new CategoriaModel())->findAll(),'titulo' => 'Categorias',
        'ruta' => '/dashboard/pelicula',
        'textoRuta' => 'Ver Peliculas',
        ]);
    }
    //metodo para editar una categoria
    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->find($id);
        return view ('/categoria/edit', [
            'categoria' => $categoria,
            ]);
    }
    public function update($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
        ]);
        return redirect()->to('/dashboard/categoria')->with('success', 'Categoria actualizada correctamente');
    }

    //metodo para crear una categoria
    public function new()
    {
        return view('/categoria/new', [
            'categoria' => [
                'titulo' => 'TITULO',
            ],
        ]);
    }
    public function create()
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
        ]);
        return redirect()->to('/dashboard/categoria')->with('success', 'Categoria creada correctamente');
    }

    //metodo para eliminar una categoria
    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        return redirect()->to('/dashboard/categoria')->with('success', 'Categoria eliminada correctamente');
    }

    //metodo para iniciar sesion
    public function login()
    {
        session()->set('usuario', 'Veko Reynoso');
        return redirect()->to('/dashboard/categoria')->with('success', 'Sesión iniciada correctamente');
    }

    //metodo para cerrar sesion
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/dashboard/categoria')->with('success', 'Sesión cerrada correctamente');
    }
}
