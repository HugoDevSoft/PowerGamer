package com.powergaming.ecommerce.config; // Ajuste este pacote para o local correto do arquivo

import org.springframework.boot.context.properties.ConfigurationProperties;
import org.springframework.stereotype.Component;

@Component
@ConfigurationProperties(prefix = "jwt")
public class JwtProperties {

    /**
     * Chave secreta usada para assinar e validar os tokens JWT.
     * Mantenha esta chave em segredo.
     */
    private String secret;

    /**
     * Tempo de expiração do token em milissegundos (por exemplo, 3600000 ms = 1 hora).
     */
    private long expiration;

    public String getSecret() {
        return secret;
    }

    public void setSecret(String secret) {
        this.secret = secret;
    }

    public long getExpiration() {
        return expiration;
    }

    public void setExpiration(long expiration) {
        this.expiration = expiration;
    }
}