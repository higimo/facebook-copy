CREATE TABLE `site`.`user` (
   `firstname` VARCHAR(50) NOT NULL, 
   `lastname` VARCHAR(50) NOT NULL, 
   `data` DATE NOT NULL, 
   `sex` VARCHAR(10) NOT NULL, 
   `pass` VARCHAR(34) NOT NULL, 
   `mail` VARCHAR(50) NOT NULL
);

CREATE TABLE `site`.`file` (
   `mail` VARCHAR(50), 
   `file` VARCHAR(50) NOT NULL 
);

INSERT INTO `user` 
(`firstname`, `lastname`, `data`, `sex`, `pass`, `mail`) 
VALUES
('Альберт', 'Губкин',     '1991-02-03', 'man', '56de545125f1cfd3ec79', 'gubkin@mail.ru'),
('Джесика', 'Альба',      '2012-04-04', 'man', '56de545125f1cfd3ec79', 'albjes@gmail.com'),
('Андрей',  'Губин',      '2012-04-06', 'man', '56de545125f1cfd3ec79', 'alfa0@gmail.com'),
('Дамир',   'Феоксистов', '2012-04-04', 'man', '56de545125f1cfd3ec79', 'damir@gmail.com'),
('Артур',   'Миронов',    '1968-08-02', 'man', '910955a907e739b81ec8', 'artur.miron@mail.ru'),
('Дмитрий', 'Уткин',      '2012-04-01', 'man', '56de545125f1cfd3ec79', 'higimo@gmail.com'),
('Слава',   'Сметана',    '2012-04-04', 'man', '910955a907e739b81ec8', 'sl2ava@gmail.com'),
('Слава',   'Сметана',    '2012-04-04', 'man', '910955a907e739b81ec8', 'slav321a@gmail.com'),
('Слава',   'Количаров',  '2012-04-04', 'man', '910955a907e739b81ec8', 'slava@gmail.com'),
('Игорь',   'Сменов',     '2012-04-04', 'man', '910955a907e739b81ec8', 'smenoff@gmail.com'),
('Дмитрий', 'Количаров',  '2012-04-04', 'man', '910955a907e739b81ec8', 'smo4ktun2@gmail.com'),
('Иван',    'Смирнов',    '2012-04-04', 'man', '910955a907e739b81ec8', 'smoktun@gmail.com'),
('Дамир',   'Уткин',      '2012-04-04', 'man', '910955a907e739b81ec8', 'utin@gmail.com'),
('Василий', 'Васильев',   '2012-04-04', 'man', '910955a907e739b81ec8', 'va22sya@gmail.com'),
('Василий', 'Уткин',      '2012-04-04', 'man', '910955a907e739b81ec8', 'vasya@gmail.com'),
('higimo',  'iohiew',     '1968-01-01', 'man', '297e59ac97d117d57d14', 'vedun15@gmail.com'),
('Василий', 'Кырчанов',   '2012-04-04', 'man', '910955a907e739b81ec8', 'kirlol@gmail.com'),
('Василий', 'Количаров',  '2012-04-04', 'man', '910955a907e739b81ec8', 'koli@gmail.com');