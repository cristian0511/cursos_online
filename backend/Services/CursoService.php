<?php
// backend/Services/CursoService.php

require_once __DIR__ . '/../Repositories/CursoRepository.php';

class CursoService {
    private CursoRepository $repo;

    public function __construct(CursoRepository $repo) {
        $this->repo = $repo;
    }

    public function listarCursos(): array {
        return $this->repo->getAll();
    }

    public function obtenerCurso(int $id): ?array {
        return $this->repo->getById($id);
    }
}