<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link href="<?=base_url()?>asset/admin/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href=""> Online Blood Donate</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
               
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?=base_url()?>Logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
 
                            <a class="nav-link" href="<?=base_url()?>Admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                             <a class="nav-link" href="<?=base_url()?>Admin/add-user">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                               Add User
                            </a>


                             <a class="nav-link" href="<?=base_url()?>Admin/view-user">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                               View User
                            </a>

                             <a class="nav-link" href="<?=base_url()?>Admin/add-place">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                               Add Place
                            </a>


                             <a class="nav-link" href="<?=base_url()?>Admin/view-place">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                               View Place
                            </a>

                             <a class="nav-link" href="<?=base_url()?>Admin/add-blood">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                               Add Blood
                            </a>


                             <a class="nav-link" href="<?=base_url()?>Admin/view-blood">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                               View Blood
                            </a>

                             <a class="nav-link" href="<?=base_url()?>Admin/add-bdh">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                               Add Recent Blood Doner
                            </a>


                             <a class="nav-link" href="<?=base_url()?>Admin/view-bdh">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                               View Recent Blood Doner
                            </a>


                             <a class="nav-link" href="<?=base_url()?>Admin/view-contact">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                               View Message (<?php $message=$this->db->get('tbl_contact')->num_rows(); echo $message; ?>)
                            </a>


                             
                             
                        </div>
                    </div>
                   
                </nav>
            </div>