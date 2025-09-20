package com.powergamer.ecommerce.infrastructure.persistence;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface JpaUserRepository extends JpaRepository<UserEntity, Long> {

    // Adiciona o método de busca por e-mail, que o Spring Data JPA implementa
    Optional<UserEntity> findByEmail(String email);
}