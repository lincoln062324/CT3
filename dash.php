
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dash.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <!-- topbar -->
        <div class="topbar">
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <!-- <div class="search">
                <input type="text" id="search_input" placeholder="Search">
                <i class='bx bx-search-alt-2'></i>
            </div> -->
        <div class="user">
                <i class='bx bx-user-circle circ'></i>
                <ul class="profile-link">
                    <li><a href="#"><i class='bx bx-user icon'></i>Profile</a></li>
                    <li><a href="#"><i class='bx bx-cog icon' ></i>Settings</a></li>
                    <li><a href="index.php"><i class='bx bx-log-out-circle icon' ></i>Logout</a></li>
                </ul>
            </div>
        </div>
        
            <!-- sidebar  -->
        <div class="sidebar">
            <ul>
                <li>
                    <a class="side active" id="m_0" href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a class="divider" href="#">
                    <div>Main</div>
                    </a>
                </li>
                <li>
                    <a class="side" href="#">
                    <i class='bx bx-user-plus' ></i>
                    <div>HICS</div>
                    <i class='bx bx-chevron-right icon-right'></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="#" id="m_1" >Add Patient</a></li>
                        <!-- <li><a href="#" onclick="showForm('main_3')">Insurance</a></li> -->
                    </ul>
                </li>
                <li>
                    <a class="side" href="#">
                    <i class='bx bx-user-minus' ></i>
                    <div>BDMS</div>
                    <i class='bx bx-chevron-right icon-right'></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="#" id="m_2" >Billing</a></li>
                        <li><a href="#">Charge/Discharge</a></li>
                    </ul>
                </li>
                <li>
                    <a class="side" href="#">
                    <i class='bx bxs-user-detail' ></i>
                    <div>EMRS</div>
                    <i class='bx bx-chevron-right icon-right'></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="#" id="m_3" >Patient Informations</a></li>
                        <li><a href="#" id="m_4" >Insurance Records</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- dashboard container -->
        <div class="main active" id="main_0">
            <h1 class="title">Dashboard</h1>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Dashboard</a></li>
            </ul>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">120</div>
                        <div class="card-name">Patients</div>
                    </div>
                    <div class="icon-box">
                        <i class='bx bx-user' ></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">12</div>
                        <div class="card-name">Available Doctors</div>
                    </div>
                    <div class="icon-box">
                       <i class='bx bx-donate-heart' ></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">15</div>
                        <div class="card-name">Incharge Doctors</div>
                    </div>
                    <div class="icon-box">
                        <i class='bx bx-donate-heart' ></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">75</div>
                        <div class="card-name">Unpaid Patients</div>
                    </div>
                    <div class="icon-box">
                        <i class='bx bx-notepad' ></i>
                    </div>
                </div>
            </div>
            </div>

            <!-- patient container -->
            <div class="main1 " id="main_1">
            <h1 class="title">Patient Information</h1>
            <form action="patient_info.php" method="post" class="form">
                <div class="form-group">
                    <input type="text" id="patientid" name="patient-id" required>
                    <div class="labelline">Patient ID</div>
                </div>
                <div class="form-group">
                    <input type="text" id="patient-last-name" name="patient-lname" required>
                    <div class="labelline">Last Name</div>
                </div>
                <div class="form-group">
                    <input type="text" id="patient-first-name" name="patient-fname" required>
                    <div class="labelline">First Name</div>
                </div>
                <div class="form-group">
                    <input type="text" id="patient-middle-name" name="patient-mname" required>
                    <div class="labelline">Middle Name</div>
                </div>
                <div class="form-group">
                    <input type="text" id="patient-suffix" name="patient-suffix" required>
                    <div class="labelline">Suffix</div>
                </div>
                <div class="form-group">
                    <input type="number" id="patient-age" name="patient-age" required>
                    <div class="labelline">Age</div>
                </div>
                <div class="form-group">
                    <select id="patient-gender" name="patient-gender" required>
                        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="labelline">Gender</div>
                </div>
                <div class="form-groupP">
                    <input type="text" id="patient-address" name="patient-address" required>
                    <div class="labelline">Address</div>
                </div>
                <div class="form-groupP">
                    <input type="tel" id="patient-contact" name="patient-contact" required>
                    <div class="labelline">Contact Number</div>
                </div>  
                <div class="form-groupP">
                    <input type="tel" id="patient-emergency-contact" name="patient-emergency-contact" required>
                    <div class="labelline">Emergency Contact #</div>
                </div>
                <div class="form-groupP">
                    <select type="text" id="patient-civil-status" name="patient-civil-status" required>
                        <option value=""></option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                    <div class="labelline">Civil Status</div>
                </div>
                <div class="form-groupP" id="fm">
                    <input type="text" id="patient-occupation" name="patient-occupation" required>
                    <div class="labelline">Occupation</div>
                </div>
                <div class="form-groupP">
                    <select id="patient-blood-type" name="patient-blood-type" required>
                        <option value=""></option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    <div class="labelline">Blood Type</div>
                </div>
                <div class="form-groupP" id="fm">
                    <input type="radio" id="Yes" name="patient-insurance" value="Yes" required>
                    <label class="yes-label" for="Yes">Yes</label>
                    <input type="radio" id="No" name="patient-insurance" value="No" required>
                    <label class="no-label" for="No">No</label>
                    <div class="labellinen">Insurance provider?</div>
                </div>

                <!-- Patient Concern Form -->
                 
                <div class="pc">
                <h1 id="tit2" class="tit2">Patient Concern</h1>
                <div class="form-groupP2">
                    <input type="text" id="Chief-Complaint" name="Chief-Complaint" required>
                    <div class="labelline2">Chief Complaint</div>
                </div>
                <div class="form-groupP2">
                    <input type="text" id="Duration" name="Duration" required>
                    <div class="labelline2">Duration</div>
                </div>
                <div class="form-groupP2">
                    <input type="text" id="Location" name="Location" required>
                    <div class="labelline2">Location</div>
                </div>
                <div class="form-groupP2">
                    <input type="text" id="Severity" name="Severity" required>
                    <div class="labelline2">Severity</div>
                </div>
                <div class="form-groupP2_2">
                    <textarea id="Associated Symptoms" name="Associated-Symptoms" required></textarea>
                    <div class="labelline3">Associated Symptoms</div>
                </div>
                <div class="form-groupP2_2">
                    <textarea id="Past Medical History" name="Past-Medical-History" required></textarea>
                    <div class="labelline3">Past Medical History</div>
                </div>
                </div>
                <button id="submit" name="submit_btn" type="submit">Submit</button>
            </form>
            <button id="setPatientId" class="roll">SET ID</button>
            
            <!-- HMO provider -->

            <h1 id="tit" class="title2">HMO Provider Details</h1>
            <form action="patient_info.php" method="post" class="formH" id="HMO" enctype="multipart/form-data">
                <div class="form-groupH">
                    <input type="text" id="patientid" name="patient-id" required>
                    <div class="labellineH">Patient ID</div>
                </div>
                <div class="form-groupH">
                    <select id="patient-valid-id" name="patient-valid-id" required>
                        <option value=""></option>
                        <option value="Philippine Passport">Philippine Passport</option>
                        <option value="Driver's License">Driver's License</option>
                        <option value="SSS ID">SSS ID</option> 
                        <option value="National ID">National ID</option> 
                        <option value="GSIS ID">GSIS ID</option> 
                        <option value="Voter's ID">Voter's ID</option> 
                        <option value="PWD ID">PWD ID</option> 
                        <option value="NBI Clearance">NBI Clearance</option>
                        <option value="PhilHealth ID">PhilHealth ID</option> 
                        <option value="PRC ID">PRC ID</option> 
                    </select>
                    <div class="labellineH">Valid Government ID</div>
                </div>
                <div class="form-groupH">
                    <select id="patient-hmo" name="patient-hmo" required>
                        <option value=""></option>
                        <option value="Maxicare">Maxicare</option>
                        <option value="Intellicare">Intellicare</option>
                        <option value="Medicard">Medicard</option>
                        <option value="PhilCare">PhilCare</option> 
                        <option value="ValuCare">ValuCare</option> 
                        <option value="Caritas Health Shield">Caritas Health Shield</option> 
                        <option value="Avega Managed Care">Avega Managed Care</option> 
                        <option value="Insular Health Care (InLife)">Insular Health Care (InLife)</option> 
                        <option value="Pacific Cross">Pacific Cross</option>
                        <option value="EastWest Healthcare">EastWest Healthcare</option> 
                    </select>
                    <div class="labellineH">Name of HMO provider</div>
                </div>
                <div class="form-groupH">
                    <input type="tel" id="patient-card-number" name="patient-card-number" required>
                    <div class="labellineH">Card Membership #</div>
                </div>
                <div class="form-groupH">
                    <select id="patient-type-plan" name="patient-type-plan" required>
                        <option value=""></option>
                        <option value="Individual">Individual Plans</option>
                        <option value="Family">Family Plans</option>
                        <option value="Corporate">Corporate Plans</option>
                        <option value="Prepaid">Prepaid Health Cards</option>
                        <option value="Inpatient-Only">Inpatient-Only Plans</option>
                        <option value="Outpatient-Only">Outpatient-Only Plans</option>
                        <option value="Emergency">Emergency Plans</option>
                    </select>
                    <div class="labellineH">Type of Plan</div>
                </div>
                <div class="form-groupH">
                    <select id="coverage" name="coverage" required>
                        <option value=""></option>
                        <option value="Sulte">Sulte</option>
                        <option value="Private">Private</option>
                        <option value="Semi-Private">Semi-Private</option>
                        <option value="Ward">Ward</option>
                    </select>
                    <div class="labellineH">Coverage</div>
                </div>
                <div class="form-groupH">
                    <input type="text" id="patient-accredited-Hospital" name="patient-accredited-Hospital" required>
                    <div class="labellineH">Accredited Hospital</div>
                </div>
                <div class="inside">
                <div id="form-groupH2">
                    <!-- <div class="showfilebox">
                        <div class="left">
                            <span id='loa-d' class="filetype">Pdf</span>
                            <h3>haha.pdf</h3>
                        </div>
                        <div class="right">
                            <span><i class='bx bx-window-close '></i></span>
                        </div>
                    </div> -->
                </div>
                <div class="form-groupH2_2">
                    <input class="file-input" type="file" id="patient-LOA-document" name="loa-document" accept="pdf, .doc, .docx" hidden multiple>
                    <div class="sti">
                    <label for="patient-LOA-document" class="custom-file-upload">
                        <i class='bx bx-upload up'></i>
                        <p><span>Upload LOA Document</span></p>
                    </label>
                    </div>
                </div>
                </div>
                <button id="submit2" name="submit_btn2" type="submit">Submit</button>   
                </form>
            </div>

            <!-- Patient Billing -->
            <div class="main2 active" id="main_2">
            <h1 class="title">Patient Billing</h1>
            <form action="patient_info.php" method="post" class="form2">
                <div class="form-group2">
                    <input type="text" id="patientid" name="patient-id" required>
                    <div class="labelline4">Patient ID</div>
                </div>
                <div class="form-group2">
                    <input type="text" id="patient-last-name" name="patient-lname" required>
                    <div class="labelline4">Last Name</div>
                </div>
                <div class="form-group2">
                    <input type="text" id="patient-first-name" name="patient-fname" required>
                    <div class="labelline4">First Name</div>
                </div>
                <div class="form-group2">
                    <input type="text" id="patient-middle-name" name="patient-mname" required>
                    <div class="labelline4">Middle Name</div>
                </div>
                <div class="form-group2">
                    <input type="text" id="patient-suffix" name="patient-suffix" required>
                    <div class="labelline4">Suffix</div>
                </div>
                <div class="form-group2">
                    <input type="number" id="patient-age" name="patient-age" required>
                    <div class="labelline4">Age</div>
                </div>
                <div class="form-group2">
                    <select id="patient-gender" name="patient-gender" required>
                        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="labelline4">Gender</div>
                </div>
                <div class="form-groupP1">
                    <input type="text" id="patient-address" name="patient-address" required>
                    <div class="labelline4">Address</div>
                </div>
                <div class="form-groupP1">
                    <input type="tel" id="patient-contact" name="patient-contact" required>
                    <div class="labelline4">Contact Number</div>
                </div>  
                <div class="form-groupP1">
                    <input type="tel" id="patient-emergency-contact" name="patient-emergency-contact" required>
                    <div class="labelline4">Emergency Contact #</div>
                </div>
                <div class="form-groupP1">
                    <select type="text" id="patient-civil-status" name="patient-civil-status" required>
                        <option value=""></option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                    <div class="labelline4">Civil Status</div>
                </div>
                <div class="form-groupP1" id="fm">
                    <input type="text" id="patient-occupation" name="patient-occupation" required>
                    <div class="labelline4">Occupation</div>
                </div>
                <div class="form-groupP1">
                    <select id="patient-blood-type" name="patient-blood-type" required>
                        <option value=""></option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    <div class="labelline4">Blood Type</div>
                </div>
                <div class="form-groupP1" id="fm">
                    <input type="radio" id="Yes" name="patient-insurance" value="Yes" required>
                    <label class="yes-label" for="Yes">Yes</label>
                    <input type="radio" id="No" name="patient-insurance" value="No" required>
                    <label class="no-label" for="No">No</label>
                    <div class="labelline4">Insurance provider?</div>
                </div>

                <!-- Patient Concern Form -->
                 
                <div class="pc1">
                <h1 id="tit2" class="tit2">Patient Concern</h1>
                <div class="form-groupP5">
                    <input type="text" id="Chief-Complaint" name="Chief-Complaint" required>
                    <div class="labelline6">Chief Complaint</div>
                </div>
                <div class="form-groupP5">
                    <input type="text" id="Duration" name="Duration" required>
                    <div class="labelline6">Duration</div>
                </div>
                <div class="form-groupP5">
                    <input type="text" id="Location" name="Location" required>
                    <div class="labelline6">Location</div>
                </div>
                <div class="form-groupP5">
                    <input type="text" id="Severity" name="Severity" required>
                    <div class="labelline6">Severity</div>
                </div>
                <div class="form-groupP1_2">
                    <textarea id="Associated Symptoms" name="Associated-Symptoms" required></textarea>
                    <div class="labelline7">Associated Symptoms</div>
                </div>
                <div class="form-groupP1_2">
                    <textarea id="Past Medical History" name="Past-Medical-History" required></textarea>
                    <div class="labelline7">Past Medical History</div>
                </div>
                </div>
                <button id="submit" name="submit_btn" type="submit">Submit</button>
            </form>
            <button id="setPatientId" class="roll">SET ID</button>
            </div>

            <!-- Patient Record -->
            <div class="main3" id="main_3">
            <h1 class="title">Patient Record</h1>
            <form class="cont" action="" method="get">
                <div class="form-groupeE">
                    <input type="text" id="search" name="search" value="" required>
                    <div class="labellineE">Search Patient ID</div>
                </div>
                <div class="tabcont">
                <table>
                    <thead>
                        <tr>
                            <th>Patient ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Suffix</th>
                            <th>Contact Number</th>
                            <th>Emergency Contact #</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Blood Type</th>
                            <th>Address</th>
                            <th>Occupation</th>
                            <th>Civil Status</th>
                            <th>Complaint</th>
                            <th>Duration</th>
                            <th>Location</th>
                            <th>Severity</th>
                            <th>Symptoms</th>
                            <th>Past Medical History</th>
                            <th>Insurance Provided</th>
                            <th>Date/Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                        <?php
                        include 'patient_info.php';
                        ?>
                        </tr>
                </table>
            </div>
            </form>
            </div>
            
            <!-- Patient HMO -->
            <div class="main4" id="main_4">
            <h1 class="title">Patient HMO</h1>
            <form class="cont1" action="" method="get">
                <div class="form-groupeE1">
                    <input type="text" id="search1" name="search1" value="" required>
                    <div class="labellineE1">Search Patient ID</div>
                </div>
                <div class="tabcont1">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Patient ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Card Membership #</th>
                            <th>Type of Plan</th>
                            <th>Coverage</th>
                            <th>Patient Accredited Hospital</th>
                            <th>LOA</th>
                            <th>Date/Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                        <tr>
                        <?php
                        include 'hmo.php';
                        ?>
                        </tr>
                </table>
            </div>
            </form>
            </div>
            </div>

    <script src="drop.js"></script>
</body>
</html>