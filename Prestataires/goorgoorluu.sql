create database goorgoorluu;
	use goorgoorluu;

	create table service(libelle varchar(32), constraint pk_n primary Key(libelle));
		desc service;
		insert into service(libelle) values("Mecaniciens");
		insert into service(libelle) values("Plombiers");
		insert into service(libelle) values("Salons de Coiffures");
		insert into service(libelle) values("Electriciens");
		insert into service(libelle) values("Tauliers");

	create table zoneCouverture(nom varchar(32),constraint pk_nm primary Key(nom));
		desc zoneCouverture;
		insert into zoneCouverture(nom) values("Medina");
		insert into zoneCouverture(nom) values("Mariste");
		insert into zoneCouverture(nom) values("Pikine");
		insert into zoneCouverture(nom) values("GueuleTape");
		insert into zoneCouverture(nom) values("Yoff");
		insert into zoneCouverture(nom) values("Jamalaye");
		insert into zoneCouverture(nom) values("NordFoire");
		insert into zoneCouverture(nom) values("OuestFoire");
		insert into zoneCouverture(nom) values("Thiaroye");
		insert into zoneCouverture(nom) values("Yeumbal");
		insert into zoneCouverture(nom) values("KeurMassar");
		insert into zoneCouverture(nom) values("Malika");
		insert into zoneCouverture(nom) values("GuinawRail");

	create table soliciteur(id int auto_increment,nom varchar(32),prenom varchar(32),constraint pk_id primary Key(id));
		desc soliciteur;

	create table prestataire(login varchar(32), 
		password varchar(50),
	    nom varchar(32), 
		prenom varchar(32),
		adresse varchar(32), 
		tel int,
		service varchar(32),
		disponibilite boolean, 
		margePrix decimal(5,2),
		moyenne decimal(5,2),
		rayonCouverture varchar(200),
		photo varchar(32),
		constraint pk_login primary key(login))engine=innodb;
	
        create table serviceRendu(log varchar(32),user int, constraint pk_prim primary key(log,user),
		constraint fk_log foreign key(log) references prestataire(login),
		constraint fk_id  foreign key(user) references soliciteur(id))engine=innodb;