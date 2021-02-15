@extends('layout')

@section('manage_admin')

<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Admin</h3>
                            </div>
                            <hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                    <input name="admin_email" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                                    <input name="admin_password" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                                    <input name="admin_fullname" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Department</label>
                                    <select name="admin_dept" id="select" class="form-control" >
                                        <option disabled selecte selected hidden>-- Please select one --</option>
              <option value="Expatriate Labor Directorate">Information Technology And Electronic Transformation Directorate</option>
                                        <option value="Expatriate Labor Directorate">Expatriate Labor Directorate</option>
                                        <option value="Central Inspection Directorate">Central Inspection Directorate</option>
                                        <option value="Central Employment Directorate">Central Employment Directorate</option>
                                        <option value="Directorate of Domestic Workers">Directorate of Domestic Workers</option>
                                        <option value="Directorate of Human Trafficking">Directorate of Human Trafficking</option>
                                        <option value="Legal Affairs Directorate">Legal Affairs Directorate</option>
                                        <option value="Labor Relations Directorate">Labor Relations Directorate</option>
                                    </select>
                                </div>

                               <div>
                                   <center><button type="submit" class="btn btn-lg btn-info btn-block" name="submit">

                                        <span id="payment-button-amount">Save</span>

                                    </button></center>
                                </div> 

                            </form>
                        </div>
                    </div>
                </div>
          

        <div class="col-md-12">
            <!-- DATA TABLE-->
              <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Full Name</th>
                            <th>Dept</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>

                

@endsection