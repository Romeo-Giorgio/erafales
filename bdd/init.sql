drop database if exists erafales;

create database erafales;

use erafales;

create table
    products (
        id integer not null,
        label varchar(256) not null,
        price float not null,
        isInBasket boolean,
        stock integer,
        picture varchar(256),
        constraint pk_products primary key (id)
    );

insert into
    products (id, label, price, isInBasket, stock)
values
    (1, "Rafale C", 1000000, false, 13),
    (2, "Rafale B", 1010000, false, 10),
    (3, "Rafale M", 1030000, false, 3);

select
    *
from
    products;