create database dracsur;
use dracsur;

-- Creamos la tabla Trabajador -- 
create table trabajador (
id_trabajador char(8) not null primary key,
clave varchar(15) not null,
nombre varchar(30) not null,
dni varchar(8) not null unique
);

select * from trabajador;
describe trabajador;

-- Creamos la tabla Registro --
create table registro (
id_registro int not null auto_increment,
id_trabajador char(8) not null,
tipo_registro char(1) not null,
fecha_hora datetime not null,
primary key(id_registro),
FOREIGN KEY (id_trabajador)
REFERENCES trabajador (id_trabajador));

select * from registro where tipo_registro like '%$buscar%';
select * from registro;
describe registro;

-- Creamos la tabla Administrador (id_administrador no será usado, sólo es una referencia y por buenas prácticas la tabla debe tener un primary key) -- 
create table administrador(
id_administrador int not null primary key auto_increment,
usuario varchar(10) not null,
clave varchar(10) not null
);

select * from administrador;

-- ID y clave única de acceso para el Administrador --
insert into administrador (usuario, clave) values ('admin123','admin123');

describe administrador;

-- Trabajadores de la Empresa --
insert into trabajador values
("00001","usuario01","Jhojan Espinal Sarmiento","74589632"),
("00002","usuario02","Yasmin Garcia Silva","45369851"),
("00003","usuario03","Alberto Seminario Bazan","45368951"),
("00004","usuario04","Andrea Gonzales Pajares","65893214"),
("00005","usuario05","Mia Salazar Sanchez","63254125"),
("00006","usuario06","Lucero Mina Jara","78456952"),
("00007","usuario07","Jhon Stones Gutierrez ","32563652"),
("00008","usuario08","Liz Caceres Mesias","47456321"),
("00009","usuario09","Hans Arellano Orellana","65322265"),
("00010","usuario10","Fernando Requez Marquez","74569321"),
("00011","usuario11","Yohana Valencia Caceres","32522365"),
("00012","usuario12","Randy Orton Lazo","22121535"),
("00013","usuario13","Kevin Zambrano Ramirez","45869854"),
("00014","usuario14","Negumy Bonifaz Rosas","69866595"),
("00015","usuario15","Emerson Gerónimo Baron","77896586"),
("00016","usuario16","Silvestre Cabanillas Stallone","02012562"),
("00017","usuario17","Nayeli Mancilla Salinas","33658965"),
("00018","usuario18","Nuria Oliva", "74757586"),
("00019","usuario19","Faustino Acuña","77757866"),
("00020","usuario20","Roque Santana","36525666"),
("00021","usuario21","Izaskun Escudero","65656662"),
("00022","usuario22","Uxia Abellan","69696923"),
("00023","usuario23","Angel Menéndez León","77474757"),
("00024","usuario24","Soledad Sierra Montaña","41425253"),
("00025","usuario25","Chuy Escrivá Carreño","12121213"),
("00026","usuario26","Jordi Bustos Lara","02020365"),
("00027","usuario27","Fernanda Neira Villalonga","03696985"),
("00028","usuario28","Lourdes Vergara Ribas","11236523"),
("00029","usuario29","Lucila Feijoo","45854545"),
("00030","usuario30","Maximino Machado","33325632"),
("00031","usuario31","Eufemia Miralles Duarte","41236333"),
("00032","usuario32","Ainoa Pastor","45456666"),
("00033","usuario33","María Pinedo Cañete","32165498"),
("00034","usuario34","Moisés Marqués Roca", "44444423"),
("00035","usuario35","Godofredo Ayllón Salvà","22252525"),
("00036","usuario36","Reyna Badía Aguilar","65656541"),
("00037","usuario37","Noa Cáceres Recio","33632522"),
("00038","usuario38","Ignacio Cerdá Abellán","10101013"),
("00039","usuario39","Gustavo del Lucena","03030325"),
("00040","usuario40","José Luis Gual Quiroga","36968665"),
("00041","usuario41","Elvira Rosselló Prats","03222222"),
("00042","usuario42","Florencia Teruel Izquierdo","78787879"),
("00043","usuario43","Santiago de Vega","65651110"),
("00044","usuario44","Íñigo Torrijos Ferrero","01060508"),
("00045","usuario45","Estela del Andres","78965531"),
("00046","usuario46","Feliciano Diego Losa","65656509"),
("00047","usuario47","Soraya Garay Pou","30303097"),
("00048","usuario48","Adriana Bernal Solsona","09080365"),
("00049","usuario49","Lupe Ballester Larrea", "69869869"),
("00050","usuario50","Ulises Ledesma Roman","87487452"),
("00051","usuario51","Ismael Gallego Camara","65236523"),
("00052","usuario52","Florinda España Sandoval","21532153"),
("00053","usuario53","Edgar Egea Torrens","36521452"),
("00054","usuario54","Jaime Rueda Blanes","65465432"),
("00055","usuario55","Osvaldo Chacon Alarcon","15236590"),
("00056","usuario56","Abraham Francisco Villaverde","84268425"),
("00057","usuario57","Leocadio Santos Carrillo","08426519"),
("00058","usuario58","Nicodemo Camps Barbero","36986321"),
("00059","usuario59","Alex Aparicio Bernal","36963256"),
("00060","usuario60","Faustino Gil Diéguez","86965210"),
("00061","usuario61","Julia Avilés Ariño","20201353"),
("00062","usuario62","Eulalia Hoyos Beltran","69853214"),
("00063","usuario63","Amaya Diéguez Diego","14789635"),
("00064","usuario64","Melisa Herrero Estrada","36985321"),
("00065","usuario65","Evaristo Ribera Cabello","36985632"),
("00066","usuario66","Jeremías Salazar","33256941"),
("00067","usuario67","Micaela Lobo Rios","40369354"),
("00068","usuario68","Delfina Moliner Feijoo","58961576"),
("00069","usuario69","Mia Khalifa Rhoades","69696969"),
("00070","usuario70","Apolonia Seco Olmedo","65456512"),
("00071","usuario71","Manuel Talavera Fuente","32323299"),
("00072","usuario72","Guiomar Olmedo Hoz","69855520"),
("00073","usuario73","Ciriaco Larrea Báez","65659898"),
("00074","usuario74","Mercedes Ruano Vicens","32353632"),
("00075","usuario75","Emiliana Anglada Vazquez","54545201"),
("00076","usuario76","César Segarra Camacho","69686562"),
("00077","usuario77","Manuel Pardo Royo","65663000"),
("00078","usuario78","Néstor Riquelme Hernandez","74757677"),
("00079","usuario79","Abilio Santos Vilaplana","50002301"),
("00080","usuario80","César Cardona Baeza","70730210"),
("00081","usuario81","Gerardo Tomas", "35333333"),
("00082","usuario82","Andrea Font Gutierrez","21216655"),
("00083","usuario83","Margarita Benavides Diego","33333364"),
("00084","usuario84","Severo Gargallo Cervantes","22222010"),
("00085","usuario85","Antonio Menéndez Ruiz","55555625"),
("00086","usuario86","Edgardo Mate Posada","33339998"),
("00087","usuario87","Cándida Vega Almansa","65600000"),
("00088","usuario88","Manu Solano Araujo","44402009"),
("00089","usuario89","Araceli Aramburu","01010109"),
("00090","usuario90","Fermín del Lucena","58585555"),
("00091","usuario91","Noelia Palacios Cózar","02050604"),
("00092","usuario92","Lidia del Porta","55652319"),
("00093","usuario93","Iris Barbero Ramirez","65696969"),
("00094","usuario94","Lara Armas Díez","05412222"),
("00095","usuario95","Fernanda Valderrama Marco","33339999"),
("00096","usuario96","Octavia Amat Ferrando","00036529"),
("00097","usuario97","Camila Martin Tamayo", "02505354"),
("00098","usuario98","Marina Barrios Osuna","69865321"),
("00099","usuario99","Leandro Almeida Clemente","49000203"),
("00100","usuario100","Francisco Bernat Mulet","44444220");

insert into trabajador (id_trabajador, clave, nombre, dni) values ("00101","usuario101","Romero Bazalar Gonzales","46572845");

delete from trabajador where (id_trabajador = '00101');

select * from trabajador;
describe trabajador;

select id_trabajador, clave, nombre from trabajador;
select id_trabajador, clave from trabajador;
select * from trabajador where id_trabajador='00005' and clave='usuario05';
