

create table conta(
id int primary key auto_increment,
nome varchar(50),
cpf varchar(50),
email varchar(50),
oab varchar(50),
senha varchar(50),
telefone varchar(50),
tipo varchar(50)

);
###############################

create table cliente(
id int primary key auto_increment,
nome varchar(50),
cpf varchar(50),
senha varchar(50),
email varchar(50),
telefone varchar(50),
adv varchar(50),
tipo varchar(50)
);

###############################

create table processos(
id int primary key auto_increment,
acao varchar(50),
nome varchar(50),
cpf varchar(50),
adv varchar(50),
proc varchar(100),
local varchar(50),
anda varchar(50),
trad varchar(50),
descr varchar(50),
data varchar(50),
id_advogado varchar(50)
);
