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
('�������', '������',     '1991-02-03', 'man', '56de545125f1cfd3ec79', 'gubkin@mail.ru'),
('�������', '�����',      '2012-04-04', 'man', '56de545125f1cfd3ec79', 'albjes@gmail.com'),
('������',  '�����',      '2012-04-06', 'man', '56de545125f1cfd3ec79', 'alfa0@gmail.com'),
('�����',   '����������', '2012-04-04', 'man', '56de545125f1cfd3ec79', 'damir@gmail.com'),
('�����',   '�������',    '1968-08-02', 'man', '910955a907e739b81ec8', 'artur.miron@mail.ru'),
('�������', '�����',      '2012-04-01', 'man', '56de545125f1cfd3ec79', 'higimo@gmail.com'),
('�����',   '�������',    '2012-04-04', 'man', '910955a907e739b81ec8', 'sl2ava@gmail.com'),
('�����',   '�������',    '2012-04-04', 'man', '910955a907e739b81ec8', 'slav321a@gmail.com'),
('�����',   '���������',  '2012-04-04', 'man', '910955a907e739b81ec8', 'slava@gmail.com'),
('�����',   '������',     '2012-04-04', 'man', '910955a907e739b81ec8', 'smenoff@gmail.com'),
('�������', '���������',  '2012-04-04', 'man', '910955a907e739b81ec8', 'smo4ktun2@gmail.com'),
('����',    '�������',    '2012-04-04', 'man', '910955a907e739b81ec8', 'smoktun@gmail.com'),
('�����',   '�����',      '2012-04-04', 'man', '910955a907e739b81ec8', 'utin@gmail.com'),
('�������', '��������',   '2012-04-04', 'man', '910955a907e739b81ec8', 'va22sya@gmail.com'),
('�������', '�����',      '2012-04-04', 'man', '910955a907e739b81ec8', 'vasya@gmail.com'),
('higimo',  'iohiew',     '1968-01-01', 'man', '297e59ac97d117d57d14', 'vedun15@gmail.com'),
('�������', '��������',   '2012-04-04', 'man', '910955a907e739b81ec8', 'kirlol@gmail.com'),
('�������', '���������',  '2012-04-04', 'man', '910955a907e739b81ec8', 'koli@gmail.com');