CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `senha` VARCHAR(45) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `idx_senha` (`senha` ASC),
  INDEX `idx_email` (`email` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Residencias` (
  `id_residencia` INT NOT NULL AUTO_INCREMENT,
  `tipo` ENUM('casa', 'apartamente', 'terreno') NOT NULL,
  `preco` DECIMAL NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `numero` INT NOT NULL,
  `obervacoes` VARCHAR(255) NULL,
  PRIMARY KEY (`id_residencia`),
  INDEX `idx_tipo` (`tipo` ASC),
  INDEX `idx_preco` (`tipo` ASC),
  INDEX `idx_endereco` (`endereco` ASC),
  INDEX `idx_numero` (`numero` ASC),
  INDEX `idx_observacoes` (`obervacoes` ASC))
ENGINE = InnoDBresidencias;

