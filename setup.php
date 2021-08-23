<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DBNAME','hostel_management');

	$connection = new mysqli(HOST,USER,PASS);
	$sql = 'CREATE DATABASE IF NOT EXISTS '.DBNAME;   
	if($connection ->query($sql)){
		echo "Database created successfully<br>";
	}else{
		echo $connection ->error;
	}
	
// table users	

	$connection  = new mysqli(HOST,USER,PASS,DBNAME);
	$sql = 'CREATE TABLE `users` 
			( `Id` INT NOT NULL AUTO_INCREMENT, 
			`full_name` VARCHAR(50) NOT NULL , 
			`email` VARCHAR(50) NOT NULL , 
			`phone` VARCHAR(50) NOT NULL , 
			`gender` VARCHAR(50) NOT NULL ,	
			`pass` VARCHAR(150) NOT NULL ,
			`re_pass` VARCHAR(150) NOT NULL,
			`photo` VARCHAR(50) NOT NULL,
			`token` VARCHAR(200) NOT NULL,
			`regDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (`id`))';
	if($connection ->query($sql)){
		echo "users table created successfully<br>";
	}else{
		echo $connection ->error;
	}
	
// table admin	

	$connection  = new mysqli(HOST,USER,PASS,DBNAME);
	$sql = 'CREATE TABLE `admin` 
			( `Id` INT NOT NULL AUTO_INCREMENT , 
			`admin_name` VARCHAR(50) NOT NULL , 
			`email` VARCHAR(50) NOT NULL , 
			`pass` VARCHAR(150) NOT NULL ,
			`photo` VARCHAR(50) NOT NULL,	
			PRIMARY KEY (`Id`))';
	if($connection ->query($sql)){
		echo "admin table created successfully<br>";
	}else{
		echo $connection ->error;
	}
	
// admin data insert
	
	$connection  = new mysqli(HOST,USER,PASS,DBNAME);
	$sql = "INSERT INTO `admin` (`Id`, `admin_name`, `email`,`pass`, `photo`) 
			VALUES
			(1, 'Sohel', 'sohel@gmail.com', 'admin123', '');";
	if($connection ->query($sql)){
		echo "Admin data inserted successfully<br>";
	}else{
		echo $connection ->error;
	}
	
// table room
	
    $connection  = new mysqli(HOST,USER,PASS,DBNAME);
	$sql = 'CREATE TABLE `hostel_management`.`room` 
			( `Id` INT NOT NULL AUTO_INCREMENT , 
			`room_no` VARCHAR(50) NOT NULL , 
			`seater` INT(50) NOT NULL , 
			`fees` VARCHAR(50) NOT NULL , 
			`posting_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
			PRIMARY KEY (`Id`))';
	if($connection ->query($sql)){
		echo "Room table created successfully<br>";
	}else{
		echo $connection ->error;
	}

// table course

    $connection  = new mysqli(HOST,USER,PASS,DBNAME);
	$sql = 'CREATE TABLE `hostel_management`.`course` 
			( `Id` INT NOT NULL AUTO_INCREMENT , 
			`code` VARCHAR(150) NOT NULL , 
			`single_name` VARCHAR(150) NOT NULL , 
			`full_name` VARCHAR(150) NOT NULL , 
			`posting_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
			PRIMARY KEY (`Id`))';
	if($connection ->query($sql)){
		echo "Course table created successfully<br>";
	}else{
		echo $connection ->error;
	}	
	
// table registration

    $connection  = new mysqli(HOST,USER,PASS,DBNAME);
	$sql = 'CREATE TABLE `hostel_management`.`hostel_register` 
			( `Id` INT NOT NULL AUTO_INCREMENT , 
			`room_no` VARCHAR(50) NOT NULL , 
			`seater` INT(50) NOT NULL , 
			`fees` VARCHAR(50) NOT NULL ,
		    `Trxid` VARCHAR(50) NOT NULL ,	
			`stay_from` DATE NOT NULL , 
			`duration` INT(50) NOT NULL , 
			`course` VARCHAR(150) NOT NULL , 
			`reg_no` INT(50) NOT NULL , 
			`institute` VARCHAR(150) NOT NULL ,			
			`full_name` VARCHAR(50) NOT NULL , 
			`email` VARCHAR(50) NOT NULL , 
			`phone` VARCHAR(50) NOT NULL , 
			`gender` VARCHAR(50) NOT NULL , 
			`dob` DATE NOT NULL , 
			`address` TEXT NOT NULL ,
			`guardian_name` VARCHAR(50) NOT NULL ,			
			`guardian_phn` VARCHAR(50) NOT NULL ,   
			`guardian_phn2` VARCHAR(50) NOT NULL ,   
			`reg_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
			PRIMARY KEY (`Id`))';
	if($connection ->query($sql)){
		echo "registration table created successfully<br>";
	}else{
		echo $connection ->error;
	}	
	
// table faq for contact form

    $connection  = new mysqli(HOST,USER,PASS,DBNAME);
	$sql = 'CREATE TABLE `hostel_management`.`faq` 
			( `Id` INT NOT NULL AUTO_INCREMENT , 
			`full_name` VARCHAR(50) NOT NULL ,
			`email` VARCHAR(50) NOT NULL , 
			`question` VARCHAR(200) NOT NULL ,
			`answer` TEXT NOT NULL ,
			PRIMARY KEY (`Id`))';
	if($connection ->query($sql)){
		echo "faq table created successfully<br>";
	}else{
		echo $connection ->error;
	}

// faq data insert
	
	$connection  = new mysqli(HOST,USER,PASS,DBNAME);
	$sql = "INSERT INTO `faq` (`Id`, `full_name`, `email`, `question`, `answer`) 
			VALUES
			(1, 'Olid al mamun', 'olid@gmail.com', 'Should I have to create an account before booking a room??', 'Ofcourse you have to login first.')";
	if($connection ->query($sql)){
		echo "faq data inserted successfully<br>";
	}else{
		echo $connection ->error;
	}	
	
?>	