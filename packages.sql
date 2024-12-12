


CREATE TABLE allpackages (
  id int(11)  PRIMARY KEY AUTO_INCREMENT,
  package_name varchar(30) NOT NULL,
  packages_descreption varchar(30) NOT NULL,
  created_at date NOT NULL,
  author_name varchar(20) NOT NULL
) ;

INSERT INTO allpackages (package_name, packages_descreption, created_at, author_name) VALUES
('Kylie Combs', 'Recusandae Suscipit', '1974-10-16', ''),
('Indigo Schwartz', 'Quidem consequat Te', '2022-05-11', ''),
('Curran Mendez', 'Dolores libero dolor', '1983-09-14', ''),
('Buckminster Pearson', 'Debitis unde ipsum ', '2014-12-08', ''),
('Zoe Donovan', 'Inventore aut sequi ', '1990-02-12', ''),
('Hilda Roman', 'Similique quibusdam ', '1999-10-04', 'LATIFI'),
('Blaine Moon', 'Officia consequatur', '1978-09-08', 'ali'),
('Rhiannon Mcgowan', 'Hic sequi aut eiusmo', '1987-04-10', 'Rhiannon Mcgowan'),
('Kiayada Cash', 'Fugit numquam labor', '2014-02-05', 'asmae'),
('Amy Cabrera', 'Voluptatem et id ma', '1989-07-24', 'asmae'),
('Cassidy Ware', 'Consequatur deleniti', '2000-08-23', 'Margaret Reynolds');


CREATE TABLE authors (
  id int(11)   PRIMARY KEY AUTO_INCREMENT,
  author_name varchar(30) NOT NULL,
  email varchar(50) NOT NULL
);

INSERT INTO authors (author_name, email) VALUES
('latifi', 'abdenournoman@gmail.com'),
('abdelali', 'abdelalilatifi3@gmail.com'),
('lma3ty', 'abdenournoman@gmail.com'),
('Ezekiel Stone', 'cebajo@mailinator.com'),
('ali', 'mykovymo@mailinator.com'),
('Rhiannon Mcgowan', 'myfyjityd@mailinator.com'),
('asmae', 'abdenournoman@gmail.com'),
('azert', 'abdenournoman@gmail.com');


CREATE TABLE version (
id int PRIMARY KEY AUTO_INCREMENT,  
Package_Name varchar(20) not null ,
version varchar(20) not null ,
 id_package int ,
 FOREIGN KEY (id_Package) REFERENCES allpackages(id)
);