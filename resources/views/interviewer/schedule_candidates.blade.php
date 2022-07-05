<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard</title>
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
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Active Orders </h4>

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
                                                    <th>Order No.</th>
                                                    <th>Company Name</th>
                                                    <th>Office Address</th>
                                                    <th>Comments</th>
                                                    <th>Reviews Given</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Agency 21</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>Phase 8, Islamabad</td>
                                                    <td>This is a relaible agency</td>
                                                    <td>9/10</td>
                                                    <td><a href="schedule-submission" class="btn btn-primary btn-sm">Schedule</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td><button class="btn btn-danger btn-sm">Schedule</button></td>

                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td><button class="btn btn-primary btn-sm">Schedule</button></td>

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

                    @include('interviewerdash.footer')
                </section>
            </div>
        </div>
    </div>
    </div>

    <!-- jquery vendor -->
    @include('interviewerdash.scripts')

</html>