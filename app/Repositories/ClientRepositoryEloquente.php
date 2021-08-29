<?php

namespace App\Repositories;

use App\Entities\client as Client;
use Prettus\Repository\Eloquent\BaseRepository;


class ClientRepositoryEloquente extends BaseRepository implements ClientRepository{

    public function model()
    {
        return Client::class;
    }
    
}

