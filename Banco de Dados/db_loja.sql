create table cliente(
id_cliente int primary key auto_increment,
nome varchar(100) not null,
cpf varchar(14) unique not null
);

create table pedido(
id_pedido int primary key auto_increment,
data_pedido datetime not null,
cliente_id_cliente int not null,
foreign key (cliente_id_cliente) 
references cliente(id_cliente)
);

create table produto(
id_produto int primary key auto_increment,
nome varchar(100) not null,
preco double(10,2) not null,
pedido_id_pedido int not null,

foreign key (pedido_id_pedido)
references pedido(id_pedido)
);