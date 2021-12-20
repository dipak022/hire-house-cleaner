


 @extends('layouts.user.app')

@section('content')
    
    @include('layouts.user.manubar')
    </header>
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Register</a></li>
        </ul>
        
        <div class="row">
            <div id="content" class="col-sm-12">
                <h2 class="title">Register Account</h2>
                <p>If you already have an account with us, please login at the <a href="{{route('login')}}">login page</a>.</p>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                @csrf
                    <fieldset id="account">
                        <legend>Your Personal Details</legend>
                        <div class="form-group required" style="display: none;">
                            <label class="col-sm-2 control-label">Customer Group</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">Name</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder=" Name" id="input-firstname" class="form-control" name="name" required="">
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" placeholder="E-Mail" id="input-email" class="form-control" name="email">
                            </div>
                        </div>
                        
                     
                        
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-country">Account</label>
                            <div class="col-sm-10">
                                <select  name="user_roll" class="form-control">
                                    <option disabled="" selected=""> Please Select Country</option>
                                    <option value="3">Technician</option>
                                    <option value="2">User</option>
                                    
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Your Password</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password" id="input-password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" placeholder="Password Confirm" id="input-confirm" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                    </fieldset>
            
                    <div class="buttons">
                        <div class="pull-right"><a href="#" class="agree"><b></b></a>
                            
                            
                            <button type="submit" class="btn btn-primary">Registaer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection