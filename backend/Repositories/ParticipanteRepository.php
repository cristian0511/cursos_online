<?php
// backend/Repositories/ParticipanteRepository.php

class ParticipanteRepository {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAll(): array {
        $sql = "SELECT p.*, c.nombre AS curso_nombre 
                FROM participantes p 
                INNER JOIN cursos c ON p.curso_id = c.id 
                ORDER BY p.id DESC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function getById(int $id): ?array {
        $sql = "SELECT p.*, c.nombre AS curso_nombre 
                FROM participantes p 
                INNER JOIN cursos c ON p.curso_id = c.id 
                WHERE p.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }

    public function create(array $data): int {
        $sql = "INSERT INTO participantes (curso_id, nombre, apellido, email) 
                VALUES (:curso_id, :nombre, :apellido, :email)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':curso_id' => $data['curso_id'],
            ':nombre'   => $data['nombre'],
            ':apellido' => $data['apellido'],
            ':email'    => $data['email']
        ]);
        return (int) $this->db->lastInsertId();
    }

    public function update(int $id, array $data): bool {
        $sql = "UPDATE participantes 
                SET curso_id = :curso_id, nombre = :nombre, apellido = :apellido, email = :email 
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id'       => $id,
            ':curso_id' => $data['curso_id'],
            ':nombre'   => $data['nombre'],
            ':apellido' => $data['apellido'],
            ':email'    => $data['email']
        ]);
    }

    public function delete(int $id): bool {
        $stmt = $this->db->prepare("DELETE FROM participantes WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    public function existsEmail(string $email, ?int $excludeId = null): bool {
        $sql = "SELECT COUNT(*) FROM participantes WHERE email = :email";
        $params = [':email' => $email];

        if ($excludeId !== null) {
            $sql .= " AND id != :exclude_id";
            $params[':exclude_id'] = $excludeId;
        }

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return (int) $stmt->fetchColumn() > 0;
    }
}