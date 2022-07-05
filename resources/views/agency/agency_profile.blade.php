<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agancy Profile</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    @include('agencydash.stylesheet')
</head>

<body>

   
@include('agencydash.sidebar')
    <!-- /# sidebar -->

   @include('agencydash.header')

    


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Profile Form</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="agency-profile">Dashboard</a></li>
                                <li class="breadcrumb-item active">Agnacy Profile Form</li>
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
                                   <!--  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Profile Picture<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Profile Picture">
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Agency Name <span class="text-danger"> * </span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Agency Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Scope of Work <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Scope of Work">
                                            </div>
                                        </div>
                                       <!--  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Registered office Country/City<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Registered office country/city">
                                            </div>
                                        </div> -->
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-select2">Registered office Country<span class="text-danger"> *</span></label>
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
                                            <label class="col-lg-4 col-form-label" for="val-select2">Registered office City<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option value="0">Select City</option>

                                                    <option value="html">Riaz</option>
                                                    <option value="css">Makkha</option>
                                                    <option value="javascript">Madina</option>
                                                    <option value="javascript">Jadha</option>
                                                    <option value="javascript">Islamabad</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Overseas Employment License<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-username" name="val-username" placeholder="Overseas Employment License">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Membership Certificate<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="val-username" name="val-username" placeholder="Membership Certificate">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Contact Number<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email<span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="val-email" name="val-email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Postal Address <span class="text-danger"> *</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Postal Address">
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
                @include('agencydash.footer')
               
            </section>
        </div>
    </div>
</div>

    <!-- jquery vendor -->
   @include('agencydash.scripts')
</body>

</html>