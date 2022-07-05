<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selected Candidates</title>
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
                                <h1>Selected Candidates Entry Form </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Selected Candidates Entry Form</li>
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
                                <div class="card-title">
                                    <h4>Selected Candidates Entry Form </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="col-sm-1">Job Title</th>
                                                    <th class="col-sm-1">Academic Qualification</th>
                                                    <th class="col-sm-1">Date of Birth</th>
                                                    <th class="col-sm-1">Years of Experience</th>                                                 
                                                    <th class="col-sm-1">Foriegn Experience</th>
                                                    <th class="col-sm-1">Email</th>
                                                    <th class="col-sm-1">Contact No</th>
                                                    <!-- <th class="col-sm-1">Salary Packege</th> -->
                                                    <th class="col-sm-1">Placement Location</th>
                                                    <th class="col-sm-1">Joining Date</th>
                                                    <th width="15%">Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Steel Workers</td>
                                                    <td>Msc</td>
                                                    <td>17/06/2022</td>
                                                    <td>17 Years</td>
                                                    <td>Yes/No</td>
                                                    <td>Ali@gmail.com</td>
                                                    <td>0215405104</td>
                                                    <!-- <td>50k</td> -->
                                                    <td>KSA</td>
                                                    <td>12-6-2022</td>
                                                    <td><a href="selected-candidate-submission" ><button class="btn btn-success btn sweet-wrong">Next</button>
                                                    <button class="btn btn-warning btn sweet-wrong">In Progress</button></td>
                                                    
                                                </tr>
                                                <tr>
                                                  <td>Steel Workers</td>
                                                    <td>Msc</td>
                                                    <td>17/06/2022</td>
                                                    <td>17 Years</td>
                                                    <td>Yes/No</td>
                                                    <td>Ali@gmail.com</td>
                                                    <td>0215405104</td>
                                                    <!-- <td>50k</td> -->
                                                    <td>KSA</td>
                                                    <td>12-6-2022</td>
                                                    
                                                   <td><a href="selected-candidate-submission" ><button class="btn btn-success btn sweet-wrong">Next</button>
                                                    <button class="btn btn-warning btn sweet-wrong">In Progress</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Steel Workers</td>
                                                    <td>Msc</td>
                                                    <td>17/06/2022</td>
                                                    <td>17 Years</td>
                                                    <td>Yes/No</td>
                                                    <td>Ali@gmail.com</td>
                                                    <td>0215405104</td>
                                                    <!-- <td>50k</td> -->
                                                    <td>KSA</td>
                                                    <td>12-6-2022</td>
                                                    
                                                    <td><a href="selected-candidate-submission" ><button class="btn btn-success btn sweet-wrong">Next</button>
                                                    <button class="btn btn-warning btn sweet-wrong">In Progress</button></td>
                                                </tr>

                                                
                                            </tbody>
                                            <tfoot>
                                                
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
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