<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">

        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="border-faded bg-faded p-3 mb-g d-flex">
                        <input type="text" id="js-filter-contacts" name="filter-contacts" class="form-control shadow-inset-2 form-control-lg" placeholder="Filter contacts">
                        <div class="btn-group btn-group-lg btn-group-toggle hidden-lg-down ml-3" data-toggle="buttons">
                            <label class="btn btn-default active waves-effect waves-themed">
                                <input type="radio" name="contactview" id="grid" checked="" value="grid"><i class="fas fa-table"></i>
                            </label>
                            <label class="btn btn-default waves-effect waves-themed">
                                <input type="radio" name="contactview" id="table" value="table"><i class="fas fa-th-list"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row js-list-filter" id="js-contacts">
                <?php
                $articles = [
                    [
                        "name" => "Oliver Kopyov",
                        "tag" => "oliver kopyov",
                        "foto" => "img/demo/avatars/avatar-b.png",
                        "prof.status" => "IT Director, Gotbootstrap Inc.",
                        "tel" => "+1 317-456-2564",
                        "mail" => "oliver.kopyov@smartadminwebapp.com",
                        "addres" => "15 Charist St, Detroit, MI, 48212, USA",
                        "status" => "status-success",
                        

                    ],
                    [
                        "name" => "Sesha Gray",
                        "tag" => "sesha gray",
                        "prof.status" => "Project Manager, Gotbootstrap Inc.",
                        "tel" => "+1 313-461-1347",
                        "mail" => "sesha.gray@smartadminwebapp.com",
                        "addres" => "134 Hamtrammac, Detroit, MI, 48314, USA",
                        "foto" => "img/demo/avatars/avatar-c.png",
                        "status" => "status-success"

                    ],
                    [
                        "name" => "Dr. John Cook PhD",
                        "tag" => "dr. john cook",
                        "prof.status" => "Human Resources, Gotbootstrap Inc.",
                        "tel" => "+1 313-779-1347",
                        "mail" => "john.cook@smartadminwebapp.com",
                        "addres" => "55 Smyth Rd, Detroit, MI, 48341, USA",
                        "foto" => "img/demo/avatars/avatar-e.png",
                        "status" => "status-warning",

                    ],
                    [
                        "name" => "Jim Ketty",
                        "tag" => "jim ketty",
                        "prof.status" => "Staff Orgnizer, Gotbootstrap Inc",
                        "tel" => "+1 313-779-3314",
                        "mail" => "jim.ketty@smartadminwebapp.com",
                        "addres" => "134 Tasy Rd, Detroit, MI, 48212, USA",
                        "foto" => "img/demo/avatars/avatar-f.png",
                        "status" => "status-danger",

                    ],
                    [
                        "name" => "Dr. John Oliver",
                        "tag" => "john oliver",
                        "prof.status" => "Oncologist, Gotbootstrap Inc.",
                        "tel" => "+1 313-779-8134",
                        "mail" => "john.oliver@smartadminwebapp.com",
                        "addres" => "134 Gallery St, Detroit, MI, 46214, USA",
                        "foto" => "img/demo/avatars/avatar-g.png",
                        "status" => "status-warning",
                        

                    ],
                    [
                        "name" => "Sarah McBrook",
                        "tag" => "sarah mcbrook",
                        "prof.status" => "Xray Division, Gotbootstrap Inc.",
                        "tel" => "+1 313-779-7613",
                        "mail" => "sarah.mcbrook@smartadminwebapp.com",
                        "addres" => "13 Jamie Rd, Detroit, MI, 48313, USA",
                        "foto" => "img/demo/avatars/avatar-h.png",
                        "status" => "status-danger",

                    ],
                    [
                        "name" => "Jimmy Fellan",
                        "tag" => "jimmy fellan",
                        "prof.status" => "Accounting, Gotbootstrap Inc.",
                        "tel" => "+1 313-779-4314",
                        "mail" => "jimmy.fallan@smartadminwebapp.com",
                        "addres" => "55 Smyth Rd, Detroit, MI, 48341, USA",
                        "foto" => "img/demo/avatars/avatar-i.png",
                        "status" => "status-success",

                    ],
                    [
                        "name" => "Arica Grace",
                        "tag" => "arica race",
                        "prof.status" => "Accounting, Gotbootstrap Inc.",
                        "tel" => "+1 313-779-3347",
                        "mail" => "arica.race@smartadminwebapp.com",
                        "addres" => "798 Smyth Rd, Detroit, MI, 48341, USA",
                        "foto" => "img/demo/avatars/avatar-k.png",
                        "status" => "status-danger",
                        
                    ],
                ];
                
                ?>
                <?php foreach ($articles as $i):?>
                <div class="col-xl-4">
                    <div id="c_1" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="<?php echo $i["tag"]; ?>">
                        <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                            <div class="d-flex flex-row align-items-center">
                                <span class="status <?php echo $i["status"]; ?> mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url('<?php echo $i["foto"];?>'); background-size: cover;"></span>
                                </span>
                                <div class="info-card-text flex-1">
                                    <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo $i["name"]; ?>
                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                    </a>
                                    
                                    <span class="text-truncate text-truncate-xl"><?php echo $i["prof.status"]; ?></span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body p-0 collapse show">
                            <div class="p-3">
                                <a href="tel:<?php $i["tel"]; ?>" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i><?php echo $i["tel"]; ?></a>
                                <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i><?php echo $i["mail"]; ?></a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i><?php echo $i["addres"]; ?></address>
                                <div class="d-flex flex-row">
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#3b5998">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#0077B5">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
    <!--================================================================================================================================--
                <div class="col-xl-4">
                    <div id="c_2" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="sesha gray">
                        <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                            <div class="d-flex flex-row align-items-center">
                                <span class="status status-warning mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url(''); background-size: cover;"></span>
                                </span>
                                <div class="info-card-text flex-1">
                                    <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                                        
                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Send Email</a>
                                        <a class="dropdown-item" href="#">Create Appointment</a>
                                        <a class="dropdown-item" href="#">Block User</a>
                                    </div>
                                    <span class="text-truncate text-truncate-xl"></span>
                                </div>
                                <button class="js-expand-btn btn btn-sm btn-default d-none waves-effect waves-themed" data-toggle="collapse" data-target="#c_2 > .card-body + .card-body" aria-expanded="false">
                                    <span class="collapsed-hidden">+</span>
                                    <span class="collapsed-reveal">-</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0 collapse show">
                            <div class="p-3">
                                <a href="tel:+13174562564" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i></a>
                                <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i></a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i></address>
                                <div class="d-flex flex-row">
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#3b5998">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#0077B5">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  =====================================================================================================================================              
                <div class="col-xl-4">
                    <div id="c_3" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="dr john cook">
                        <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                            <div class="d-flex flex-row align-items-center">
                                <span class="status status-danger mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                </span>
                                <div class="info-card-text flex-1">
                                    <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                                        
                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Send Email</a>
                                        <a class="dropdown-item" href="#">Create Appointment</a>
                                        <a class="dropdown-item" href="#">Block User</a>
                                    </div>
                                    <span class="text-truncate text-truncate-xl"></span>
                                </div>
                                <button class="js-expand-btn btn btn-sm btn-default d-none waves-effect waves-themed" data-toggle="collapse" data-target="#c_3 > .card-body + .card-body" aria-expanded="false">
                                    <span class="collapsed-hidden">+</span>
                                    <span class="collapsed-reveal">-</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0 collapse show">
                            <div class="p-3">
                                <a href="tel:+13174562564" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i></a>
                                <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i></a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i></address>
                                <div class="d-flex flex-row">
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#3b5998">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#0077B5">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    ==================================================================================================================================                
                <div class="col-xl-4">
                    <div id="c_4" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="jim ketty">
                        <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                            <div class="d-flex flex-row align-items-center">
                                <span class="status status-success mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url('img/demo/avatars/avatar-k.png'); background-size: cover;"></span>
                                </span>
                                <div class="info-card-text flex-1">
                                    <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                                        
                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Send Email</a>
                                        <a class="dropdown-item" href="#">Create Appointment</a>
                                        <a class="dropdown-item" href="#">Block User</a>
                                    </div>
                                    <span class="text-truncate text-truncate-xl">Staff Orgnizer, Gotbootstrap Inc.</span>
                                </div>
                                <button class="js-expand-btn btn btn-sm btn-default d-none waves-effect waves-themed" data-toggle="collapse" data-target="#c_4 > .card-body + .card-body" aria-expanded="false">
                                    <span class="collapsed-hidden">+</span>
                                    <span class="collapsed-reveal">-</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0 collapse show">
                            <div class="p-3">
                                <a href="tel:+13174562564" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i> </a>
                                <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i> </a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i></address>
                                <div class="d-flex flex-row">
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#3b5998">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#0077B5">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
===========================================================================================================================================
                <div class="col-xl-4">
                    <div id="c_5" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="aaron tellus">
                        <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                            <div class="d-flex flex-row align-items-center">
                                <span class="status status-success mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url('img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                </span>
                                <div class="info-card-text flex-1">
                                    <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                                        
                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Send Email</a>
                                        <a class="dropdown-item" href="#">Create Appointment</a>
                                        <a class="dropdown-item" href="#">Block User</a>
                                    </div>
                                    <span class="text-truncate text-truncate-xl"></span>
                                </div>
                                <button class="js-expand-btn btn btn-sm btn-default d-none waves-effect waves-themed" data-toggle="collapse" data-target="#c_5 > .card-body + .card-body" aria-expanded="false">
                                    <span class="collapsed-hidden">+</span>
                                    <span class="collapsed-reveal">-</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0 collapse show">
                            <div class="p-3">
                                <a href="tel:+13174562564" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i> </a>
                                <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i></a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i></address>
                                <div class="d-flex flex-row">
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#3b5998">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#0077B5">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
===============================================================================================================================================================================================================
                <div class="col-xl-4">
                    <div id="c_6" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="sarah mcbrook">
                        <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                            <div class="d-flex flex-row align-items-center">
                                <span class="status status-success mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                </span>
                                <div class="info-card-text flex-1">
                                    <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                                        Sarah McBrook
                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Send Email</a>
                                        <a class="dropdown-item" href="#">Create Appointment</a>
                                        <a class="dropdown-item" href="#">Block User</a>
                                    </div>
                                    <span class="text-truncate text-truncate-xl"></span>
                                </div>
                                <button class="js-expand-btn btn btn-sm btn-default d-none waves-effect waves-themed" data-toggle="collapse" data-target="#c_6 > .card-body + .card-body" aria-expanded="false">
                                    <span class="collapsed-hidden">+</span>
                                    <span class="collapsed-reveal">-</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0 collapse show">
                            <div class="p-3">
                                <a href="tel:+13174562564" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i> </a>
                                <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i> </a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i> </address>
                                <div class="d-flex flex-row">
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#3b5998">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#0077B5">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div id="c_7" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="jimmy fellan">
                        <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                            <div class="d-flex flex-row align-items-center">
                                <span class="status status-success mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url('img/demo/avatars/avatar-i.png'); background-size: cover;"></span>
                                </span>
                                <div class="info-card-text flex-1">
                                    <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                                        
                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Send Email</a>
                                        <a class="dropdown-item" href="#">Create Appointment</a>
                                        <a class="dropdown-item" href="#">Block User</a>
                                    </div>
                                    <span class="text-truncate text-truncate-xl"></span>
                                </div>
                                <button class="js-expand-btn btn btn-sm btn-default d-none waves-effect waves-themed" data-toggle="collapse" data-target="#c_7 > .card-body + .card-body" aria-expanded="false">
                                    <span class="collapsed-hidden">+</span>
                                    <span class="collapsed-reveal">-</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0 collapse show">
                            <div class="p-3">
                                <a href="tel:+13174562564" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i> </a>
                                <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i> </a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i> </address>
                                <div class="d-flex flex-row">
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#3b5998">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#0077B5">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div id="c_8" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="">
                        <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                            <div class="d-flex flex-row align-items-center">
                                <span class="status status-success mr-3">
                                    <span class="rounded-circle profile-image d-block " style="background-image:url('img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                </span>
                                <div class="info-card-text flex-1">
                                    <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                                        
                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Send Email</a>
                                        <a class="dropdown-item" href="#">Create Appointment</a>
                                        <a class="dropdown-item" href="#">Block User</a>
                                    </div>
                                    <span class="text-truncate text-truncate-xl"></span>
                                </div>
                                <button class="js-expand-btn btn btn-sm btn-default d-none waves-effect waves-themed" data-toggle="collapse" data-target="#c_8 > .card-body + .card-body" aria-expanded="false">
                                    <span class="collapsed-hidden">+</span>
                                    <span class="collapsed-reveal">-</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0 collapse show">
                            <div class="p-3">
                                <a href="tel:+13174562564" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mobile-alt text-muted mr-2"></i> </a>
                                <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                                    <i class="fas fa-mouse-pointer text-muted mr-2"></i> </a>
                                <address class="fs-sm fw-400 mt-4 text-muted">
                                    <i class="fas fa-map-pin mr-2"></i> </address>
                                <div class="d-flex flex-row">
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#3b5998">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#0077B5">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script src="js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
            //accordion filter
            initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
            // nested list filter
            initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
            //init navigation 
            initApp.buildNavigation($('#js_nested_list'));

            $(document).ready(function()
            {


                var $initScope = $('#js-lightgallery');
                if ($initScope.length)
                {
                    $initScope.justifiedGallery(
                    {
                        border: -1,
                        rowHeight: 150,
                        margins: 8,
                        waitThumbnailsLoad: true,
                        randomize: false,
                    }).on('jg.complete', function()
                    {
                        $initScope.lightGallery(
                        {
                            thumbnail: true,
                            animateThumb: true,
                            showThumbByDefault: true,
                        });
                    });
                };
                $initScope.on('onAfterOpen.lg', function(event)
                {
                    $('body').addClass("overflow-hidden");
                });
                $initScope.on('onCloseAfter.lg', function(event)
                {
                    $('body').removeClass("overflow-hidden");
                });

                $('input[type=radio][name=contactview]').change(function()
                {
                    if (this.value == 'grid')
                    {
                        $('#js-contacts .card').removeClassPrefix('mb-').addClass('mb-g');
                        $('#js-contacts .col-xl-12').removeClassPrefix('col-xl-').addClass('col-xl-4');
                        $('#js-contacts .js-expand-btn').addClass('d-none');
                        $('#js-contacts .card-body + .card-body').addClass('show');

                    }
                    else if (this.value == 'table')
                    {
                        $('#js-contacts .card').removeClassPrefix('mb-').addClass('mb-1');
                        $('#js-contacts .col-xl-4').removeClassPrefix('col-xl-').addClass('col-xl-12');
                        $('#js-contacts .js-expand-btn').removeClass('d-none');
                        $('#js-contacts .card-body + .card-body').removeClass('show');
                    }

                });

                //initialize filter
                initApp.listFilter($('#js-contacts'), $('#js-filter-contacts'));
            });



        </script>
    </body>
</html>
