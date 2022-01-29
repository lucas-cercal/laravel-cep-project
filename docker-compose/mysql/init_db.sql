USE busca-cep;

CREATE TABLE IF NOT EXISTS enderecos (
  id SMALLINT(20) unsigned  AUTO_INCREMENT PRIMARY KEY,
  cep VARCHAR(255),
  logradouro VARCHAR(255),
  bairro VARCHAR(255),
  localidade VARCHAR(255),
  estado VARCHAR(255),
  numero VARCHAR(255),
  created_at timestamp,
  updated_at timestamp,
);