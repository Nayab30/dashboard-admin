<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon Icon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
   
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
<!-- Remix ICON CDN -->
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
   
    
    <title>Admin Panel</title>
    
</head>
 <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">
            
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
               <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><img src="./assets/image/logo.png" alt="" class="logo" width="100"><span class="small">admin Panel</span></a></h3>
               </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row  justify-content-between ">
                    
                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8  pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>

                        </span>
                       
                           <!-- <i class="ri-moon-fill" id="toggleDark"></i> -->


                        <!--Toggle sidebar-->
                    </div>

                    <div class="col-sm-4 col-8 dark-icon" style="margin-top: 15px;">
                           <i class="ri-sun-line" id="toggleDark"></i>
                    </div>
                
                </div>    
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="./assets/image/pic4.png" alt="" class="rounded-circle" />
                        <p><strong>sara</strong></p>
                        <span class="text-primary small"><strong>Parent</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="/dashboard.html" class=""><i class="fa-solid fa-child mr-3"> </i>
                                    <span class="none">Child Details</i></span>
                                </a>
                             
                            </li>
                            </li>
                            <li class="parent">
                                <a href="/vaccinedate.html" class=""><i class="fa-solid fa-syringe mr-3"></i>
                                    <span class="none">Date of vaccination </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="/vaccinereport.html"  class=""><i class="fa-solid fa-square-poll-horizontal mr-3"></i>
                                    <span class="none">Report of vaccination<i class="pull-right align-bottom"></i></span>
                                </a>
                                
                            </li>
                            <li class="parent">
                                <a href="/vaccinelist.html" class=""><i class="fa-solid fa-clipboard-list mr-3"></i>
                                    <span class="none">List of vaccination <i class="pull-right align-bottom"></i></span>
                                </a>
                                
                            </li>
                        
                            <li class="parent">
                                <a href="/hospital.html" class=""><i class=" fa-solid fa-hotel mr-3"></i>
                                    <span class="none">Hospitals<i class=" pull-right align-bottom"></i></span>
                                </a>
                                
                            </li>
                            <li class="parent">
                                <a href="#" class=""><i class="fa-solid fa-right-from-bracket mr-3"></i>
                                    <span class="none">Logout <i class=" pull-right align-bottom"></i></span>
                                </a>
                            </li>
                                
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0 m-0">
                <h5 class="mb-3" ><strong>Child Details</strong></h5>
                
                
            
                <div class="mt-4 mb-4 p-3  border shadow-sm lh-sm">
                    <!--Order Listing-->
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="productList">
                                <thead>
                                    <tr>
                                       
                                        <th> ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Email</th>
                                        <th>Vaccine date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    
                                        <td>1</td>
                                        <td class="align-middle">
                                            Sara Khan
                                        </td>
                                        <td class="align-middle"><span class="">7</span></td>
                                        <td class="align-middle">saba@gmail.com</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            
                                            <button class="btn btn-success" data-toggle="modal" data-target="#idUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    <!--/Order Listing-->
                   

                    <!--Order Update Modal-->
                    <div class="modal fade" id="idUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">id#1 details update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped text-dark table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th scope="row">Name</th>
                                                <th>Age</th>
                                                <th>Email</th>
                                                <th>Date of vaccination</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">01</td>
                                                <td scope="row" class="align-middle">Sara</td>
                                                <td >7</td>
                                                <td class="align-middle">sara@gmail.com</td>
                                                <td class="align-middle">27/3/25</td>
                                                <td style="width: 120px;" class="align-middle">
                                                    <button class="btn btn-success mr-1"><i class="fa fa-pencil"></i></button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <!-- <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4> -->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Update Modal-->
                </div>

                <!--Footer-->
                <div class="row mt-5 mb-4 footer">
                    <div class="col-sm-8">
                        <span>&copy; All rights reserved 2025 designed by <a class="text-theme" href="#">VAXHEALTH</a></span>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="#" class="ml-2">Contact Us</a>
                        <a href="#" class="ml-2">Support</a>
                    </div>
                </div>
                <!--Footer-->

            </div>
        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>


  <!-- -------------- Theme-------------------- -->

    <script>
    var icon = document.getElementById("toggleDark");

    icon.onclick = function() {
        document.body.classList.toggle("dark-theme");
        
        // Toggle icon classes (assuming you're using Remix Icons)
        if (document.body.classList.contains("dark-theme")) {
            icon.classList.remove("ri-sun-line");
            icon.classList.add("ri-moon-fill");
        } else {
            icon.classList.remove("ri-moon-fille");
            icon.classList.add("ri-sun-line");
        }
    }
</script>

    
  </body>
</html>
