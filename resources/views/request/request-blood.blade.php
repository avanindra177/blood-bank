@extends('Layouts.app')

@section('content') 
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin:0 auto;">
            <div class="panel panel-default">
                <div class="panel-heading">Request Blood</div>

                <div class="panel-body">

                    <form action="request-blood" method="post" >
                    {{ csrf_field() }}
        
                        <div class="form-group">
                            <input type="text" name="patient" class="form-control"  placeholder="Patient Name" required>
                        </div>

                        <div class="form-group">
                            <select name="group" class="form-control">
                                <option value ="AB +">A+</option>
                                <option value ="AB -">A-</option>
                                <option value ="B +">B +</option>
                                <option value ="B -">B -</option>
                                <option value ="O +">O +</option>
                                <option value ="O -">O -</option>
                                <option value ="A +">AB+</option>
                                <option value ="A -">AB-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" name="city" class="form-control"  placeholder="City" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="location" class="form-control"  placeholder="Address" required>
                        </div>

                        <div class="form-group">
                            <textarea name="hospital" placeholder="Hostpital Name & Address" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="contact_person" class="form-control"  placeholder="Contact Person" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="contact_email" class="form-control"  placeholder="Contact Email" required>
                        </div>

                        <div class="form-group">
                            <input type="number" name="contact_phone" class="form-control"  placeholder="Contact Phone" required>
                        </div>

                        <div class="form-group">
                            <input type="date" name="when" class="form-control"  placeholder="When required" id="datetimepicker" required>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection
