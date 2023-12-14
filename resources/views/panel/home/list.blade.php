
@extends('panel.layouts.app')

@section('content')  
<!-- Page -->
<div class="page">

			

    <!-- main-content -->
    <div class="main-content app-content">

    <!-- main-header -->
    <div class="main-header sticky side-header nav nav-item">
        <div class="container-fluid">
            <div class="main-header-left ">
                <div class="responsive-logo">
                    <a href="index.html"><img src="{{url('public/panel/assets/img/krillpay-logo.png')}}" class="logo-1"
                            alt="logo"></a>
                    <a href="index.html"><img src="{{url('public/panel/assets/img/krillpay-logo.png')}}" class="dark-logo-1"
                            alt="logo"></a>
                    <a href="index.html"><img src="{{url('public/panel/assets/img/logon.png')}}" class="logo-2"
                            alt="logo"></a>
                    <a href="index.html"><img src="{{url('public/panel/assets/img/logon.png')}}" class="dark-logo-2"
                            alt="logo"></a>
                </div>
                <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                    <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                    <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                </div>
                <div class="main-header-center ms-3 d-sm-none d-md-none d-lg-block">
                    <input class="form-control" placeholder="Search for anything..." type="search"> <button
                        class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
                </div>
            </div>
            <div class="main-header-right">
                <ul class="nav nav-item  navbar-nav-right ms-auto">                    
                    <li class="dropdown main-profile-menu nav nav-item nav-link">
                        <a class="profile-user d-flex" href=""><img alt=""
                                src="{{url('public/panel/assets/img/faces/6.jpg')}}"></a>
                        <div class="dropdown-menu">
                            <div class="main-header-profile bg-primary p-3">
                                <div class="d-flex wd-100p">
                                    <div class="main-img-user"><img alt="" src="{{url('public/panel/assets//img/faces/6.jpg')}}"
                                            class=""></div>
                                    <div class="ms-3 my-auto">
                                        <h6>Admin</span>
                                    </div>
                                </div>
                            </div>                            
                            <a class="dropdown-item" href="{{url('logout')}}"><i class="bx bx-log-out"></i> Sign
                                Out</a>
                        </div>
                    </li>
                                        
                </ul>
            </div>
        </div>
    </div>
    <!-- /main-header -->

        <!-- container -->
        <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <div>
                  {{-- <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, Admin!</h2>
                  <p class="mg-b-0">Welcome to the Dashboard panel.</p> --}}
                </div>
            </div>					
        </div>
        <!-- breadcrumb -->
            <div>
                <p>Hello this is the Home content page</p>
            </div>

            @include('message')

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Home Page</h3>
                        </div>

                        <form class="form-horizontal" method="post" action="{{url('admin/home/post')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">
                                       HomePage Image 
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea name="main_text" id="" class="editor" placeholder="Enter the Main Text" >{{@$getrecord[0]->main_text}}</textarea>
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">
                                       Main Text
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="main_text" id="" class="form-control" placeholder="Enter the Main Text" value="{{@$getrecord[0]->main_text}}">
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">
                                       Sub Text
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="sub_text" id="" class="form-control" placeholder="Enter the sub Text" value="{{@$getrecord[0]->sub_text}}">
                                    </div>
                                </div>
                                
                            </div>                        
                    </div>
                </div>           
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">How it works</h3>
                        </div>                        
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">
                                       Step 1 
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="step1_title" id="" class="form-control" value="{{@$getrecord[0]->step1_title}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea name="step1_desc" id="" cols="50" rows="10">{{@$getrecord[0]->step1_desc}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">
                                        Step 2 
                                     </label>
                                     <div class="col-sm-4">
                                         <input type="text" name="step2_title" id="" class="form-control" value="{{@$getrecord[0]->step2_title}}">
                                     </div>
                                     <div class="col-sm-6">
                                         <textarea name="step2_desc" id="" cols="50" rows="10" >{{@$getrecord[0]->step2_desc}}</textarea>
                                     </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">
                                        Step 3
                                     </label>
                                     <div class="col-sm-4">
                                         <input type="text" name="step3_title" id="" class="form-control" value="{{@$getrecord[0]->step3_title}}">
                                     </div>
                                     <div class="col-sm-6">
                                         <textarea name="step3_desc" id="" cols="50" rows="10" >{{@$getrecord[0]->step3_desc}}</textarea>
                                     </div>
                                </div>

                                <input type="hidden" name="id" value="{{@$getrecord[0]->id }}">

                                <div class="card-footer">
                                    <button type="submit" name="add_and_update"  id="add_and_update" class="btn btn-info" value="@if(count($getrecord)>0)Edit @else Add @endIf">@if(count($getrecord)>0)Edit @else Add @endIf</button>

                                    <a href="" class="btn btn-default float-right">Cancel</a>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /main-content -->
@endsection
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.0/tinymce.min.js"></script>

<script type="text/javascript">

tinymce.init({
    selector: '.editor',
    height: '500px',
    plugins: 'link code image textcolor codesample',
        codesample_languages:[
            {text: 'HTML/XML', value: 'markup'},
            {text: 'JavaScript', value: 'javascript'},
            {text: 'CSS', value: 'css'},
            {text: 'PHP', value: 'php'},
            {text: 'Ruby', value: 'ruby'},
            {text: 'Python', value: 'python'},
            {text: 'Java', value: 'java'},
            {text: 'C', value: 'c'},
            {text: 'C#', value: 'csharp'},
            {text: 'C++', value: 'cpp'},
        ],    
})

</script>
    
@endsection