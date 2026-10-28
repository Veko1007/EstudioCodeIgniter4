<?php
namespace App\Controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController {

    public function index()
    {
        $peliculaModel = new PeliculaModel();


        $peliculas = $peliculaModel->findAll();



        return view('index',[
            'peliculas' => $peliculas,
        ]);
    }

    
    public function show($id)
    {
        $peliculaModel = new PeliculaModel();
        $pelicula = $peliculaModel->find($id);
        echo view ('/pelicula/show', [
            'pelicula' => $pelicula,
            ]);
    
    }
    //Metodo Get y Post para crear una nueva pelicula (Get/New, Post/Create)
    public function new()
    {
                
        echo view('/pelicula/new', [
            'pelicula' => [
                'titulo' => '',
                'descripcion' => '',
            ],
        ]);
    }

    public function create()
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);
        return redirect()->to('/pelicula');
    }

    //Metodo Get y Post para editar una pelicula (Get/Edit, Post/Update)
    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();
        $pelicula = $peliculaModel->find($id);
        echo view ('/pelicula/edit', [
            'pelicula' => $pelicula,
        ]);
    }
 
    public function update($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);
        return redirect()->to('/pelicula');
    }

    //Metodo para eliminar una pelicula
    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);
        return redirect()->to('/pelicula');
    }
    
}
