<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selected Candidate Submission</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    @include('agencydash.stylesheet')
</head>

<body>

   
@include('agencydash.sidebar')
    <!-- /# sidebar -->

   @include('agencydash.header')

    


   <div class="content-wrap">
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Candidate Submission Form</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Candidate Submission Form</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Warning</strong> Kindly fill the Candidate data
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Passport Size Picture<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Profile Picture">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Passport Copy <span class="text-danger"> * </span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-username" name="val-username" placeholder="Passport Copy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Medical Report <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-email" name="val-email" placeholder="Medical Report">
                                            </div>
                                        </div>
                                   
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">E-Number<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-email" name="val-email" placeholder="E-Number">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">Biometric<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-email" name="val-email" placeholder="Biometric">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">Ticket No<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-email" name="val-email" placeholder="Ticket No">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Departure Date<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="date" class="form-control" id="val-username" name="val-username" placeholder="Departure Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Departure Time<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="time" class="form-control" id="val-username" name="val-username" placeholder="Departure Time">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Flight Number<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Flight Number">
                                            </div>
                                        </div>
                                    
        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                               <a href="/"><button type="button" class="btn btn-success btn sweet-wrong">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('agencydash.footer')
               
            </section>
            </div>
        </div>
    </div>
    </div>

    <!-- jquery vendor -->
   @include('agencydash.scripts')
</body>

</html>