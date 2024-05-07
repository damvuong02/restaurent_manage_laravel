<?php

namespace App\Services;

use App\Repositories\TableRepository;

class TableService{
    protected $tableRepo;

    /**
     * Class constructor.
     */
    public function __construct(TableRepository $tableRepository)
    {
        $this->tableRepo = $tableRepository;
    }
    
    
    function getAllTable(){
        return $this->tableRepo->getAll();
    }

    function createTable($data){
        return $this->tableRepo->create($data);
    }

    function updateTable($data, $id){
        return $this->tableRepo->update($data, $id);
    }

    function deleteTable($id){
        return $this->tableRepo->delete($id);
    }

    function searchTableByTableName($name){
        return $this->tableRepo->search('table_name', $name);
    }

    function findById($id){
        return $this->tableRepo->findById($id);
    }    

    function findTableByTableStatus($table_status){
        return $this->tableRepo->findByTableStatus($table_status);
    }
    
}
