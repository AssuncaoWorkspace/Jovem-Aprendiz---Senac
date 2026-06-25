insert into cliente (nome, telefone) values
('Carlos Silva', '(61)9999-90001' ),
('Fernanda Souza', '(61)9999-90007'),
('Juliana Oliveira' ,' (61)9999-90009');


select * from cliente;


update cliente set nome = 'Fernanda Lima' where id_cliente=17;


delete from cliente where id_cliente=16;

delete from cliente where id_cliente in (17,18);