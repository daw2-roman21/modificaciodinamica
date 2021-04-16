CREATE TABLE mensajes(
    id SERIAL PRIMARY KEY,
    mensaje VARCHAR(20),
    total INT,
    lastvisit DATE
);

insert into mensajes (mensaje,total,lastvisit) VALUES ('Amazon',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Amargado',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Ama',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Amazonas',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Amarillo',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Barcelona',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Baba',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Babali',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Babbo',0, now());
insert into mensajes (mensaje,total,lastvisit) VALUES ('Ba',0, now());
