-- -------------------------------------------------------------
-- TablePlus 6.0.0(550)
--
-- https://tableplus.com/
--
-- Database: database.sqlite
-- Generation Time: 2024-10-20 12:29:04.9680
-- -------------------------------------------------------------


CREATE TABLE "category_post" ("id" integer primary key autoincrement not null, "post_id" integer not null, "category_id" integer not null, "created_at" datetime, "updated_at" datetime, foreign key("post_id") references "posts"("id") on delete cascade, foreign key("category_id") references "categories"("id") on delete cascade);

INSERT INTO "category_post" ("id", "post_id", "category_id", "created_at", "updated_at") VALUES
('1', '1', '1', '', NULL),
('2', '2', '2', NULL, NULL),
('3', '3', '3', NULL, NULL),
('4', '4', '1', NULL, NULL),
('5', '5', '6', NULL, NULL),
('6', '6', '7', NULL, NULL);
