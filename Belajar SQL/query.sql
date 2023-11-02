CREATE DATABASE IF NOT EXISTS pekerja;

CREATE DATABASE pegawai;

SHOW DATABASES;

DROP DATABASE IF EXISTS pekerja;

USE pegawai;

CREATE TABLE pekerja(
    -> id_pegawai int(5) NOT NULL AUTO_INCREMENT,
    -> nama_pegawai varchar(30) NOT NULL,
    -> tgl_lahir date,
    -> foto varchar(50),
    -> id_jabatan int(5),
    -> PRIMARY KEY (id_pegawai) ->
);

CREATE TABLE jabatan(
    -> id_jabatan int(5) NOT NULL,
    -> nama_jabatan varchar(40) ->
);

RENAME TABLE pekerja TO pegawai;

DESC jabatan;

ALTER TABLE
    jabatan DROP nama_jabatan;

ALTER TABLE
    jabatan
ADD
    nama_jabatan varchar(20);

ALTER TABLE
    jabatan
ADD
    PRIMARY KEY (id_jabatan);

ALTER TABLE
    jabatan CHANGE id_jabatan id_jabatan int(5) NOT NULL AUTO_INCREMENT;

INSERT INTO
    pegawai (nama_pegawai, tgl_lahir, id_jabatan)
VALUES
    ('Bariq Firjatullah', '1945-03-18', '2');

INSERT INTO
    jabatan
SET
    nama_jabatan = 'FRONT END DEVELOPER';

INSERT INTO
    jabatan
VALUES
    (NULL, 'BACK END DEVELOPER');

SELECT
    *
FROM
    pegawai;

UPDATE
    pegawai
SET
    tgl_lahir = '1997-03-18'
WHERE
    id_pegawai = '1';

SELECT
    nama_pegawai,
    tgl_lahir
FROM
    pegawai;

SELECT
    *
FROM
    jabatan;

DELETE FROM
    jabatan
WHERE
    id_jabatan = '1';

SELECT
    *
FROM
    jabatan;

INSERT INTO
    jabatan
SET
    nama_jabatan = 'FULL STACK DEVELOPER';

SELECT
    id_jabatan,
    nama_jabatan
FROM
    jabatan;

SELECT
    *
FROM
    jabatan
WHERE
    id_jabatan = '3';

INSERT INTO
    jabatan
SET
    nama_jabatan = 'DATA ANALYST';

SELECT
    *
FROM
    jabatan
ORDER BY
    id_jabatan DESC;

SELECT
    *
FROM
    jabatan
ORDER BY
    nama_jabatan
LIMIT
    2;

SELECT
    *
FROM
    jabatan
WHERE
    nama_jabatan LIKE '%end%';

SELECT
    *
FROM
    jabatan
WHERE
    id_jabatan > 2
    AND id_jabatan < 4;

SELECT
    count(id_jabatan)
FROM
    jabatan;

SELECT
    SUBSTR(nama_jabatan, 3, 4)
FROM
    jabatan;

SELECT
    LCASE(nama_jabatan)
FROM
    jabatan;

SELECT
    UCASE(nama_jabatan)
FROM
    jabatan;

SELECT
    LEFT(nama_jabatan, 3)
FROM
    jabatan;

SELECT
    5 * 5;

SELECT
    ABS(-20);

SELECT
    POW(5, 2);

SELECT
    ROUND(2.1780821, 2);

SELECT
    MAX(id_jabatan)
FROM
    jabatan;

SELECT
    YEAR(tgl_lahir)
FROM
    pegawai;

SELECT
    YEAR(tgl_lahir) AS tahun
FROM
    pegawai;

SELECT
    DATE_FORMAT(tgl_lahir, '%W, %M %D, %Y')
FROM
    pegawai;

SELECT
    PASSWORD('admin');

SELECT
    MD5('admin');

SELECT
    ENCODE('admin', 'pass');

SELECT
    *
FROM
    pegawai,
    jabatan
WHERE
    pegawai.id_jabatan = jabatan.id_jabatan;

SELECT
    pegawai.*,
    jabatan.*
FROM
    pegawai
    INNER JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan;

SELECT
    t1.id_pegawai,
    t1.nama_pegawai,
    t2.nama_jabatan
FROM
    pegawai AS t1
    LEFT JOIN jabatan AS t2 ON t1.id_jabatan = t2.id_jabatan;

SELECT
    t1.id_pegawai,
    t1.nama_pegawai,
    t2.nama_jabatan
FROM
    pegawai AS t1
    RIGHT JOIN jabatan AS t2 ON t1.id_jabatan = t2.id_jabatan;

SELECT
    *
FROM
    jabatan
WHERE
    id_jabatan IN (
        SELECT
            id_jabatan
        FROM
            pegawai
    );

SELECT
    *
FROM
    jabatan
WHERE
    id_jabatan =(
        SELECT
            MAX(id_jabatan)
        FROM
            jabatan
    );

SELECT
    t1.id_pegawai,
    t1.nama_pegawai,
    LEFT(t2.jabatan, 3) AS singkatan_jabatan
FROM
    pegawai AS t1,
    jabatan AS t2
WHERE
    t1.id_jabatan = t2.id
HAVING
    singkatan_jabatan = 'BAC';

CREATE TABLE user(
    id_user int NOT NULL AUTO_INCREMENT,
    nama_lengkap varchar(100),
    username varchar(100),
    password varchar(100),
    PRIMARY KEY (id_user)
);

INSERT INTO
    user
VALUES
    (NULL, 'Bariq Firjatullah', 'admin', MD5('admin'));

SELECT
    *
FROM
    user;

ALTER TABLE
    pegawai
ADD
    CONSTRAINT fk_pegawai_jabatan FOREIGN KEY (id_jabatan) REFERENCES jabatan(id_jabatan) ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO
    pegawai (nama_pegawai, tgl_lahir, id_jabatan)
VALUES
    ('Baktiar', '28-07-1997', 5);