create table academy (
    id int auto_increment not null,
    first_name varchar(128) not null,
    last_name varchar(128) not null,
    patronymic varchar(128) not null,
    phone_number varchar(15) not null,
    email varchar(128) not null,
    date_of_birth date not null,
    comment text not null,
    primary key (id) 
)