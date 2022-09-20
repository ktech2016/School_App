@extends('main')
@section('content')

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Teacher</h1>
                                @if ($errors->any())
                                    <div class="alert alert-danger mt-2">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('successMsg'))
                                    <div class="alert alert-success mt-2" role="alert">
                                        {{session('successMsg')}}
                                    </div>
                                @endif
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float:right;">Add Teacher +</button>
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Register Teacher</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!--form inserted-->
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="name" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="lastname"  type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="phone" type="number" placeholder="Enter your phone number" />
                                                        <label for="inputFirstName">Phone</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="gender" aria-label="Default select example">
                                                            <option selected>Select Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;" >
                                                <div class="form-floating">
                                                        <select class="form-select" name="role" aria-label="Default select example">
                                                            <option value="teacher" selected>Teacher Role</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name=date_of_birth type="date" placeholder="Enter your date of birth" />
                                                        <label for="inputFirstName">Date of Birth</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="year" aria-label="Default select example">
                                                            <option selected>Year of Employment</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <label for="formFile" class="form-label"></label>
                                                        <input class="form-control" name="image" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="form-floating mb-3" style="padding-top: 10px;">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" href="login.html">Add Teacher</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"></div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" type="submit">Add Teacher</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Teacher's Table</li>
                        </ol>
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-body">
                                            <!--Table Content-->
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">S/N</th>
                                                    <th scope="col">Photo</th>
                                                    <th scope="col">Firstname</th>
                                                    <th scope="col">Lastname</th>
                                                    <th scope="col">Staff No.</th>
                                                    <th scope="col">Date of Birth</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($teacherData as $key => $teacherDatas)
                                                            <tr>
                                                            <th scope="row">{{$key + 1}}</th>
                                                            <td><img src="{{url('upload/teacherphoto/'.$teacherDatas->image)}}" width="100px" height ="90px" alt=""></td>
                                                            <td>{{$teacherDatas->name}}</td>
                                                            <td>{{$teacherDatas->lastname}}</td>
                                                            <td>{{$teacherDatas->staff_id}}</td>
                                                            <td>{{$teacherDatas->date_of_birth}}</td>
                                                            <td>{{$teacherDatas->gender}}</td>
                                                            <td>{{$teacherDatas->role}}</td>
                                                            <td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3{{$teacherDatas->id}}"><i class="fas fa-edit"></i></a>&nbsp;
                                                                <!-- Modal for edit button -->
                                                                <div class="modal fade" id="exampleModal3{{$teacherDatas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Teacher's Profile</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                        <form action="{{route('teacher.update', $teacherDatas->id)}}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                                        <input class="form-control" value="{{$teacherDatas->name}}" id="inputFirstName" name="name" type="text" placeholder="Enter your first name" />
                                                                                        <label for="inputFirstName">First name</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-floating">
                                                                                        <input class="form-control" value="{{$teacherDatas->lastname}}" id="inputLastName" name="lastname"  type="text" placeholder="Enter your last name" />
                                                                                        <label for="inputLastName">Last name</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6" style="padding-top: 10px;">
                                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                                        <input class="form-control" value="{{$teacherDatas->phone}}" id="inputFirstName" name="phone" type="number" placeholder="Enter your phone number" />
                                                                                        <label for="inputFirstName">Phone</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6" style="padding-top: 10px;">
                                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                                        <select class="form-select" name="gender" aria-label="Default select example">
                                                                                            <option value="male" {{($teacherDatas->gender == 'male')? 'selected':''}}>Male</option>
                                                                                            <option value="female" {{($teacherDatas->gender == 'female')? 'selected':''}}>Female</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6" style="padding-top: 10px;">
                                                                                <div class="form-floating mb-3 mb-md-0">
                                                                                        <input class="form-control" value="{{$teacherDatas->date_of_birth}}" id="inputFirstName" name=date_of_birth type="date" placeholder="Enter your date of birth" />
                                                                                        <label for="inputFirstName">Date of Birth</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-floating mb-3">
                                                                                <input class="form-control" value="{{$teacherDatas->email}}" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                                                                <label for="inputEmail">Email address</label>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                                        <label for="formFile" class="form-label"></label>
                                                                                        <input class="form-control" name="image" type="file" id="formFile">
                                                                                    </div>
                                                                                    <img src="{{url('upload/teacherphoto/'.$teacherDatas->image)}}" width="200px" height ="180px" alt="">
                                                                                </div>
                                                                                <div class="form-floating mb-3" style="padding-top: 10px;">
                                                                                    <div class="mb-3">
                                                                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{$teacherDatas->address}}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mt-4 mb-0">
                                                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" href="login.html">Update Profile</button></div>
                                                                            </div>
                                                                        </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button href="" type="button" onclick="deleteTeacher({{$teacherDatas->id}})"><i class="fas fa-trash text-danger"></i></button>&nbsp;
                                                                <!--Delete Functionality-->
                                                                <form id="delete-form-{{$teacherDatas->id}}"  action="{{route('teacher.destroy',$teacherDatas->id)}}" id="delete-form{{$teacherDatas->id}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2{{$teacherDatas->id}}"><i class="fas fa-eye text-success"></i></a>&nbsp;
                                                                <!-- Modal for view button -->
                                                                <div class="modal fade" id="exampleModal2{{$teacherDatas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Teacher's Profile</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h6>FIRSTNAME</h6>
                                                                                    {{$teacherDatas->name}}
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h6>LASTNAME</h6>
                                                                                    {{$teacherDatas->lastname}}
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h6>DATE OF BIRTH</h6>
                                                                                    {{$teacherDatas->date_of_birth}}
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h6>REG NUMBER</h6>
                                                                                    {{$teacherDatas->staff_id}}
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h6>GENDER</h6>
                                                                                    {{$teacherDatas->gender}}
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h6>PHONE NUMBER</h6>
                                                                                    {{$teacherDatas->phone}}
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h6>EMAIL</h6>
                                                                                    {{$teacherDatas->email}}
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h6>ADDRESS</h6>
                                                                                    {{$teacherDatas->address}}
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <h6>IMAGE</h6>
                                                                                    <img src="{{url('upload/teacherphoto/'.$teacherDatas->image)}}" width="200px" height ="180px" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            </tr>
                                                    @endforeach
                                                </tbody>
                                            
                                            </table>
                                            {{$teacherData->links()}}
                                        </div>
                                        <div class="card-footer text-center py-3">
                                            <div class="small"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>  
                        
                    </div>
                </main>
@endsection

<!--Sweetalert2-->
<script>
    function deleteTeacher(id){
        Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            event.preventDefault();
                            document.getElementById('delete-form-'+id).submit();
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                        }
                        })
                    }
</script>