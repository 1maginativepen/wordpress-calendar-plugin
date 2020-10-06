

<?php
    global $wpdb;      

    if (  isset( $_POST['saveRoom'] ) ) { 
        $wpdb->get_results( 
            "
            INSERT INTO `rs_rooms` ( `room`) 
            VALUES ( 
                '". $_POST['rooms']."'  
            )", OBJECT );  
    }
    if (  isset( $_POST['save_reservation'] ) ) { 

        $validityProcess = $wpdb->get_results("
            SELECT COUNT(ID) as validitycheck FROM rs_reservation 
            where 
            ( 
                (  
                    ADDTIME(end_date, '2:0:0.000000') <= '".$_POST['startdate']."'   
                    AND
                    SUBTIME(start_date, '2:0:0.000000') >= '".$_POST['startdate']."'
                ) 
                OR 
                ( 
                    start_date <= '".$_POST['startdate']."' 
                    AND 
                    end_date >= '".$_POST['startdate']."' 
                ) 
            )AND room = '". $_POST['room']."'
        ",OBJECT);   
        print_r('<pre class="inv">'.$validityProcess.'</pre>');//Dont delete this line 
        foreach ($validityProcess as $key) {   
            if($key->validitycheck <= 0){ 
                $insert_occupant_record = 
                $wpdb->get_results( 
                    "
                    INSERT INTO `rs_occupant` ( `name`, `address`, `phone`, `email`, `age`) 
                    VALUES ( 
                        '". $_POST['name']."' , 
                        '". $_POST['address']."' , 
                        '". $_POST['phonenumber']."' , 
                        '". $_POST['email']."' ,
                        '". $_POST['age']."' 
                    )", OBJECT );   
                $ActiveID = '';
                foreach ($wpdb->get_results('SELECT id FROM rs_occupant ORDER BY id DESC LIMIT 1',OBJECT) as $key) {  
                    $ActiveID = $key->id;   
                }   
                $insertReservationRecord = 
                    $wpdb->get_results( 
                        "
                        INSERT INTO `rs_reservation` ( `occupant`, `room`, `start_date`, `end_date`) 
                        VALUES ( 
                            '". $ActiveID."' , 
                            '". $_POST['room']."' , 
                            '". $_POST['startdate']."' ,  
                            '". $_POST['enddate']."' 
                        )", OBJECT ); 
                $_SESSION["returnMessage"] = 'Reservation successfuly set.'; 
                $_SESSION["css"] = 'success';
                }else{
                    print_r($key->validitycheck);
                    $_SESSION["returnMessage"] = 'Invalid Registration for Desired Room.'; 
                    $_SESSION["css"] = 'warning';
                }  
                break;
        }    
        // die(); 
    }  
?>
 