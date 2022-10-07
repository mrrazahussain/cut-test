@extends('layouts.app')
@section('title', 'Dashboard analytics - Vuexy - Bootstrap HTML admin template')
@section('styles')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

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
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Categories</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Categories</a>
                                </li>
                                <li class="breadcrumb-item active">Price Range
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                                    class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                    class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                                    class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                    class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Products</th>
                                    <th scope="col">Price Range</th>
                                    <th scope="col">Expiry Date</th>
                                    <th scope="col">Category</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Product 1</th>
                                    <td>001-100</td>
                                    <td>31/12/2023</td>
                                    <td>Category 1</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Product 2</th>
                                    <td>101-200</td>
                                    <td>31/8/2023</td>
                                    <td>Category 2</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Product 3</th>
                                    <td>201-300</td>
                                    <td>31/12/2024</td>
                                    <td>Category 3</td>
                                  </tr>
                                </tbody>
                              </table> -->
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">Expiry Date</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categorydata as $category)
                                    <tr>
                                        <td scope="row">{{ $category->category_name }}</td>
                                        <td><img class="round" src="{{ asset('images/categories/'.$category->category_icon) }}" alt="avatar" height="30" width="30"></td>
                                        <!-- <td>31/12/2023</td> -->
                                        <td class="padding-left-30">{{ $category->order_number }}</td>
                                        <td scope="row"><a data-id={{ $category->id }} class="catid">Edit</a> / @if($category->status == 0)<a href="{{ url('uncatarch/'.$category->id) }}">Archived</a>@else<a href="{{ url('catarch/'.$category->id) }}">Archive</a>@endif</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
                <div class="modal modal-slide-in fade" id="modals-slide-in">
                    <div class="modal-dialog sidebar-sm">
                        <form class="add-new-record modal-content pt-0" id="form" method="POST" action="/addcategory" enctype="multipart/form-data">
                            @csrf
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                            </div>
                            <div class="modal-body flex-grow-1">

                                <div class="mb-1">
                                    <label class="form-label" for="basic-icon-default-fullname">Category Name</label>
                                    <input type="text" name="category_name" class="form-control dt-full-name category_name" id="basic-icon-default-fullname" placeholder="Enter Name" aria-label="John Doe" required/>
                                    @error('category_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="basic-icon-default-post">Icon</label>
                                    <input type="file" name="category_icon" id="basic-icon-default-post " class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" required/>
                                    @error('category_icon')
                                    <span class="invalid-feedback">{{ $message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-1" id="img">
                                    <img src="" id="cat_id" style="width: 100px;height:50px;"/>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="basic-icon-default-email">Order</label>
                                    <input type="number" name="order_number" id="basic-icon-default-email " class="form-control dt-email order_number" placeholder="Order Number" aria-label="john.doe@example.com" required/>
                                    @error('order_number')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <!-- <small class="form-text"> You can use letters, numbers & periods </small> -->
                                </div>
                                <input type="hidden" name="status" value="1">


                                <!-- <div class="mb-1">
                                    <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                    <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                    <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000" />
                                </div> -->

                                <button type="submit"  data-id={{ $category->id }} id="add-update" class="btn btn-primary data-submit me-1">Add</button>
                                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!--/ Basic table -->

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
    <script src="./app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="./app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/core/app-menu.js"></script>
    <script src="./app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="./app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            const myElement = document.getElementById("img");
              myElement.style.display = "none";
            if (feather) {
                feather.replace({
                    width: 18,
                    height: 18
                });
            }
        })

        $('#modals-slide-in').on('click',function(){
            $(this).closest('form').find("input[type=text], input[type=file],input[type=hidden],input[type=number]").val("");
            $('#img').html('');
        });

        $(document).on('click','.catid',function(e){
            const myElement = document.getElementById("img");
            myElement.style.display = "block";
            var catid = $(this).attr('data-id');
            $('#modals-slide-in').modal('show');
            $.ajax({
                type:"GET",
                url:"/cat-data/" + catid,
                success: function (response){
                    $('.category_name').val(response.category.category_name);
                    $('.category_icon').val(response.category.category_icon);
                    $('.order_number').val(response.category.order_number);
                    $('#cat_id').attr('src',baseUrl+"/images/categories/"+response.category.category_icon);
                    $('#add-update').html('Update');


                }
            });
         });
    </script>
@endsection
