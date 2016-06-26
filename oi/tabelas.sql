create table paciente(
	idPaciente serial,
	nome varchar (40) not null,
	RG varchar (15),
	CPF varchar (15),
	email varchar (30),
	fone varchar (20) not null,
	endereco varchar (100),
	cep varchar (10),
	cidade varchar (30),
	convenio varchar (30),
constraint paciente_pk primary key (idPaciente)
)

select * from funcionario

create table funcionario(
	idFuncionario serial,
	CRBM varchar (10) not null,
	nome varchar (40) not null,
	RG varchar (15),
	CPF varchar (15),
	email varchar (30),
	fone varchar (20) not null,
	endereco varchar (100),
	cep varchar (10),
	cidade varchar (30),
	curriculo varchar (30),
constraint funcionario_pk primary key (idFuncionario)
)

alter table funcionario
add constraint fk_fun_user foreign key (idfuncionario)
	references usuario (codigo)