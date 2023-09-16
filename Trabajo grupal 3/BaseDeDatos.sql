drop database if exists sivotp;
Create database sivotp;
use sivotp;

create table mesa(
    id_mesa integer auto_increment,
    jefedemesa integer(25),
    primary key(id_mesa)
);

create table usuario(
    nombre varchar(25),
    apellido varchar(25),
    dni integer(25),
    nummesa integer(5),
    avotado boolean,
    mail varchar(30),
    telefono integer(30),
    primary key (avotado),
    foreign key (nummesa) references mesa(id_mesa)
);

create table candidatos(
    id_cant integer auto_increment,
    nompartido varchar(25),
    integrantes varchar(255),
    info varchar(65535),
    logo varchar(65535),
    primary key(id_cant)

);

create table voto(
    id_voto integer auto_increment,
    cantelg varchar(25),
    id_mesa integer(5),
    id_cant integer,
    votecho boolean,
    primary key(id_voto),
    foreign key (id_cant) references candidatos(id_cant),
    foreign key (id_mesa) references mesa(id_mesa),
    foreign key (votecho) references usuario(avotado)
);

create table contra(
    contCant varchar(25),
    contMod varchar(25)
);


insert into contra(contCant, contMod) values("pepe","pepe2");

insert into candidatos(nompartido, integrantes,info,logo) 

values ("livertad avnaza","javier milei",
"Establecer una reforma tributaria y previsional
Aumentar la flexibilización laboral
Eliminar progresivamente los planes sociales
Liquidar el Banco Central y liberar inmediatamente todos los cepos cambiarios y unificar el tipo de cambio
Privatizar empresas públicas",null),

("juntos por el cambio","Horacio Rodríguez Larreta, Patricia Bullrich ","Sacar el cepo de manera inmediata, bimonetarismo.
Cumplir 190 días efectivos de clase.",null),

("union por la patria","sergio masa, agustín rossi","Sostener el nivel de inversión pública.
Tener un sistema de salud público de calidad bien equipado.","https://www.infobae.com/new-resizer/4GvQZMXiLeNx5VPIA1WxDR7ImBI=/1440x1440/filters:format(webp):quality(85)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2016/09/28082346/CtY9h13WAAEsNfz.jpg");
