#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        `id_user` int(3) NOT NULL,
        `nom_user` varchar(125) NOT NULL,
        `prenom_user` varchar(125) NOT NULL,
        `adresse_user` varchar(125) NOT NULL,
        `email_user` varchar(125) NOT NULL,
        `psw_user` varchar(255) NOT NULL,
        `tel_user` int(10) NOT NULL,
        `categorie_user` varchar(10) NOT NULL,
        `type_membre` varchar(10) NOT NULL,
        `creation_compte` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



#------------------------------------------------------------
# Table: editeur
#------------------------------------------------------------

CREATE TABLE editeur(
        id_editeur  Int  Auto_increment  NOT NULL ,
        nom_editeur Varchar (125) NOT NULL
	,CONSTRAINT editeur_PK PRIMARY KEY (id_editeur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: collection
#------------------------------------------------------------

CREATE TABLE collection(
        id_collection  Int  Auto_increment  NOT NULL ,
        nom_collection Varchar (125) NOT NULL
	,CONSTRAINT collection_PK PRIMARY KEY (id_collection)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: auteur
#------------------------------------------------------------

CREATE TABLE auteur(
        id_auteur     Int  Auto_increment  NOT NULL ,
        prenom_auteur Varchar (125) NOT NULL ,
        nom_auteur    Varchar (125) NOT NULL
	,CONSTRAINT auteur_PK PRIMARY KEY (id_auteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ouvrage
#------------------------------------------------------------

CREATE TABLE Ouvrage(
        isbn_ouvrage  Int  Auto_increment  NOT NULL ,
        titre_ouvrage Varchar (125) NOT NULL ,
        date_parution Date NOT NULL ,
        dispo         Varchar (125) NOT NULL ,
        id_auteur     Int NOT NULL ,
        id_collection Int NOT NULL ,
        id_editeur    Int NOT NULL
	,CONSTRAINT Ouvrage_PK PRIMARY KEY (isbn_ouvrage)

	,CONSTRAINT Ouvrage_auteur_FK FOREIGN KEY (id_auteur) REFERENCES auteur(id_auteur)
	,CONSTRAINT Ouvrage_collection0_FK FOREIGN KEY (id_collection) REFERENCES collection(id_collection)
	,CONSTRAINT Ouvrage_editeur1_FK FOREIGN KEY (id_editeur) REFERENCES editeur(id_editeur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: theme
#------------------------------------------------------------

CREATE TABLE theme(
        id_theme  Int  Auto_increment  NOT NULL ,
        nom_theme Varchar (125) NOT NULL
	,CONSTRAINT theme_PK PRIMARY KEY (id_theme)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gerer 
#------------------------------------------------------------

CREATE TABLE gerer(
        isbn_ouvrage Int NOT NULL ,
        id_user      Int NOT NULL ,
        date_retour  Date NOT NULL ,
        date_pret    Date NOT NULL ,
        delai_pret   Int NOT NULL
	,CONSTRAINT gerer_PK PRIMARY KEY (isbn_ouvrage,id_user)

	,CONSTRAINT gerer_Ouvrage_FK FOREIGN KEY (isbn_ouvrage) REFERENCES Ouvrage(isbn_ouvrage)
	,CONSTRAINT gerer_users0_FK FOREIGN KEY (id_user) REFERENCES users(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: constituer
#------------------------------------------------------------

CREATE TABLE constituer(
        id_theme     Int NOT NULL ,
        isbn_ouvrage Int NOT NULL
	,CONSTRAINT constituer_PK PRIMARY KEY (id_theme,isbn_ouvrage)

	,CONSTRAINT constituer_theme_FK FOREIGN KEY (id_theme) REFERENCES theme(id_theme)
	,CONSTRAINT constituer_Ouvrage0_FK FOREIGN KEY (isbn_ouvrage) REFERENCES Ouvrage(isbn_ouvrage)
)ENGINE=InnoDB;

