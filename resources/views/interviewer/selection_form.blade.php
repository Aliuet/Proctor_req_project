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
                                <h1>Select Test</h1>
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
                                    <h4>All Tests </h4>

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
                                                    
                                                    <th> Agency name</th>
                                                    <th> Job Title</th>
                                                    
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Agency 21</td>
                                                    <td>Computer Engineering</td>
                                                    
                                                    <td><a href="candidate_list" class="btn btn-primary btn-sm">Show List</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Agency 21</td>
                                                    <td>Computer Engineering</td>
                                                    
                                                    <td><a href="candidate_list" class="btn btn-danger btn-sm">Show List</a></td>

                                                </tr>
                                                <tr>
                                                    <td>Agency 21</td>
                                                    <td>Computer Engineering</td>
                                                    
                                                    <td><a href="candidate_list" class="btn btn-warning btn-sm">Show List</a></td>

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
</body>

</html>