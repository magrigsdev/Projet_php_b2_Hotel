CREATE TABLE user(
    id_user INT AUTO_INCREMENT,
    nom VARCHAR(10),
    prenom VARCHAR(50),
    mdp VARCHAR(50),
    role VARCHAR(10),
    mail VARCHAR(50),
    PRIMARY KEY(id_user),
    UNIQUE(mail)
) ENGINE = InnoDB;
CREATE TABLE Chambre(
    id_chambre INT AUTO_INCREMENT,
    Description VARCHAR(50),
    Nbre_lit int,
    prix int,
    statut VARCHAR(200),
    image VARCHAR(200),
    PRIMARY KEY(id_chambre)
) ENGINE = InnoDB;


CREATE TABLE reserver(
    id_user INT,
    id_chambre INT,
    date_reser DATETIME,
    PRIMARY KEY(id_user, id_chambre),
    FOREIGN KEY(id_user) REFERENCES user(id_user),
    FOREIGN KEY(id_chambre) REFERENCES Chambre(id_chambre)
) ENGINE = InnoDB;


CREATE TABLE commenter(
    id_user INT,
    id_chambre INT,
    message VARCHAR(200),
    PRIMARY KEY(id_user, id_chambre),
    FOREIGN KEY(id_user) REFERENCES user(id_user),
    FOREIGN KEY(id_chambre) REFERENCES Chambre(id_chambre)
) ENGINE = InnoDB;