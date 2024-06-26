drop database if exists erafales;

create database erafales;

use erafales;

create table
    products (
        id integer not null,
        label varchar(256) not null,
        description varchar(1000),
        price float not null,
        inBasket integer,
        stock integer,
        picture varchar(256),
        constraint pk_products primary key (id)
    );

insert into
    products (
        id,
        label,
        description,
        price,
        inBasket,
        stock,
        picture
    )
values
    (
        1,
        "Rafale NATO Tiger 2024",
        "Avion utilisé par la France lors du NATO Tiger Meet 2024.",
        1000000,
        0,
        13,
        "https://i.redd.it/rafale-design-for-the-nato-tiger-meet-2024-v0-4pa8cid7e44d1.jpg?width=1590&format=pjpg&auto=webp&s=7052f4fa81423619f778b021e7e0b46c754ed068"
    ),
    (
        2,
        "Rafale NATO Tiger 2022",
        "Avion utilisé par la France lors du NATO Tiger Meet 2022.",
        1010000,
        0,
        10,
        "https://www.avionslegendaires.net/wp-content/uploads/2022/05/Rafale-Rogue-Spartan-AdlAE-sujet_AdlAE.jpg"
    ),
    (
        3,
        "Rafale NATO Tiger 2017",
        "Avion utilisé par la France lors du NATO Tiger Meet 2017.",
        1030000,
        0,
        3,
        "https://3.bp.blogspot.com/-8MmDu25QNnE/XNNHn00gQvI/AAAAAAAALeg/Cbt_Y061tO4gZIhmCETiNZA0m8xUAFdeACLcBGAs/s1600/tiger-meet-2017-lorraine.jpg"
    );

select
    *
from
    products;