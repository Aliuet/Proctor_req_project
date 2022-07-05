<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contractor Profile form</title>
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
                                <h1>Contractor Profile</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Contractor Profile</li>
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
                                                <label class="col-lg-4 col-form-label" for="val-username">Contractor Name <span class="text-danger"> * </span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Contractor Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Scope of Work <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Scope of Work">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Head Office<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Head Office">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-select2">Country<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option value="0">Select Country</option>

                                                    <option value="html">KSA</option>
                                                    <option value="css">UAE</option>
                                                    <option value="javascript">QATAR</option>
                                                    <option value="javascript">Oman</option>
                                                    <option value="javascript">Kuwait</option>
                                                    <option value="javascript">Bahrain</option>
                                                    <option value="javascript">Pakistan</option>
                                                    <option value="javascript">India</option>
                                                    <option value="javascript">Srilanka</option>
                                                    <option value="javascript">Bangladish</option>
                                                    <option value="javascript">Philippines </option>
                                                    <option value="javascript">Jordan</option><option value="javascript">QATAR</option>

                                                    
                                                </select>
                                                </div>
                                            </div>
                                       
                                             <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-select2">City<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose City">
                                                        <option>Select Your City</option>
                                                        <option value="islamabad">islamabad</option>
                                                        <option value="lahore">lahore</option>
                                                        <option value="peshawar">peshawar</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Contact<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Contact">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Email<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="email" class="form-control" id="val-email" name="val-email" placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-confirm-password">Website<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Website">
                                                </div>
                                            </div>
                
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <a href="#"><button type="button" class="btn btn-success">Submit</button>
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