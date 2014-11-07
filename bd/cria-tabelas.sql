CREATE TABLE cozinheiro
(
  id int unsigned auto_increment not null,
  nome varchar(250) not null,
  data_nasc datetime not null,
  telefone_particular varchar(20) not null,
  telefone_opcional varchar(20) not null,
  email varchar(50) not null,
  senha varchar(50) not null,
  cpf varchar(20) not null,
  endereco varchar(100) not null,
  numero int not null,
  estado varchar(20) not null,
  bairro varchar(20) not null,
  cidade varchar(20) not null,
  cep varchar(20) not null,
  foto varchar(100) not null,
  PRIMARY KEY (id)
);
CREATE TABLE restaurante
(
    id int unsigned auto_increment not null,
    nome varchar(250) not null,
    descricao longtext not null,
    telefone_comercial_primario varchar(20) not null,
    telefone_comercial_secundario varchar(20) not null,
    cnpj varchar(20) not null,
    razao_social varchar(250) not null,
    endereco varchar(250) not null,
    numero int not null,
    estado varchar(250) not null,
    bairro varchar(250) not null,
    cidade varchar(250) not null,
    cep varchar(20) not null,
    email varchar(50) not null,
    senha varchar(50) not null,
    foto varchar(100) not null,
    PRIMARY KEY (id)
);