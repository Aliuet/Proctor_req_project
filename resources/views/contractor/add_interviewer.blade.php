<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Interviewer Form</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    @include('contractordash.stylesheet')
    
</head>

<body>

   
@include('contractordash.sidebar')
    <!-- /# sidebar -->

   @include('contractordash.header')
<!-- @include('sweetalert::alert') -->
    

   <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Add Interviewer</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add Interviewer form</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter Name">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Email<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" id="val-email" name="val-email" placeholder="Enter valid Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Profession<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter Profession">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Field of Experience<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter Field of Experience">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Years of Expereince<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter Years of Experience">
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <div class="sweetalert">
                                                    <a href="/list-interviewer"><button type="button" class="btn btn-success btn sweet-wrong">Submit</button></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('contractordash.footer')
                  
                </section>

            </div>
        </div>
    </div>

   @include('contractordash.scripts')

   
</body>

</html>