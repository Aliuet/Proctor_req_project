<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agency Profile List</title>
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
                                <h1>Agency Profile</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/agency_dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Agency Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success</strong> You Succssfully added data
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Agency Profile</h4>

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
                                                    <th> Scope of Work</th>
                                                    <th> Registered Office Country</th>
                                                    <th> Registered Office City </th>
                                                    <th> Overseas Employment License</th>
                                             
                                                    <th> Membership Certificate</th>
                                                    <th> Contact Number</th>
                                                    <th> Email</th>
                                                    <th> Postal Address</th>
                                                    <th> Website</th>
                                                    
                                                    <th width="10%">Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Agency 21</td>
                                                    <td>Engineering</td>
                                                    <td>Pakistan</td>
                                                    <td>Islamabad</td>
                                                    <td>FH23423434</td>
                                                    
                                                    <td>UEA</td>
                                                    <td>8345734534</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>islamabad</td>
                                                    <td>www.website.com</td>
                                                
                                                    <td><a href="#"><button class="btn btn-info btn-sm">Edit</button>&nbsp
                                                        <a href="#"><button class="btn btn-danger btn-sm">Delete</button></td>
                                                </tr>
                                                <tr>
                                                     <td>Agency 21</td>
                                                    <td>Engineering</td>
                                                    <td>Pakistan</td>
                                                    <td>Islamabad</td>
                                                    <td>FH23423434</td>
                                                    
                                                    <td>UEA</td>
                                                    <td>8345734534</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>islamabad</td>
                                                    <td>www.website.com</td>
                                                    

                                                   <td><a href="#"><button class="btn btn-info btn-sm">Edit</button>&nbsp
                                                        <a href="#"><button class="btn btn-danger btn-sm">Delete</button></td>
                                                </tr>

`                                               <tr>
                                                     <td>Agency 21</td>
                                                    <td>Engineering</td>
                                                    <td>Pakistan</td>
                                                    <td>Islamabad</td>
                                                    <td>FH23423434</td>
                                                    
                                                    <td>UEA</td>
                                                    <td>8345734534</td>
                                                    <td>agency@gmail.com</td>
                                                    <td>islamabad</td>
                                                    <td>www.website.com</td>
                                                    <td><a href="#"><button class="btn btn-info btn-sm">Edit</button>&nbsp
                                                        <a href="#"><button class="btn btn-danger btn-sm">Delete</button></td>
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
    <@include('agencydash.scripts')
</body>

</html>