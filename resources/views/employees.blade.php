@extends('layouts.app')
@section('title', 'CUT - Employees')
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


                <div class="card">
                    <div class="card-body border-bottom">

                        <div class="d-flex justify-content-between align-content-center">
                            <h4 class="card-title">Search & Filter</h4>
                            <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Add Member</span></button>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ">
                                <label>User Role</label>
                                <select class=" user_role form-select" id="user-role" aria-label="Default select example">
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
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->fname }} {{ $employee->lname }}</td>
                                    <td>{{ $employee->role }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->mobile }}</td>
                                    @if ($employee->status == 0)
                                        <td>inactive</td>
                                    @else
                                        <td>active</td>
                                    @endif
                                    <td><a data-id="{{ $employee->id }}" class="employid">Edit</a> /@if ($employee->status == 0)
                                            <a href="{{ url('unemployeearch/' . $employee->id) }}">Archived</a>
                                        @else
                                            <a href="{{ url('employeearch/' . $employee->id) }}">Archive</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <!-- <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="table-light">
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>User</td>
                                        <td>Admin</td>
                                        <td>1</td>
                                        <td>Active</td>
                                        <td>action</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->




                    <!-- Modal to add new user starts-->
                    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                        <div class="modal-dialog">
                            <form class="add-new-user modal-content pt-0" method="POST" action="/add-staff" >
                                @csrf
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                </div>

                                <div class="modal-body flex-grow-1">
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fname">First
                                            Name</label>
                                        <input type="text" class="form-control  fname"
                                            id="basic-icon-default-fname" placeholder="John " name="fname" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-lname">Last Name</label>
                                        <input type="text" id="basic-icon-default-lname"
                                            class="form-control  lname" placeholder="Doe" name="lname" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email"
                                            class="form-control  u-email" placeholder="john.doe@example.com"
                                            name="email" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-contact">Contact</label>
                                        <input type="number" id="basic-icon-default-contact"
                                            class="form-control  u-mobile" placeholder="+1 (609) 933-44-22"
                                            name="mobile" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-address">Address</label>
                                        <input type="text" id="basic-icon-default-address"
                                            class="form-control  u-address" placeholder="London Street UK" name="address" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="" id="user-role">User Role</label>
                                        <select id="user-role" name="role" class=" form-select">
                                            <option >Select Role</option>
                                            <option value="0">Super Admin</option>
                                            <option value="3">Analyst</option>
                                            <option value="4">Data Entry</option>
                                        </select>

                                    </div>

                                    <input type="hidden" name="status" class="status" value="1">

                                    <div class="mb-1 pass">
                                        <label class="form-label" for="basic-icon-default-password">Create Password</label>
                                        <input type="password" id="basic-icon-default-password" class="form-control password"
                                            placeholder="Password" name="password" />
                                    </div>

                                    <button type="submit" class="btn btn-primary  me-1 subdata" >Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>


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
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

        $(document).on('click', '.employid', function() {
            var empid = $(this).attr('data-id');
            // alert(empid);
            $.ajax({
                type: "GET",
                url: "fetch-employees/" + empid,
                success: function(response) {
                    // console.log(response.users);
                    $('.fname').val(response.users.fname);
                    $('.lname').val(response.users.lname);
                    $('.u-email').val(response.users.email);
                    $('.u-mobile').val(response.users.mobile);
                    $('.u-address').val(response.users.address);
                    $('#user-role').val(response.users.role);
                    // $('.pass').html("");
                }
            });

             $('#modals-slide-in').modal('show');
        });

        $(document).on('click', '.subdata', function(e) {
                e.preventDefault();
                // console.log('hello');
                var data = {
                    'fname': $('.fname').val(),
                    'lname': $('.lname').val(),
                    'email': $('.u-email').val(),
                    'mobile': $('.u-mobile').val(),
                    'address': $('.u-address').val(),
                    'role':$('#user-role').val(),
                    'status':$('.status').val(),
                    'password':$('.password').val(),
                }

                //  console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/add-staff",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        //  console.log(response);
                        location.reload();

                    }

                });

            });
    </script>

@endsection
