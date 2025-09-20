package com.powergamer.ecommerce.api;

import com.powergamer.ecommerce.api.dto.LoginRequestDTO;
import com.powergamer.ecommerce.api.dto.LoginResponseDTO;
import jakarta.validation.Valid;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/auth")
public class AuthController {

    @PostMapping("/login")
    public ResponseEntity<LoginResponseDTO> login(@RequestBody @Valid LoginRequestDTO loginDTO) {
        
        // Lógica de autenticação e geração de token será adicionada aqui.
        // Por enquanto, vamos retornar um token de exemplo.
        String tokenDeExemplo = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QJ_MCmNKywsww_sX_Q6y-zRjYc";
        LoginResponseDTO response = new LoginResponseDTO(tokenDeExemplo);
        return ResponseEntity.ok(response);
    }
}