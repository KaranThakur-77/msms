@extends('layout')

@push('page-title')
    Users
@endpush

@section('head-links')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

@section('add-btn')
    {{-- <div class="container complain-form mt-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            Complain Form
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <form class="d-flex flex-column align-items-start">
                            <div class="mb-3 mt-3 d-flex flex-column align-items-start">
                                <label for="title" class="form-label">Complain Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" />
                                <div id="titleHelp" class="form-text">
                                    Your complain will be treated with utmost care.
                                </div>
                            </div>
                            <div class="mb-3 d-flex flex-column align-items-start ">
                                <label for="summernote" class="form-label">Complain Letter</label>
                                <div id="summernote"></div>
                                <script>
                                    $("#summernote").summernote({
                                        placeholder: "Write your complain here",
                                        tabsize: 2,
                                        height: 120,
                                        toolbar: [
                                            ["style", ["style"]],
                                            ["font", ["bold", "underline", "clear"]],
                                            ["color", ["color"]],
                                            ["para", ["ul", "ol", "paragraph"]],
                                            ["table", ["table"]],
                                            ["insert", ["link", "picture", "video"]],
                                            ["view", ["fullscreen", "codeview", "help"]],
                                        ],
                                        name: "complain",
                                    });
                                </script>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Submit Complain
                            </button>
                        </form>

                       
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add User
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Registration Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="" class="">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Fullname" />
                            <label for="floatingInput">Fullname</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Address" />
                                    <label for="floatingInput">Address</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput"
                                        placeholder="Date of Birth" />
                                    <label for="floatingInput">Date of Birth</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="E-Mail" />
                                    <label for="floatingInput">E-Mail</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Contact Number" />
                                    <label for="floatingInput">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Choose your gender...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                            <label for="floatingSelect">Gender</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Select your role...</option>
                                <option value="1">Stduent</option>
                                <option value="2">Staff</option>
                                <option value="3">Guardians</option>
                            </select>
                            <label for="floatingSelect">User Type</label>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Profile Picture</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>


                        <button type="submit" class="btn btn-primary float-start">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>DOB</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>DOB</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
