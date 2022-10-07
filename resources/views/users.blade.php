@extends('layouts.app')
@section('title', 'CUT - All Users')
@section('styles')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- END: Custom CSS-->
@endsection

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">21,459</h3>
                                        <span>Total Sellers</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">4,567</h3>
                                        <span>Total Buyers</span>
                                    </div>
                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-plus" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">19,860</h3>
                                        <span>Ranked Sellers</span>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-check" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">237</h3>
                                        <span>Number of Chats</span>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <i data-feather="user-x" class="font-medium-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list and filter start -->
                    <div class="card">
                        <div class="card-body border-bottom">
                            <h4 class="card-title">Search & Filter</h4>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label>User Role</label>
                                    <select class=" user_role form-select" id="user-role"
                                        aria-label="Default select example">
                                        <option selected>Select Role</option>
                                        <option value="0">Super Admin</option>
                                        <option value="1">Buyer</option>
                                        <option value="2">Seller</option>
                                        <option value="3">Analyst</option>
                                        <option value="4">Data Entry</option>
                                    </select>
                                </div>
                                <div class="col-md-4 d-none user_plan"></div>
                                <div class="col-md-6">
                                    <label>User Status</label>
                                    <select class=" user_status form-select status" id="user-role"
                                        aria-label="Default select example">
                                        <option selected>Select Role</option>
                                        <!-- <option value="1">Pending</option> -->
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table class="">
                            <thead class="custom-table-box">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody class="custom-table-tr">
                            </tbody>
                        </table>




                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-fullname">Full
                                                Name</label>
                                            <input type="text" class="form-control dt-full-name"
                                                id="basic-icon-default-fullname" placeholder="John Doe"
                                                name="user-fullname" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-uname">Username</label>
                                            <input type="text" id="basic-icon-default-uname"
                                                class="form-control dt-uname" placeholder="Web Developer"
                                                name="user-name" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-email">Email</label>
                                            <input type="text" id="basic-icon-default-email"
                                                class="form-control dt-email" placeholder="john.doe@example.com"
                                                name="user-email" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-contact">Contact</label>
                                            <input type="text" id="basic-icon-default-contact"
                                                class="form-control dt-contact" placeholder="+1 (609) 933-44-22"
                                                name="user-contact" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-company">Company</label>
                                            <input type="text" id="basic-icon-default-company"
                                                class="form-control dt-contact" placeholder="PIXINVENT"
                                                name="user-company" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="country">Country</label>
                                            <select id="country" class="select2 form-select">
                                                <option value="Australia">USA</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Canada">Canada</option>
                                                <option value="China">China</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Korea">Korea, Republic of</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Russia">Russian Federation</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label class="">User Role</label>
                                            <select id="user-role" class=" form-select">
                                                <option selected>Select Role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->role_key }}">{{ $role->role_title }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="mb-2 d-none">
                                            <label class="form-label" for="user-plan">Select Plan</label>
                                            <select id="user-plan" class="select2 form-select">
                                                <option value="basic">Basic</option>
                                                <option value="enterprise">Enterprise</option>
                                                <option value="company">Company</option>
                                                <option value="team">Team</option>
                                            </select>

                                        </div>
                                        <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                    </div>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('scripts')
    <!-- BEGIN: Vendor JS-->
    <script src="./app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="./app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="./app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="./app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="./app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/core/app-menu.js"></script>
    <script src="./app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="./app-assets/js/scripts/pages/app-user-list.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            usersdata();
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })


        function usersdata() {
            $.ajax({
                type: "GET",
                url: "/usersdata",
                dataType: "json",
                success: function(response) {
                    // console.log(response.users)
                    $.each(response.users, function(key, item) {
                        $('tbody').append(
                            '<tr>\
                                    <td>' + item.fname + ' ' + item.lname + '</td>\
                                    <td>' + item.role + '</td>\
                                    <td>' + item.email + '</td>\
                                    <td>' + item.mobile + '</td>\
                                    <td> active </td>\
                                    <td><a href="#">Edit</a> / <a href="#">Archive</a></td>\
                                    \</tr>'
                        );
                    });
                }

            });
        }

        $(document).on('change', '.user_role', function(e) {
            var roleid = $(this).val();
            //    alert(roleid);
            $.ajax({
                type: "GET",
                url: "/display-users/" + roleid,
                success: function(response) {
                    // console.log(response.users);
                    $('tbody').html('');
                    $.each(response.users, function(key, item) {
                            $('tbody').append(
                            '<tr>\
                            <td>' + item.fname + ' ' + item.lname + '</td>\
                            <td>' + item.role + '</td>\
                            <td>' + item.email + '</td>\
                            <td>' + item.mobile + '</td>\
                            <td> active </td>\
                            <td><a href="#">Edit</a> / <a href="#">Archive</a></td>\
                            \</tr>'
                            );
                    });

                }
            })
        });

        $(document).on('change','.status',function(){
           var status_id = $(this).val();
        //    alert(status_id);
        $.ajax({
            type:"GET",
            url:"/user-display/" + status_id,
            success: function(response){
                //   console.log(response.users);
                $('tbody').html('');
                    $.each(response.users, function(key, item) {
                            $('tbody').append(
                            '<tr>\
                            <td>' + item.fname + ' ' + item.lname + '</td>\
                            <td>' + item.role + '</td>\
                            <td>' + item.email + '</td>\
                            <td>' + item.mobile + '</td>\
                            <td> active </td>\
                            <td><a href="#">Edit</a> / <a href="#">Archive</a></td>\
                            \</tr>'
                            );
                    });
            }
        });
        });
    </script>

@endsection
