<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Submission Form</title>
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
                                    <h1>Candidate Submission Form</h1>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Candidate Submission Form</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Warning</strong> Kindly fill the Candidate data
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <!--  @if(Session::has('success'))
                        <div class="alert alert-warning alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        {{Session::get('success')}}
                        </div>
                    @endif -->
                    <!-- /# row -->
                    <section id="main-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">  
                                        <div class="bootstrap-data-table-panel">
                                            <div class="table-responsive">
                                                <table id="row-select" class="display table table-borderd table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th> SNo.</th>
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
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                        
                                                            <td>1</td>
                                                            <td><input type="text" name="" placeholder="Name of Position"/> </td>
                                                            <td><input type="text" name="" placeholder="Full Name"/> </td>
                                                            <td><input type="text" name="" placeholder="Father Name"/> </td>
                                                            <td><input type="date" name="" placeholder="Date of Birth"/>
                                                            <td><input type="email" name="" placeholder="Email"/> </td> </td>
                                                            <td><input type="text" name="" placeholder="Academic Qualification"/> </td>
                                                            <td><input type="text" name="" placeholder="Years of Experience"/> </td>  
                                                            <td><input type="text" name="" placeholder="Field Experience"/> </td>
                                                            <td><input type="text" name="" placeholder="Current City"/> </td>
                                                            <td><input type="text" name="" placeholder="Yes/No"/> </td>
                                                            <td><input type="text" name="" placeholder="Contact Number"/> </td>
                                                            <td><input type="text" name="" placeholder="Passport Number"/> </td>
                                                            <td><input type="date" name="" placeholder="Passport Issue Date"/> </td>
                                                            <td><input type="date" name="" placeholder="Passport valid Upto"/> </td>
                                                            <td>
                                                                <select name="select" class="js-select2">
                                                                    <option value="0" >--Select Your Marital Status--</option>
                                                                   <option value="male" >Single</option>
                                                                   <option value="female" >Married</option>
                                                                
                                                                </select>
                                                            </td>
                                                            <td>
                                                            <select name="select" class="js-select2">
                                                                <option value="0" >--Select Your Language--</option>
                                                                <option value="English" >English</option>
                                                                <option value="Urdu" >Urdu</option>
                                                                <option value="Arabic" >Arabic</option>
                                                                <option value="Hindi" >Hindi</option>
                                                                <option value="Bangali" >Bangali</option>
                                                                  <option value="Bangali" >others</option>
                                                                
                                                           </select>
                                                        </td>
                                                            <td><input type="file"  name="" placeholder="CV"/> </td>
                                                            
                                                            <td>
                                                                <div class="sweetalert">
                                                                <a href="all-candidates-agency"><button class="btn btn-success btn sweet-success">Submit</button></div></td>
                                                        </tr>
                                                        <tr>
                                                        
                                                            <td>1</td>
                                                            <td><input type="text" name="" placeholder="Name of Position"/> </td>
                                                            <td><input type="text" name="" placeholder="Full Name"/> </td>
                                                            <td><input type="text" name="" placeholder="Father Name"/> </td>
                                                            <td><input type="date" name="" placeholder="Date of Birth"/>
                                                            <td><input type="email" name="" placeholder="Email"/> </td> </td>
                                                            <td><input type="text" name="" placeholder="Academic Qualification"/> </td>
                                                            <td><input type="text" name="" placeholder="Years of Experience"/> </td>  
                                                            <td><input type="text" name="" placeholder="Field Experience"/> </td>
                                                            <td><input type="text" name="" placeholder="Current City"/> </td>
                                                            <td><input type="text" name="" placeholder="Yes/No"/> </td>
                                                            <td><input type="text" name="" placeholder="Contact Number"/> </td>
                                                            <td><input type="text" name="" placeholder="Passport Number"/> </td>
                                                            <td><input type="date" name="" placeholder="Passport Issue Date"/> </td>
                                                            <td><input type="date" name="" placeholder="Passport valid Upto"/> </td>
                                                            <td>
                                                                <select name="select">
                                                                    <option value="0" >--Select Your Marital Status--</option>
                                                                   <option value="male" >Single</option>
                                                                   <option value="female" >Married</option>
                                                                
                                                                </select>
                                                            </td>
                                                            <td>
                                                            <select name="select">
                                                                <option value="0" >--Select Your Language--</option>
                                                                <option value="English" >English</option>
                                                                <option value="Urdu" >Urdu</option>
                                                                <option value="Arabic" >Arabic</option>
                                                                <option value="Hindi" >Hindi</option>
                                                                <option value="Bangali" >Bangali</option>
                                                                <option value="Bangali" >others</option>
                                                                
                                                           </select>
                                                        </td>
                                                            <td><input type="file"  name="" placeholder="CV"/> </td>
                                                            <td>
                                                                <div class="sweetalert">
                                                                <a href="all-candidates-agency"><button type="button" class="btn btn-info btn sweet-wrong">Submit</button></div></td>
                                                        </tr>  
                                                    </tbody>
                                                    <tfoot>
                                                        
                                                    </tfoot>
                                                </table>

                                            </div>
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
    </div>

    <!-- jquery vendor -->
    

    @include('agencydash.scripts')
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @if(Session::has('success'))
    <script type="text/javascript">
        swal("great job","{!!Session::get('success')!!}","success",{
            button:"Ok",
        })
    </script>
    @endif -->

 

</body>
</html>