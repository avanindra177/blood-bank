@extends('Layouts.app')

@section('content')
    <div class="panel panel-default" style="width:80%; margin:0 auto;">
        <div class="panel-heading">Donor Details</div>
        <div class="panel-body">

            <table class="table">
                <tr>
                    <td> Name</td>
                    <td> {{ $donor->name }}</td>
                </tr>	

                <tr>
                    <td>Blood Group</td>
                    <td> {{ $donor->blood }}</td>
                </tr>

                <tr>
                    <td> Last Donated</td>
                    <td>  {{  date('F d, Y h:m A', strtotime($donor->last_donated)) }}</td>
                </tr>

                <tr>
                    <td> Address</td>
                    <td> {{ $donor->address }}</td>
                </tr>


                <tr>
                    <td> City</td>
                    <td> {{ $donor->city }}</td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td> {{ $donor->phone }}</td>
                </tr>

                
                <tr>
                    <td>Email</td>
                    <td> {{ $donor->email }}</td>
                </tr>
            </table>

            <!-- <hr>
            <h4>Send Message</h4>
            <hr>
            <form action="{{ url('message') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                <input type="email" name="sender" class="form-control" placeholder="Email" required>
                </div>  
                    <div class="form-group">
                <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
                </div>

                <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>

                <div class="form-group">
                <textarea placeholder="Message" name="message" class="form-control" required></textarea> 
                    </div>

                    <input type="hidden" name="receiver" value="{{ $donor->id }}">

                    <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="Submit">
                </div>
                
                

            </form> -->
        </div>
    </div>

@stop