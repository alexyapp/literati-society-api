@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-12">
        <p class="mb-5"><img src="images/img_bg_1.jpg" alt="Free Bootstrap 4 Template by uicookies.com" class="img-fluid"></p>

        <div class="row">
            <div class="col-xl-8 col-lg-12 mx-auto">
            <h1 class="mb-3">Contact</h1>

            <form action="#" method="post" class="probootstrap-form mb-5">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group mb-4">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
                </div>
            </form>
            
            </div>
        </div>
        
        </div>
    </div>
    <!-- END row -->

    

        
        </div>
    </section>
    <!-- END section -->

</div>
@endsection