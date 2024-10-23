-- -------------------------------------------------------------
-- TablePlus 6.0.0(550)
--
-- https://tableplus.com/
--
-- Database: database.sqlite
-- Generation Time: 2024-10-20 23:53:19.5080
-- -------------------------------------------------------------


DROP TABLE IF EXISTS "posts";
CREATE TABLE "posts" ("id" integer primary key autoincrement not null, "title" varchar not null, "content" text not null, "excerpt" varchar not null, "user_id" integer not null, "image" varchar not null default 'default_image.png', "is_published" tinyint(1) not null default '1', "created_at" datetime, "updated_at" datetime);

INSERT INTO "posts" ("id", "title", "content", "excerpt", "user_id", "image", "is_published", "created_at", "updated_at") VALUES
('1', 'Para crear un CRUD completo en Laravel', '<p>Para crear un CRUD completo en Laravel para manejar <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, donde cada <strong>post</strong> pertenece a un solo <strong>usuario</strong>, pero puede tener varias <strong>categor&iacute;as</strong>, y los <strong>usuarios</strong> pueden crear m&uacute;ltiples <strong>posts</strong>, seguimos estos pasos:</p>', 'Para crear un CRUD completo en LaravelPara crear un CRUD completo en Laravel', '4', '1729362807-bulo_escolar.jpg', '1', '2024-10-18 23:13:36', '2024-10-18 23:24:11'),
('2', 'Con estos pasos, has creado un sistema CRUD', '<p>Con estos pasos, has creado un sistema CRUD en Laravel para <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, manejando las relaciones entre ellos. Puedes personalizar y expandirlo seg&uacute;n tus necesidades.</p>', 'Con estos pasos, has creado un sistema CRUD en Laravel', '5', '1729412957-2Echenique.jpg', '1', '2024-10-18 23:28:45', '2024-10-18 23:28:45'),
('3', 'Con estos pasos, has creado un sistema CRUD', '<div>
<div dir="auto" data-message-model-slug="gpt-4o" data-message-id="06af8044-70ca-46a0-b662-07cb101f681c" data-message-author-role="assistant">
<div>
<div>
<p>Con estos pasos, has creado un sistema CRUD en Laravel para <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, manejando las relaciones entre ellos. Puedes personalizar y expandirlo seg&uacute;n tus necesidades.</p>
</div>
</div>
</div>
</div>', 'Con estos pasos, has creado un sistema CRUD en Laravel', '6', '1729413016-aprotestas.jpeg', '1', '2024-10-19 00:16:02', '2024-10-19 00:23:44'),
('4', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento. Los andaluces tienen el secreto para hacer el mejor pescado frito del mundo.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', '2', '1729424071-dato mata relato.jpg', '1', '2024-10-20 10:20:28', '2024-10-20 10:20:28'),
('5', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', '11', '1729419669-fiscal.jpg', '1', '2024-10-20 10:21:09', '2024-10-20 10:21:09'),
('6', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie
Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', '1', '1729419744-echenique.jpg', '1', '2024-10-20 10:22:24', '2024-10-20 10:22:24'),
('7', 'Para crear un CRUD completo en Laravel', '<p>Para crear un CRUD completo en Laravel para manejar <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, donde cada <strong>post</strong> pertenece a un solo <strong>usuario</strong>, pero puede tener varias <strong>categor&iacute;as</strong>, y los <strong>usuarios</strong> pueden crear m&uacute;ltiples <strong>posts</strong>, seguimos estos pasos:</p>', 'Para crear un CRUD completo en LaravelPara crear un CRUD completo en Laravel', '2', '1729362807-bulo_escolar.jpg', '1', '2024-10-18 23:13:36', '2024-10-18 23:24:11'),
('8', 'Con estos pasos, has creado un sistema CRUD', '<p>Con estos pasos, has creado un sistema CRUD en Laravel para <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, manejando las relaciones entre ellos. Puedes personalizar y expandirlo seg&uacute;n tus necesidades.</p>', 'Con estos pasos, has creado un sistema CRUD en Laravel', '7', '1729412957-2Echenique.jpg', '1', '2024-10-18 23:28:45', '2024-10-18 23:28:45'),
('9', 'Con estos pasos, has creado un sistema CRUD', '<div>
<div dir="auto" data-message-model-slug="gpt-4o" data-message-id="06af8044-70ca-46a0-b662-07cb101f681c" data-message-author-role="assistant">
<div>
<div>
<p>Con estos pasos, has creado un sistema CRUD en Laravel para <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, manejando las relaciones entre ellos. Puedes personalizar y expandirlo seg&uacute;n tus necesidades.</p>
</div>
</div>
</div>
</div>', 'Con estos pasos, has creado un sistema CRUD en Laravel', '8', '1729413016-aprotestas.jpeg', '1', '2024-10-19 00:16:02', '2024-10-19 00:23:44'),
('10', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento. Los andaluces tienen el secreto para hacer el mejor pescado frito del mundo.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', '9', '1729419628-aprotestas.jpeg', '1', '2024-10-20 10:20:28', '2024-10-20 10:20:28'),
('11', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', '10', '1729419669-fiscal.jpg', '1', '2024-10-20 10:21:09', '2024-10-20 10:21:09'),
('12', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie
Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', '1', '1729419744-echenique.jpg', '1', '2024-10-20 10:22:24', '2024-10-20 10:22:24'),
('13', 'Para crear un CRUD completo en Laravel', '<p>Para crear un CRUD completo en Laravel para manejar <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, donde cada <strong>post</strong> pertenece a un solo <strong>usuario</strong>, pero puede tener varias <strong>categor&iacute;as</strong>, y los <strong>usuarios</strong> pueden crear m&uacute;ltiples <strong>posts</strong>, seguimos estos pasos:</p>', 'Para crear un CRUD completo en LaravelPara crear un CRUD completo en Laravel', '2', '1729362807-bulo escolar.jpg', '1', '2024-10-18 23:13:36', '2024-10-18 23:24:11'),
('14', 'Con estos pasos, has creado un sistema CRUD', '<p>Con estos pasos, has creado un sistema CRUD en Laravel para <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, manejando las relaciones entre ellos. Puedes personalizar y expandirlo seg&uacute;n tus necesidades.</p>', 'Con estos pasos, has creado un sistema CRUD en Laravel', '7', '1729412957-2Echenique.jpg', '1', '2024-10-18 23:28:45', '2024-10-18 23:28:45'),
('15', 'Con estos pasos, has creado un sistema CRUD', '<div>
<div dir="auto" data-message-model-slug="gpt-4o" data-message-id="06af8044-70ca-46a0-b662-07cb101f681c" data-message-author-role="assistant">
<div>
<div>
<p>Con estos pasos, has creado un sistema CRUD en Laravel para <strong>usuarios</strong>, <strong>posts</strong>, y <strong>categor&iacute;as</strong>, manejando las relaciones entre ellos. Puedes personalizar y expandirlo seg&uacute;n tus necesidades.</p>
</div>
</div>
</div>
</div>', 'Con estos pasos, has creado un sistema CRUD en Laravel', '8', '1729413016-aprotestas.jpeg', '1', '2024-10-19 00:16:02', '2024-10-19 00:23:44'),
('16', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento. Los andaluces tienen el secreto para hacer el mejor pescado frito del mundo.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', '9', '1729419628-aprotestas.jpeg', '1', '2024-10-20 10:20:28', '2024-10-20 10:20:28'),
('17', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', 'Jugoso por dentro, ligeramente crujiente por fuera y nada grasiento.', '10', '1729419669-fiscal.jpg', '1', '2024-10-20 10:21:09', '2024-10-20 10:21:09'),
('18', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie
Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', 'Ni huevo ni pan rallado: el sencillo truco de los andaluces para freír el pescado mejor que nadie', '1', '1729419744-echenique.jpg', '1', '2024-10-20 10:22:24', '2024-10-20 10:22:24');
