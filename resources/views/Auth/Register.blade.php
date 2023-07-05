@extends('layout')

@section('content')
    <div class="container-fluid">
        <form action="{{ url('register') }}" method="POST" autocomplete="off" id="regForm">
            @csrf
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="text-center font-weight-bold">REGISTRATION FORM</h4>
                        </div>

                        <div class="card-body pl-4 pr-4">

                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @elseif(Session::has('failed'))
                                {{ Session::get('failed') }}
                            @endif
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="firstName"> First Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="firstName" id="firstName" class="form-control"
                                            placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="lastName"> Last Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="lastName" id="lastName" class="form-control"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="dateOfBirth"> Date of Birth <span class="text-danger">*</span>
                                        </label>
                                        <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control"
                                            placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="email"> Email <span class="text-danger">*</span> </label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                </div>


                            </div>



                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="phone"> Phone <span class="text-danger">*</span> </label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="gender"> Gender <span class="text-danger">*</span> </label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option selected value="" disabled>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="address"> Address <span class="text-danger">*</span></label>
                                        <input type="text" name="address" id="address" class="form-control"
                                            placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="country">country<span class="text-danger">*</span></label>
                                        <input type="text" name="country" id="country" class="form-control"
                                            placeholder="country">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="state"> State <span class="text-danger">*</span> </label>
                                        <input type="text" name="state" id="state" class="form-control"
                                            placeholder="State">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="city"> City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" id="city" class="form-control"
                                            placeholder="City">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group ml-3">
                                    <label for="hobbies">Hobbies:</label>
                                    <input type="checkbox" name="hobbies[]" value="reading"> Reading
                                    <input type="checkbox" name="hobbies[]" value="gaming"> Gaming
                                    <input type="checkbox" name="hobbies[]" value="music"> Music
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="photo">photo<span class="text-danger">*</span></label>
                                        <input type="file" name="photo" id="photo" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="username">username<span class="text-danger">*</span></label>

                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="username">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="password"> Password <span class="text-danger">*</span> </label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="confirmPassword"> Confirm Password <span class="text-danger">*</span>
                                        </label>
                                        <input type="password" name="confirmPassword" id="confirmPassword"
                                            class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 offset-lg-6 text-right">
                                    <button type="submit" class="btn btn-success">register</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
