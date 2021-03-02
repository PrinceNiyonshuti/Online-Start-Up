<?php
   //Starting Query...

   if(ISSET($_POST['new_appointment'])){

         $start_id = $_POST['start_id'];
         $inv_name = $_POST['inv_name'];
         $email = $_POST['email'];
         $tel = $_POST['tel'];
         $appt_time = $_POST['appt_time'];
         $appt_date = $_POST['appt_date'];
         $det = $_POST['det'];

      $sql=" INSERT INTO `appointment`(`inv_names`, `inv_email`, `inv_tel`, `startup_id`, `sched_date`, `details`) 
              VALUES ('$inv_name','$email','$tel','$start_id','$appt_date','$det') ";

      if ($conn->query($sql)===TRUE){ 

          echo '<script language="javascript">
              alert("  Successfully Booked Appointment ");
              window.location.href = "index.php?detail&data=$start_id";
          </script>';
          
      }else{
          echo '<script language="javascript">
              alert(" Something Went Wrong ");
              window.location.href = "index.php?detail&data=$start_id";
          </script>';
      }

    }
   
        
?>