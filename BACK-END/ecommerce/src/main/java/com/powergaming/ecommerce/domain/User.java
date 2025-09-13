package com.powergaming.ecommerce.domain;

import jakarta.persistence.*;
import lombok.Data;
import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;

import java.io.Serializable;
import java.util.Collection;
import java.util.Collections;

@Entity
@Table(name = "users")
@Data
public class User implements UserDetails, Serializable {

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

    // Métodos da interface UserDetails

    // Este método retorna as autoridades (permissões) do usuário.
    // Por enquanto, vamos retornar uma lista vazia.
    @Override
    public Collection<? extends GrantedAuthority> getAuthorities() {
        return Collections.emptyList();
    }

    // Este método retorna o nome de usuário (usado para autenticação).
    // No nosso caso, o e-mail será o nome de usuário.
    @Override
    public String getUsername() {
        return this.email;
    }

    // A partir daqui, os métodos controlam o status da conta do usuário.
    // Por padrão, vamos retornar "true" para permitir o login.

    @Override
    public boolean isAccountNonExpired() {
        return true;
    }

    @Override
    public boolean isAccountNonLocked() {
        return true;
    }

    @Override
    public boolean isCredentialsNonExpired() {
        return true;
    }

    @Override
    public boolean isEnabled() {
        return true;
    }
}
