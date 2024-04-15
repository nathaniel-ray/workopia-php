use workopia;
create table listings(
id int auto_increment primary key not null,
user_id int not null,
title varchar(255) not null,
description longtext,
salary varchar(45),
tags varchar(255),
company varchar(45),
adress varchar(255),
city varchar(45),
state varchar(45),
phone varchar(45),
email varchar(45),
requirements longtext,
benefits longtext,
created_at timestamp default current_timestamp()
);