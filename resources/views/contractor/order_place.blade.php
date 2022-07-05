<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Place</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
   @include('contractordash.stylesheet')
</head>

<body>

   
@include('contractordash.sidebar')
    <!-- /# sidebar -->

   @include('contractordash.header')

    


   <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Place Order Here</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Place Order form</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Warning</strong> Kindly fill Form
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
                                                <label class="col-lg-4 col-form-label" for="val-username">Job Title <span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter Job Title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">No of Positions <span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Enter No of Positions">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-select2">Visa Type<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                        <option value="0">--Select Visa Type--</option>

                                                        <option value="html">Visit</option>
                                                        
                                                        <option value="javascript">Work</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-confirm-username"> Salary Package<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" id="val-username" name="val-confirm-password" placeholder="Enter Salary Package">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Agreement<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="file" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                                </div>
                                            </div>

                                            
                
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <a href="#"><button type="button" 
                                                        class="btn btn-success btn sweet-message">Submit</button>
                                                    <a href="agencies-profile"><button type="button" class="btn btn-info sweet-wrong">Back To Agancy</button>
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

    <!-- jquery vendor -->
    @include('contractordash.scripts')
</body>

</html>