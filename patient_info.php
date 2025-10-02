<?php 

include 'connect.php';

if(isset($_POST['submit_btn'])){
    $pid = $_POST['patient-id'];
    $lname = $_POST['patient-lname'];
    $fname = $_POST['patient-fname'];
    $mname = $_POST['patient-mname'];
    $suffix = $_POST['patient-suffix'];
    $contact = $_POST['patient-contact'];
    $gender = $_POST['patient-gender'];
    $age = $_POST['patient-age'];
    $econtact = $_POST['patient-emergency-contact'];
    $blood_type = $_POST['patient-blood-type'];
    $address = $_POST['patient-address'];
    $occupation = $_POST['patient-occupation'];
    $civil_status = $_POST['patient-civil-status'];
    $chief_complaint = $_POST['Chief-Complaint'];
    $duration = $_POST['Duration'];
    $location = $_POST['Location'];
    $severity = $_POST['Severity'];
    $associated_symptoms = $_POST['Associated-Symptoms'];
    $past_medical_history = $_POST['Past-Medical-History'];
    $insurance = $_POST['patient-insurance'];

        $insertQuery = "INSERT INTO patient_infos (p_id, lname, fname, mname, suffix, cnumber, ecnumber, gen, age, btype, addre, occup, civil, comp, dur, loca, seve, sympt, hist, insur,dt_tm) 
        values ('$pid','$lname', '$fname', '$mname', '$suffix', '$contact', '$econtact', '$gender', '$age', '$blood_type', '$address', '$occupation', '$civil_status', '$chief_complaint', '$duration', '$location', '$severity', '$associated_symptoms', '$past_medical_history', '$insurance', NOW())";
        if($conn->query($insertQuery) == TRUE){
            echo '<script>alert("New record created successfully");</script>';
            echo ("<script>window.location='dash.php'</script>");
        }else{
            echo "Error: " .$conn->error;
        }
}
?>

<?php
if(isset($_POST['submit_btn2'])){
    $pid = $_POST['patient-id'];
    $valid_id = $_POST['patient-valid-id'];
    $hmo = $_POST['patient-hmo'];
    $card_no = $_POST['patient-card-number'];
    $tplan = $_POST['patient-type-plan'];
    $cover = $_POST['coverage'];
    $accred = $_POST['patient-accredited-Hospital'];
    $file_name = $_FILES['loa-document']['name'];


    $insertQuery = "INSERT INTO pat (p_id, v_id, n_hmo, cmember_no, t_plan, coverage, accred,loa,dt_tm) 
        values ('$pid','$valid_id', '$hmo', '$card_no', '$tplan', '$cover', '$accred', '$file_name', NOW())";
        if($conn->query($insertQuery) == TRUE){
            echo '<script>alert("New record created successfully");</script>';
            echo ("<script>window.location='dash.php'</script>");
        }else{
            echo "Error: " .$conn->error;
        }
}
?>

<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['submit_btn3'])){
    $mail = new PHPMailer(true);

    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'christianjaymamaril25@gmail.com';
    $mail -> Password = 'asfgfjjjylhicpka';
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 465;

    $mail -> setFrom('christianjaymamaril25@gmail.com');

    $mail -> addAddress($_POST['patient-email']);

    $mail -> isHTML(true);

    $mail -> Subject = $_POST['patient-subject'];

    $mail -> Body = $_POST['patient-message']; 

    $mail -> send();

    echo '

    <script>
        alert("Email Sent");
        document.location.href = "dash.php";
    </script>

    ';

}
?>

<?php
include 'connect.php';
error_reporting(0);
$query = "SELECT * FROM patient_infos";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0){
    while($result = mysqli_fetch_assoc($data)){
        echo "
        <tbody>
        <tr class='data1'>
            <td>".$result['p_id']."</td>
            <td>".$result['lname']."</td>
            <td>".$result['fname']."</td>
            <td>".$result['mname']."</td>
            <td>".$result['suffix']."</td>
            <td>".$result['cnumber']."</td>
            <td>".$result['ecnumber']."</td>
            <td>".$result['gen']."</td>
            <td>".$result['age']."</td>
            <td>".$result['btype']."</td>
            <td>".$result['addre']."</td>
            <td>".$result['occup']."</td>
            <td>".$result['civil']."</td>
            <td>".$result['comp']."</td>
            <td>".$result['dur']."</td>
            <td>".$result['loca']."</td>
            <td>".$result['seve']."</td>
            <td>".$result['sympt']."</td>
            <td>".$result['hist']."</td>
            <td>".$result['insur']."</td>
            <td>".$result['dt_tm']."</td>
            <td>
                <a href='patient_edit.php?p_id=$result[p_id]'><button type='button' class='btn-edit'>Edit</button></a>
                <a href='patient_delete.php?p_id=$result[p_id]'><button type='button' class='btn-delete'>Archive</button></a>
            </td>
        </tr>
        </tbody>
        ";
    }
}
?>

