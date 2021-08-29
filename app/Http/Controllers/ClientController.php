<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\client as Client;
use App\Repositories\ClientRepository as ClientRepository;
use App\Services\ClientService;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
     private $repository;

    /**
     * @var ClientService
     */
    private $service; 

    /**
     * @param ClientRepository $repository
     * @param ClientService $service
     */
    public function __construct(ClientRepository $repository, ClientService $service){
        $this->repository = $repository;
        $this->service = $service;
    }
    
    //
    public function index(){
        return $this->repository->all();
    }

    public function store(Request $request){
        return $this->service->create($request->all());
    }

    public function show(int $id){
        return $this->repository->find($id);
    }

    public function delete(int $id){
    
        return $this->repository->find($id)->delete();
    }

    public function update(Request $request, $id){
        return $this->service->update($request->all(), $id);
        
    }
}
