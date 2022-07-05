<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order History</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    @include('contractordash.stylesheet')
</head>

<body>

   
@include('contractordash.sidebar')
    <!-- /# sidebar -->

   @include('contractordash.header')

    


   <div class="content-wrap">
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Orders History </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Orders History</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
               <!--  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success</strong> You Succssfully added data
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div> -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Orders History</h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Demand No.</th>
                                                    <th>Job Title</th>
                                                    <th>No of Position</th>
                                                    <th>Visa Type</th>
                                                    <th>Salary Package</th>
                                                    <th>Agreement</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Web Developer</td>
                                                    <td>12</td>
                                                    <td>permanent</td>
                                                    <td>61000</td>
                                                    <td>Done</td>
                                                    <td><a href="#" class="btn btn-success btn-sm">Completed </a></td>
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