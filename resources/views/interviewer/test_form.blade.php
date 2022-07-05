<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selection Candidates Form</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    @include('interviewerdash.stylesheet')
</head>

<body>

   
@include('interviewerdash.sidebar')
    <!-- /# sidebar -->

   @include('interviewerdash.header')

    


   <div class="content-wrap">
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Candidatet Selection Form</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Candidate Selection Form</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
               <!--  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Warning</strong> Please fill the form
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
                                                <label class="col-lg-4 col-form-label" for="val-username">General Behavior<span class="text-danger">  *</span></label>
                                                 
                                                    <label class="col-lg-4 col-form-label" for="val-username">Communication skill</label>
                                                 <div class="col-lg-4">
                                                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one">
                                                        <option value="0">Select Skill</option>
                                                        <option value="Excellent">Excellent</option>
                                                        <option value="Excellent">Good</option>
                                                        <option value="Excellent">Average</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4 offset-lg-4">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Physical Appearance</label>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one">
                                                        <option value="0">Select Appearance</option>
                                                        <option value="Excellent">Strong</option>
                                                        <option value="Excellent">Normal</option>
                                                        <option value="Excellent">Weak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Work Experience<span class="text-danger">  *</span></label>
                                                 <div class="col-lg-4">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Local Experience</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="No of Years">
                                                </div>
                                                <div class="col-lg-4 offset-lg-4">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Foreign Experience</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="No of Years">
                                                </div>
                                                <div class="col-lg-2">
                                                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one">
                                                        <option value="0">Select Country</option>
                                                        <option value="Excellent">KSA</option>
                                                        <option value="Excellent">UAE</option>
                                                        <option value="Excellent">QATAR</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-suggestions">Interviewer Comments<span class="text-danger"> *</span></label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control"  id="val-suggestions" name="val-suggestions" rows="15" cols="30" placeholder="Enter Description.."></textarea>
                                                </div>
                                            </div>
                                       
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                   <a href="/candidate_list"><button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="/list-interviewer"><button type="button" class="btn btn-info">Back to list</button>
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
    </div>

    <!-- jquery vendor -->
    @include('interviewerdash.scripts')
</body>

</html>