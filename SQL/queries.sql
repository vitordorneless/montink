CREATE SCHEMA `montink` ;

CREATE TABLE `montink`.`pedidos` (
  `idpedidos` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `cep_entrega` VARCHAR(8) NOT NULL,
  `status` INT NOT NULL,
  `data_ultima_alteracao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idpedidos`));
  
  CREATE TABLE `montink`.`pedidos_produtos` (
  `idpedidos_produtos` INT NOT NULL AUTO_INCREMENT,
  `idpedidos` INT NOT NULL,
  `idprodutos` INT NOT NULL,
  `quantidade` VARCHAR(45) NOT NULL,
  `preco_unitario` DECIMAL(10,2) NOT NULL,
  `preco_total` DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (`idpedidos_produtos`));
  
  CREATE TABLE `montink`.`produtos` (
  `idprodutos` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(99) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `variacoes` DECIMAL(10,2) NOT NULL,
  `estoque` INT NOT NULL,
  PRIMARY KEY (`idprodutos`));
  
  CREATE TABLE `montink`.`estoque` (
  `idestoque` INT NOT NULL AUTO_INCREMENT,
  `id_produto` INT NOT NULL,
  `quantidade` INT NOT NULL,
  `status` INT NOT NULL,
  PRIMARY KEY (`idestoque`));
  
  CREATE TABLE `montink`.`cupons` (
  `idcupons` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  `variacao` DECIMAL(10,2) NOT NULL,
  `validade` DATETIME NOT NULL,
  `status` INT NOT NULL,
  PRIMARY KEY (`idcupons`));