<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    @include('interviewerdash.stylesheet')
</head>

<body>

   
@include('interviewerdash.sidebar')
    <!-- /# sidebar -->

   @include('interviewerdash.header')

    


   <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Define Schedule</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Schedule Form</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
               <!--  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Warning!</strong> Kind fill the Data
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div> -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post">
                                        <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Job Title<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Job Title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Agency Name <span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Agency Name ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Interview Location <span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Interview Location">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Interview Date <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="date" class="form-control" id="val-" name="val-username" placeholder="Interview Date">
                                                </div>
                                            </div>
                                          
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Interview Time <span class="text-danger"> *</span></label>
                                                <label class="col-form-label" for="val-username">From</label>
                                                <div class="col-lg-3">
                                                    <input type="time" class="form-control" id="val-" name="val-username" placeholder="Interview Date">
                                                </div>
                                                <label class="col-form-label" for="val-username">To</label>
                                                <div class="col-lg-3">
                                                    <input type="time" class="form-control" id="val-" name="val-username" placeholder="Interview Date">
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Submit Schedule</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     @include('interviewerdash.footer')
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    @include('interviewerdash.scripts')
</body>

</html>