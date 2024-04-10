<!DOCTYPE html>
<html lang="en" xml:lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <title>
        Horizon
    </title>
    <link rel="shortcut icon" href="../img/login/logo-mb.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- BOOTSTARP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <!-- APP CSS -->
    <link rel="stylesheet" href="../assets/css/dashboard/grid.css">
    <link rel="stylesheet" href="../assets/css/dashboard/app.css">
    <style>
        /* Center the success modal */
        #successModal .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* Ensure modal takes up full viewport height */
        }

        /* Ensure modal content is centered */
        #successModal .modal-content {
            text-align: center;
        }

        /* Adjust modal body padding for better appearance */
        #successModal .modal-body {
            padding: 20px;
        }

        /* Adjust modal and backdrop z-index */
        #successModal {
            z-index: 1050; /* Ensure higher z-index than other elements */
        }

        .modal-backdrop.show {
            z-index: 1040; /* Ensure backdrop is behind modal */
        }
    </style>
    


</head>

<body>

    <!--======= SIDEBAR SECTION =======-->
    <div class="sidebar">
        <div class="sidebar-container">
            <div class="sidebar-logo">
                <a href="../index.html"><img src="../assets/img/landingpage/logo-nav-inverted.png"></a>
                <span><a href="../index.html">HORIZON GYM</a></span>
            </div>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="#member" class="active">
                    <i class='bx bx-home'></i>
                    <span>Members</span>
                </a>
            </li>
            <li>
                <a href="#analytic">
                    <i class='bx bx-chart'></i>
                    <span>analytics</span>
                </a>
            </li>
            <li>
                <a href="#package">
                    <i class='bx bx-category'></i>
                    <span>package</span>
                </a>
            </li>
            <li>
                <a href="#maileditor">
                    <i class='bx bx-mail-send'></i>
                    <span>mail</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-cog'></i>
                    <span>settings</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                            darkmode
                            <span class="darkmode-switch"></span>
                        </a>
                        <a href="../index.html" id="logout">
                            Logout
                            <i class='bx bx-log-out bx-flip-horizontal'></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!--======= END SIDEBAR =======-->

    <!--======= NAVBAR SECTION =======-->
    
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Dashboard
            </div>
        </div>
    

        <!--======= DASHBOARD SECTION =======-->
        <Section id= "member"> 
            <div class="main-content">
                <div class="row">
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="box box-hover">
                            <!-- COUNTER -->
                            <div class="counter">
                                <div class="counter-title">
                                    Total Members
                                </div>
                                <div class="counter-info">
                                    <div class="counter-count">
                                        <!-- Member count will be dynamically updated here -->
                                    </div>
                                    <i class='bx bxs-group'></i>
                                </div>
                            </div>
                            <!-- END COUNTER -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 col-md-6 col-sm-12">
                    </div>
                    <div class="col-12">
                        <!-- ORDERS TABLE -->
                        <div class="box">
                            <!-- BOX HEADER -->
                            <div class="box-header">
                                Members 
                                <div class="box-header-right">
                                    <!-- Search input field -->
                                    <div class="box-header-search">
                                        <input type="text" id="searchInput" placeholder="Search members..." class="search-input"> 
                                    </div>
                                    <div class="box-header-filter">
                                        <!-- Add member button -->
                                        <button class="btn btn-outline" id="exp-btn">Expiring</button>
                                    </div>
                                    <div class="box-header-filter">
                                        <!-- Add member button -->
                                        <button class="btn btn-outline" id="all-btn">All</button>
                                    </div>
                                <!-- Add member button -->
                                    <div class="box-header-button">
                                        <button class="btn btn-outline" id="myBtn">Add Member</button>
                                    </div>
                                </div>
                            </div>

                            <!-- The Modal ADD -->
                            <div id="add-members" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="modal-form">

                                        
                                        <form id="addMemberForm" enctype="multipart/form-data"  method="POST" action="add_member.php">

                                      
                                            <table>
                                                <tr>
                                                    <td>Image</td>
                                                    <td><input type="file" id="memberImage" name="memberImage"></td>
                                                </tr>
                                                <tr>
                                                    <td>Member Name</td>
                                                    <td><input type="text" id="memberName" name="memberName" placeholder="Member Name"></td>
                                                </tr>
                                                <tr>
                                                    <td>Join Date</td>
                                                    <td><input type="date" id="joinDate" name="joinDate"></td>
                                                </tr>
                                                <tr>
                                                    <td>Membership Package</td>
                                                    <td><select id="membershipPackage" name="membershipPackage">
                                                            <option>demo</option>
                                                            <option>demo1</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td><input type="text" id="memberPhone" name="memberPhone" placeholder="Phone"></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><input type="email" id="memberEmail" name="memberEmail" placeholder="Email"></td>
                                                </tr>
                                                <tr>
                                                    <td>Date of Birth</td>
                                                    <td><input type="date" id="memberAge" name="dateOfBirth" placeholder="Age"></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><input type="text" id="memberAddress" name="memberAddress" placeholder="Address"></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td><select id="memberGender" name="memberGender">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><button class="btn btn-outline" type="submit" name="submit">Submit</button></td>
                                                </tr>
                                            </table>
                                        </form>
                                        

                                    </div>
                                </div>
                            </div>
                        
                            
                            <!-- The Modal -->
                            <div id="full-member-detail" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="modal-form">
                                        <form id="displayMemberForm" enctype="multipart/form-data">
                                            <table>
                                                <tr>
                                                    <td>
                                                        Image
                                                    </td>
                                                    <td><img src="" id="displayMemberImage" alt="Member Image"></td>
                                                </tr> 
                                                <tr>
                                                    <td>
                                                        Member Name
                                                    </td>
                                                    <td><span id="displayMemberName"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Join Date
                                                    </td>
                                                    <td><span id="displayJoinDate"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Membership Package
                                                    </td>
                                                    <td><span id="displayMembershipPackage"></span></td>
                                                </tr>  
                                                <tr>
                                                    <td>
                                                        Phone Number
                                                    </td>
                                                    <td><span id="displayMemberPhone"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Email
                                                    </td>
                                                    <td><span id="displayMemberEmail"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Date of Birth
                                                    </td>
                                                    <td><span id="displayMemberAge"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Address
                                                    </td>
                                                    <td><span id="displayMemberAddress"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Gender
                                                    </td>
                                                    <td><span id="displayMemberGender"></span></td>
                                                </tr> 
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>   

                           
                                       

                           <div class="box-body">
                                <table id="display-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Join Date</th>
                                            <th>Membership</th>
                                            <th>Package</th>
                                        </tr>    
                                    </thead>

                                     <!--DATABASE CONNECTION AND QUERY FOR DISPLAYING MEMBER DATA-->
                                    <?php
                                        $con = new mysqli("localhost", "root", "", "horizon_gym");
                                        if (mysqli_connect_error()) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        } 
                                        $query="SELECT `memberId`, `memberImage`, `memberName`, `membershipPackage`, `joinDate` FROM `member_details`";
                                        $result=mysqli_query($con,$query);
                                        if(!$result)
                                            die("query failed".mysqli_error());
                                        else{
                                            while($row=mysqli_fetch_assoc($result))
                                            {

                                     ?>  
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['memberId']; ?></td>
                                            <td>
                                                <div class="member">
                                                <td><img src='"<?= $row['memberImage']; ?>"' height="25" width="25"></td> <!-- Update the image path accordingly -->
                                                </div>
                                            </td>
                                            <td><?php echo $row['memberName']; ?></td>
                                            <td><?php echo $row['joinDate']; ?></td>
                                            <td>
                                                <span class="gym-status membership-active">active</span>
                                            </td>
                                            <td><?php echo $row['membershipPackage']; ?></td>
                                            <td>
                                                <div class="table-button">
                                                   <button class="green-button btn btn-outline"><a href="renew.php?id=<?php echo $row['memberId']; ?>">Renew</a></button>
                                                    <button class="red-button btn btn-outline"><a href="delete.php?id=<?php echo $row['memberId']; ?>"><i class='bx bxs-user-minus'></i></a></button>
                                                    <button class="blue-button btn btn-outline" id="show-data-button"><i class='bx bx-id-card'></i></button> <!-- Added a class for easier selection -->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                            }
                                        }
                                        ?>
                                </table>
                            </div>                            
                        </div>
                        <!-- END OF MEMBERS TABLE -->
                    </div>
                </div>
            </div>
            
        </Section>
        
        <!--======= END OF DASHBOARD =======-->

        <!--======= ANALYTICS SECTION =======-->
        <Section id="analytic" class="hidden">
            <div class="analytics-container">
                <div class="box box-hover">
                    <iframe src="./piechart.php" width="100%" height="600px"></iframe>
                </div>
                <div class="box box-hover">
                    <iframe src="./piechart1.php" width="100%" height="600px"></iframe>
                </div>
            </div>
        </Section>
        



    <!--======= PACKAGE SECTION =======-->
    <Section id="package" class="hidden">
        <div class="card-box">
            <div class="card package-card">
                <div class="card-body">
                    <form>
                        <input type="text" placeholder="Package Name">
                        <select>
                            <option value="1 Month">1 Month</option>
                            <option value="3 Months">3 Months</option>
                            <option value="6 Months">6 Months</option>
                            <option value="12 Months">12 Months</option>
                        </select>
                        <input type="text" placeholder="Package Price">
                        <textarea placeholder="Package Description"></textarea>
                    </form>
                    <div class="card-btn-container">
                        <button class="btn btn-outline" id="card-add-btn">Edit</button>
                    </div>
                </div>
            </div>
            <div class="card package-card">
                <div class="card-body">
                    <form>
                        <input type="text" placeholder="Package Name">
                        <select>
                            <option value="1 Month">1 Month</option>
                            <option value="3 Months">3 Months</option>
                            <option value="6 Months">6 Months</option>
                            <option value="12 Months">12 Months</option>
                        </select>
                        <input type="text" placeholder="Package Price">
                        <textarea placeholder="Package Description"></textarea>
                    </form>
                    <div class="card-btn-container">
                        <button class="btn btn-outline" id="card-add-btn">Edit</button>
                    </div>
                </div>
            </div>
            <div class="card package-card">
                <div class="card-body">
                    <form>
                        <input type="text" placeholder="Package Name">
                        <select>
                            <option value="1 Month">1 Month</option>
                            <option value="3 Months">3 Months</option>
                            <option value="6 Months">6 Months</option>
                            <option value="12 Months">12 Months</option>
                        </select>
                        <input type="text" placeholder="Package Price">
                        <textarea placeholder="Package Description"></textarea>
                    </form>
                    <div class="card-btn-container">
                        <button class="btn btn-outline" id="card-add-btn">Edit</button>
                    </div>
                </div>
            </div>
            <div class="card package-card">
                <div class="card-body">
                    <form>
                        <input type="text" placeholder="Package Name">
                        <select>
                            <option value="1 Month">1 Month</option>
                            <option value="3 Months">3 Months</option>
                            <option value="6 Months">6 Months</option>
                            <option value="12 Months">12 Months</option>
                        </select>
                        <input type="text" placeholder="Package Price">
                        <textarea placeholder="Package Description"></textarea>
                    </form>
                    <div class="card-btn-container">
                        <button class="btn btn-outline" id="card-add-btn">Edit</button>
                    </div>
                </div>
            </div>
            <div class="card package-card">
                <div class="card-body">
                    <form>
                        <input type="text" placeholder="Package Name">
                        <select>
                            <option value="1 Month">1 Month</option>
                            <option value="3 Months">3 Months</option>
                            <option value="6 Months">6 Months</option>
                            <option value="12 Months">12 Months</option>
                        </select>
                        <input type="text" placeholder="Package Price">
                        <textarea placeholder="Package Description"></textarea>
                    </form>
                    <div class="card-btn-container">
                        <button class="btn btn-outline" id="card-edit-btn">Edit</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </Section>


    <!--======= MAILEDITOR SECTION =======-->
    <Section id="maileditor" class="hidden">
        <div class="maileditor-container">
            <div class="options">
                <!-- Text Format -->
                <button id="bold" class="option-button format">
                <i class="fa-solid fa-bold"></i>
                </button>
                <button id="italic" class="option-button format">
                <i class="fa-solid fa-italic"></i>
                </button>
                <button id="underline" class="option-button format">
                <i class="fa-solid fa-underline"></i>
                </button>
                <button id="strikethrough" class="option-button format">
                <i class="fa-solid fa-strikethrough"></i>
                </button>
                <button id="superscript" class="option-button script">
                <i class="fa-solid fa-superscript"></i>
                </button>
                <button id="subscript" class="option-button script">
                <i class="fa-solid fa-subscript"></i>
                </button>
        
                <!-- List -->
                <button id="insertOrderedList" class="option-button">
                <div class="fa-solid fa-list-ol"></div>
                </button>
                <button id="insertUnorderedList" class="option-button">
                <i class="fa-solid fa-list"></i>
                </button>
        
                <!-- Undo/Redo -->
                <button id="undo" class="option-button">
                <i class="fa-solid fa-rotate-left"></i>
                </button>
                <button id="redo" class="option-button">
                <i class="fa-solid fa-rotate-right"></i>
                </button>
        
                <!-- Link -->
                <button id="createLink" class="adv-option-button">
                <i class="fa fa-link"></i>
                </button>
                <button id="unlink" class="option-button">
                <i class="fa fa-unlink"></i>
                </button>
        
                <!-- Alignment -->
                <button id="justifyLeft" class="option-button align">
                <i class="fa-solid fa-align-left"></i>
                </button>
                <button id="justifyCenter" class="option-button align">
                <i class="fa-solid fa-align-center"></i>
                </button>
                <button id="justifyRight" class="option-button align">
                <i class="fa-solid fa-align-right"></i>
                </button>
                <button id="justifyFull" class="option-button align">
                <i class="fa-solid fa-align-justify"></i>
                </button>
                <button id="indent" class="option-button spacing">
                <i class="fa-solid fa-indent"></i>
                </button>
                <button id="outdent" class="option-button spacing">
                <i class="fa-solid fa-outdent"></i>
                </button>
        
                <!-- Headings -->
                <select id="formatBlock" class="adv-option-button">
                <option value="H1">H1</option>
                <option value="H2">H2</option>
                <option value="H3">H3</option>
                <option value="H4">H4</option>
                <option value="H5">H5</option>
                <option value="H6">H6</option>
                </select>
        
                <!-- Font -->
                <select id="fontName" class="adv-option-button"></select>
                <select id="fontSize" class="adv-option-button"></select>
        
                <!-- Color -->
                <div class="input-wrapper">
                <input type="color" id="foreColor" class="adv-option-button" />
                <label for="foreColor">Font Color</label>
                </div>
                <div class="input-wrapper">
                <input type="color" id="backColor" class="adv-option-button" />
                <label for="backColor">Highlight Color</label>
                </div>
            </div>
            <div id="text-input" contenteditable="true"></div>
            <div class="send-container">
                <button class="send">
                    <div class="wrapper">
                    <i class="fa-regular fa-paper-plane"></i>
                    </div>
                <span>Send</span>
                </button>
            </div>
        </div>
    </Section>
    </div>

    <div class="overlay"></div>
    <!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Messages have been sent to all gym members.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

    <!-- SCRIPT -->
    <!-- CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.js"></script>
    <script src="../assets/js/analytics/acquisitions.js"></script>
    <!-- BOOTSTARP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- APP JS -->
    <script src="../assets/js/dashboard/app.js"></script>
    <!-- TEXT EDITOR -->
    <script src="../assets/js/texteditor/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Make AJAX request to fetch member count
            $.ajax({
                type: "GET",
                url: "total_count.php",
                success: function(response) {
                    // Update the HTML content with the retrieved member count
                    $('.counter-count').text(response);
                },
                error: function() {
                    // Handle AJAX error (optional)
                    console.log('Error fetching member count.');
                }
            });
        });
    </script>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
    // Get the send button element
    const sendButton = document.querySelector('.send');

    // Add click event listener to the send button
    sendButton.addEventListener('click', function() {
        // Get the content from the text-input div
        const messageContent = document.getElementById('text-input').innerHTML;

        // Send an AJAX request to the PHP mailer script
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'email_index.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Prepare the data to be sent
        const data = 'message=' + encodeURIComponent(messageContent);

        // Handle the response from the server
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Display a success modal
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show(); // Show the success modal
            } else {
                // Display an error modal (if needed)
                console.log('Message could not be sent. Please try again later.');
            }
        };

        // Send the request with the message content
        xhr.send(data);
    });
});

    </script>

</body>

</html>

