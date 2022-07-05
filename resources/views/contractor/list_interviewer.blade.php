<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interveiwer List</title>
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
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Interviewers List </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Interviewers List</li>
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
                                    <h4>Interviewers List  </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Profession</th>
                                                    <th>Feild of Experince</th>
                                                    <!-- <th>Year of Experince</th> -->
                                                    <th>Status</th>
                                                    

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Adil Shah</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>web designing</td>
                                                    <td>web development</td>
                                                   <!--  <td>7</td> -->
                                                    <td><a href="#" class="btn btn-success btn-sm">Free </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Adil Shah</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>web designing</td>
                                                    <td>web development</td>
                                                    <!-- <td>7</td> -->
                                                    <td><button class="btn btn-success btn-sm">Busy</button></td>

                                                </tr>
                                                <tr>
                                                    <td>Adil Shah</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>web designing</td>
                                                    <td>web development</td>
                                                    <!-- <td>7</td> -->
                                                    <td><button class="btn btn-success btn-sm">Free</button></td>

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

                  @include('contractordash.footer')
                </section>
            </div>
        </div>
    </div>
    </div>

    <!-- jquery vendor -->
    @include('contractordash.scripts')
</body>

</html>