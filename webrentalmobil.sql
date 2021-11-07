SHOW DATABASES;

CREATE DATABASE webrentalmobil;

USE webrentalmobil;

DROP DATABASE webrentalmobil;

SHOW TABLES;

DESC tbl_admin;

DESC tbl_customer;

DESC tbl_mobil;

DESC tbl_transaksi;

DESC tbl_rental;

DESC tbl_type;

-- Please Run This SQL!!!
-- Create Type Car
INSERT INTO tbl_type(	kode_type,
						nama_type)
				VALUES(	"SDN",
						"Sedan");

INSERT INTO tbl_type(	kode_type,
						nama_type)
				VALUES(	"HTB",
						"Hatchback");
                        
INSERT INTO tbl_type(	kode_type,
						nama_type)
				VALUES(	"MPV",
						"Multi Purpose Vechile");
SELECT * FROM tbl_type;

-- Create Admin                            
INSERT INTO tbl_customer(	nama,
							username,
                            password,
                            alamat,
                            gender,
                            no_telepon,
                            no_ktp,
                            role_id) 
					VALUES(	"Admin",
							"admin",
                            md5('123'),
                            "Jl. Mahoni Blok B No. 17, Jakarta 14286",
                            "Laki-Laki",
                            "0214267730",
                            "1234567890098765",
                            "1");
SELECT * FROM tbl_customer;
