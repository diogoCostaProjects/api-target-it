<?php

namespace App\Services;

use stdClass;

class UsuarioService
{
    protected $repository;

    public function __construct() {
        
    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(string $nome, string $telefone, string $cpf, string $email): stdClass
    {
        return $this->repository->new($nome, $telefone, $cpf, $email);
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }

    public function update(string $id, string $nome, string $telefone, string $cpf, string $email): stdClass | null
    {
        return $this->repository->update($id, $nome, $telefone, $cpf, $email);
    }
}