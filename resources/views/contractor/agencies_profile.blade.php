<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agancy Profile</title>
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
                                <h1>All Agencies profiles </h1>
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
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Agencies profiles Table </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Scope Of Work</th>
                                                    <th>Registered Office Country</th>
                                                    <th>Registered Office City</th>
                                                    <th>Overseas Employment License</th>
                                                    <th>Membership Certificate</th>
                                                    <th>Contact Number</th>
                                                    <th>Demand Workers</th>
                                                    <th>Email</th>
                                                    <th>Postal Address</th>
                                                    <th>Website</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Agency 21</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>Pakistan</td>
                                                    <td>Phase 8, Islamabad</td>
                                                    <td>61</td>
                                                    <td>55</td>
                                                    <td>8/10</td>
                                                    <td>Agency 21</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>Phase 8, Islamabad</td>
                                                    <td>61</td>
                                                    <td><a href="order-place"><button type="button" class="btn btn-success btn sweet-message">place order </button></td>
                                                </tr>
                                                 <tr>
                                                    <td>Agency 21</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>Pakistan</td>
                                                    <td>Phase 8, Islamabad</td>
                                                    <td>61</td>
                                                    <td>55</td>
                                                    <td>8/10</td>
                                                    <td>Agency 21</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>Phase 8, Islamabad</td>
                                                    <td>61</td>
                                                    <td><a href="order-place"><button type="button" class="btn btn-success btn sweet-wrong">place order </button></td>
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