CREATE TABLE `music_gallery`.`dancing_group`(
  added_date DATE NOT NULL,
  address VARCHAR(100) NOT NULL,
  charges DOUBLE NOT NULL,
  contact_no VARCHAR(15) NOT NULL,
  contact_person_name VARCHAR(100) NOT NULL,
  dancing_style VARCHAR(100) NULL,
  edit_date DATE NULL,
  email VARCHAR(50) NOT NULL,
  group_details TEXT NOT NULL,
  group_name VARCHAR(100) NOT NULL,
  id INT NOT NULL AUTO_INCREMENT,
  number_of_members INT NULL,
  registration_no VARCHAR(100) NOT NULL,
  web VARCHAR(150) NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB