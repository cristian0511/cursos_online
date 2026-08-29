<?php
// backend/Services/ParticipanteService.php

require_once __DIR__ . '/../Repositories/ParticipanteRepository.php';
require_once __DIR__ . '/../Repositories/CursoRepository.php';

class ParticipanteService {
    private ParticipanteRepository $participanteRepo;
    private CursoRepository $cursoRepo;

    public function __construct(ParticipanteRepository $pRepo, CursoRepository $cRepo) {
        $this->participanteRepo = $pRepo;
        $this->cursoRepo = $cRepo;
    }

    public function listarParticipantes(): array {
        return $this->participanteRepo->getAll();
    }

    public function obtenerPorId(int $id): ?array {
        return $this->participanteRepo->getById($id);
    }

    public function registrarParticipante(array $datos): array {
        $this->validarDatos($datos);

        // Validar existencia del curso
        if (!$this->cursoRepo->getById((int)$datos['curso_id'])) {
            throw new Exception("El curso seleccionado no existe.");
        }

        // Validar email único
        if ($this->participanteRepo->existsEmail($datos['email'])) {
            throw new Exception("El correo electrónico ya está registrado.");
        }

        $idInsertado = $this->participanteRepo->create($datos);
        return $this->participanteRepo->getById($idInsertado);
    }

    public function actualizarParticipante(int $id, array $datos): bool {
        if (!$this->participanteRepo->getById($id)) {
            throw new Exception("El participante no existe.");
        }

        $this->validarDatos($datos);

        if (!$this->cursoRepo->getById((int)$datos['curso_id'])) {
            throw new Exception("El curso seleccionado no existe.");
        }

        if ($this->participanteRepo->existsEmail($datos['email'], $id)) {
            throw new Exception("El correo electrónico ya está en uso por otro participante.");
        }

        return $this->participanteRepo->update($id, $datos);
    }

    public function eliminarParticipante(int $id): bool {
        if (!$this->participanteRepo->getById($id)) {
            throw new Exception("El participante no existe.");
        }
        return $this->participanteRepo->delete($id);
    }

    private function validarDatos(array $datos): void {
        if (empty($datos['nombre']) || empty($datos['apellido']) || empty($datos['email']) || empty($datos['curso_id'])) {
            throw new Exception("Todos los campos obligatorios deben ser completados.");
        }

        if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El formato del correo electrónico no es válido.");
        }
    }
}