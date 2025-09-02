package com.powergaming.ecommerce.domain;

import jakarta.persistence.*;
import lombok.Data;

// Construtor, getters e setters são gerados automaticamente pelo Lombok (@Data)
@Data
@Entity
@Table(name = "users")
public class User {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Column(nullable = false)
    private String name;

    @Column(nullable = false, unique = true)
    private String email;

    @Column(nullable = false)
    private String password;

    @Column(nullable = false)
    private String endereco;



}