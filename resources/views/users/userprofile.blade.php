@extends('users.layouts.user_profile_temp')
@section('profilecontent')
<div class="tab-content account dashboard-content pl-50">
    <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Hello {{ Auth::user()->name }}!</h3>
            </div>
            <div class="card-body">
                <p>
                    From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>,<br />
                    manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a>
                </p>
            </div>
        </div>
    </div>   
    
    {{-- <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header">
                        <h3 class="mb-0">Billing Address</h3>
                    </div>
                    <div class="card-body">
                        <address>
                            3522 Interstate<br />
                            75 Business Spur,<br />
                            Sault Ste. <br />Marie, MI 49783
                        </address>
                        <p>New York</p>
                        <a href="#" class="btn-small">Edit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Shipping Address</h5>
                    </div>
                    <div class="card-body">
                        <address>
                            4299 Express Lane<br />
                            Sarasota, <br />FL 34249 USA <br />Phone: 1.941.227.4444
                        </address>
                        <p>Sarasota</p>
                        <a href="#" class="btn-small">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- My address --}}
    {{-- <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
        <div class="card">
            <div class="card-header">
                <h5>Account Details</h5>
            </div>
            <div class="card-body">
                <p>Already have an account? <a href="page-login.html">Log in instead!</a></p>
                <form method="post" name="enq">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>First Name <span class="required">*</span></label>
                            <input required="" class="form-control" name="name" type="text" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last Name <span class="required">*</span></label>
                            <input required="" class="form-control" name="phone" />
                        </div>
                        <div class="form-group col-md-12">
                            <label>Display Name <span class="required">*</span></label>
                            <input required="" class="form-control" name="dname" type="text" />
                        </div>
                        <div class="form-group col-md-12">
                            <label>Email Address <span class="required">*</span></label>
                            <input required="" class="form-control" name="email" type="email" />
                        </div>
                        <div class="form-group col-md-12">
                            <label>Current Password <span class="required">*</span></label>
                            <input required="" class="form-control" name="password" type="password" />
                        </div>
                        <div class="form-group col-md-12">
                            <label>New Password <span class="required">*</span></label>
                            <input required="" class="form-control" name="npassword" type="password" />
                        </div>
                        <div class="form-group col-md-12">
                            <label>Confirm Password <span class="required">*</span></label>
                            <input required="" class="form-control" name="cpassword" type="password" />
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit">Save Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- Account details --}}
</div>
{{-- content user profile --}}
@endsection