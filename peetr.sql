Table: SQL

CREATE TABLE `carousel` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `button` varchar(255) NULL
);

CREATE TABLE `bandeinfo` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `button` varchar(255) NULL
);

CREATE TABLE `textbox` (
  `id` int NOT NULL,
  `image` varchar(255)  NULL,
  `title` varchar(255)  NULL,
  `subtitle` varchar(255) NULL,
  `button` varchar(255) NULL
);

CREATE TABLE `bandesolution` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `button` varchar(255) NULL
);

CREATE TABLE `card` (
  `id` int NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `button` varchar(255) NULL
);


CREATE TABLE `partenaire` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
);

