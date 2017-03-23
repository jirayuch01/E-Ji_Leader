<?php 

    $roomstype=$_POST['selectRoomType'];

    //collect room id
    $connect = mysqli_connect("localhost","root","","projectwebpro");
    $sql = 'select idRooms from rooms where RoomsType="'.$roomstype.'" ';
    $result = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($result)){
        
    $roomid=$row['idRooms'];
    }

    //mysqli_close($connect);
    session_start();
    $sql3 = 'select id from admin_system where user_name="'.$_SESSION['username'].'" ';
    $result3 = mysqli_query($connect,$sql3);
    while($row = mysqli_fetch_assoc($result3)){
        
    $id=$row['id'];
    }

    $connect = mysqli_connect("localhost","root","","projectwebpro");
    $sql = 'insert into customers_booking_rooms values (null,"'.$id.'","'.$roomid.'","'.$_POST['Title'].'","'.$_POST['FirstName'].'","'.$_POST['LastName'].'","'.$_POST['Email'].'","'.$_POST['Nationality'].'","'.$_POST['PhoneNumber'].'","'.$_POST['Smk'].'","'.$_POST['Floor'].'","'.$_POST['BedType'].'","'.$_POST['Check-in'].'","'.$_POST['Check-out'].'")';
    $sql2 = 'update rooms set RoomsStatus="Reserve" where idRooms = "'.$roomid.'"';

    $result = mysqli_query($connect,$sql);
    $result2 = mysqli_query($connect,$sql2);

        if(!$result && !$result2){
        echo mysqli_error().'<br><br>';
        die("Can't connect to database");
    } else {
        echo '<script language="javascript">
        alert("Booking Complete")
        window.location="Index-cus.php"
        </script>
        ';
    }

        
    
    mysqli_close($connect);
?>