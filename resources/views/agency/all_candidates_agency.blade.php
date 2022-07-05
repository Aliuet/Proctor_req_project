<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Condidates List</title>
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
                                <h1>All Candidates</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Row-Select</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
               <!--  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success</strong> You Succssfully added data
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div> -->
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>All Candidates</h4>

                                    <nav class="navbar navbar-light bg-light">
                                        <form class="form-inline">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Filter Order No." aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                        </form>
                                    </nav>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th> Agency Name.</th>
                                                    <th> Name of Position </th>
                                                    <th> Full Name </th>
                                                    <th> Father Name </th>
                                                    <th> Date of Birth</th>
                                                    <th> Email</th>
                                                    <th> Academic Qualification</th>
                                                    <th> Years of Experience</th>
                                                    <th> Field Experience</th>
                                                    <th> Current City</th>
                                                    <th> Availability</th>
                                                    <th> Contact Number</th>
                                                    <th>Passport No</th>
                                                    <th>Passport Issue Date</th>
                                                    <th>Passport valid Upto</th>
                                                    <th>Marital Status</th>
                                                    <th>Language </th>
                                                    <th> CV</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Agency 21</td>
                                                    <td>Computer Engineering</td>
                                                    <td>Muhammad Ali</td>
                                                    <td>Ali</td>
                                                    <td>10/2/2022</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>computr systems engineering</td>
                                                    <td>10</td>
                                                    <td>web</td>
                                                    <td>islamabad</td>
                                                    <td>yes</td>
                                                    <td>3974238642</td>
                                                    <td>234234</td>
                                                    <td>10/2/2022</td>
                                                    <td>10/2/2022</td>
                                                    <td>Male</td>
                                                    <td>Male</td>

                                                    <td>ali</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Completed</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Agency 21</td>
                                                    <td>Computer Engineering</td>
                                                    <td>Muhammad Ali</td>
                                                    <td>Ali</td>
                                                    <td>10/2/2022</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>computr systems engineering</td>
                                                    <td>10</td>
                                                    <td>web</td>
                                                    <td>islamabad</td>
                                                    <td>yes</td>
                                                    <td>3974238642</td>
                                                    <td>234234</td>
                                                    <td>10/2/2022</td>
                                                    <td>10/2/2022</td>
                                                    <td>Male</td>
                                                    <td>Male</td>
                                                    

                                                    <td>ali</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Completed</a></td>
                                                </tr>

`                                               <tr>
                                                    <td>Agency 21</td>
                                                    <td>Computer Engineering</td>
                                                    <td>Muhammad Ali</td>
                                                    <td>Ali</td>
                                                    <td>10/2/2022</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>computr systems engineering</td>
                                                    <td>10</td>
                                                    <td>web</td>
                                                    <td>islamabad</td>
                                                    <td>yes</td>
                                                    <td>3974238642</td>
                                                    <td>234234</td>
                                                    <td>10/2/2022</td>
                                                    <td>10/2/2022</td>
                                                    <td>Male</td>
                                                    <td>Male</td>

                                                    <td>ali</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Completed</a></td>
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