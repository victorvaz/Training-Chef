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