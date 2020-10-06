<?php

    global $wpdb;
    

    #Check to see if the table exists already, if not, then create it

    if($wpdb->get_var( "show tables like 'rs_reservation'" ) != 'rs_reservation') 
    {
        $sql="
    		CREATE TABLE `rs_reservation` ( 
    		`id` INT NOT NULL AUTO_INCREMENT,  
    		`occupant` VARCHAR(10) NOT NULL , 
    		`room` VARCHAR(10) NOT NULL ,  
    		`start_date` DATETIME NOT NULL ,  
    		`end_date` DATETIME NOT NULL ,
    		PRIMARY KEY  (`id`)) ENGINE = InnoDB;
        ";

        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }  


    //create table for occupant's information

    if($wpdb->get_var( "show tables like 'rs_occupant'" ) != 'rs_occupant') 
    {
        $sql="
        CREATE TABLE `rs_occupant` ( 
        	`id` INT NOT NULL AUTO_INCREMENT ,  
        	`name` VARCHAR(100) NOT NULL ,  
        	`address` VARCHAR(100) NOT NULL ,  
        	`phone` VARCHAR(20) NOT NULL ,  
        	`email` VARCHAR(100) NOT NULL ,  
        	`age` INT(10) NOT NULL ,    
        	PRIMARY KEY  (`id`)) ENGINE = InnoDB
        	"; 
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }  

    //create table for rs_rooms's information

    if($wpdb->get_var( "show tables like 'rs_rooms'" ) != 'rs_rooms') 
    {
        $sql="
        	CREATE TABLE `rs_rooms` ( 
        	`id` INT NOT NULL AUTO_INCREMENT ,  
        	`room` VARCHAR(20) NOT NULL ,    
        	PRIMARY KEY  (`id`)) ENGINE = InnoDB
        "; 
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }   

?> 