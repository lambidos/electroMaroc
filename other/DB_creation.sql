create database electromaroc3;
use electromaroc3;

create table user (
id int not null auto_increment primary key,
nom varchar(255),
prenom varchar(255),
numero_tel int,
adresse varchar(255),
ville varchar(255),
email varchar(255),
login varchar(255),
password varchar(255),
role ENUM('admin', 'user'),
date_creation  datetime DEFAULT CURRENT_TIMESTAMP
);

create table categorie (
    id int not null auto_increment primary key,
    nom varchar(255),
    description varchar(255),
    photo blob,
    visibilite boolean
);

create table produit(
    id int not null auto_increment primary key,
    ref varchar(255),
    libelle varchar(255),
    code_barre varchar(255),
    description varchar(255),
    id_categorie int,
    foreign key (id_categorie) references categorie(id) ON null CASCADE,
    prix_achat float,
    prix_final float,
    prix_offre float,
    id_photo_principale int,
    -- foreign key (id_photo_principale) references photo(id) ON DELETE CASCADE,
    visibilite boolean
);



create table photo(
    id int not null auto_increment primary key,
    photo blob,
    display_order int,
    id_produit int,
    foreign key (id_produit) references produit(id) ON DELETE CASCADE
);



create table commande (
    id int not null auto_increment primary key,
    date_creation datetime DEFAULT CURRENT_TIMESTAMP,
    date_envoi datetime,
    date_livraison datetime,
    id_client int,
    foreign key (id_client) references user(id),
    etat ENUM('pret', 'en transit', 'livré', 'annulé')
);

create table ligne_commande (
    id int not null auto_increment primary key,
    id_produit int,
    foreign key (id_produit) references produit(id),
    id_commande int,
    foreign key (id_commande) references commande(id),
    quantite int,
    prix_vente float
)

create table carte (
    id int not null auto_increment primary key,
    id_produit int,
    foreign key (id_produit) references produit(id),
    id_client int,
    foreign key (id_client) references user(id)
)

