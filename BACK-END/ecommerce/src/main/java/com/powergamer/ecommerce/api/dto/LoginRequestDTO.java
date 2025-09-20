package com.powergamer.ecommerce.api.dto;

import jakarta.validation.constraints.Email;
import jakarta.validation.constraints.NotBlank;
import lombok.Getter;
import lombok.Setter;

@Getter
@Setter
public class LoginRequestDTO {

    @NotBlank(message = "O email não pode estar em branco")
    @Email(message = "Por favor, insira um email válido")
    private String email;

    @NotBlank(message = "A senha não pode estar em branco")
    private String password;
}
