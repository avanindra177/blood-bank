@extends('layouts.admins')

@section('content')
  <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-ticket"></i> Edit User</div>

      <div class="panel-body">
      

        <form action="{{ url('admin/user/edit/'.$user->id) }}" method="POST">
        {{ csrf_field() }}
        
          <div class="form-group">
            Name
            <p class="hint--top" data-hint="Name" id="input-field">
              <input type="text" name="name" class="form-control" value="{{ $user->name }}"   placeholder="Name">
            </p>
          </div>

          <div class="form-group">
            Address
            <p class="hint--top" data-hint="Address" id="input-field">
              <textarea name="address" placeholder="Address" class="form-control">{{ $user->address }}</textarea>
            </p>
          </div>

          <div class="form-group">
            City
            <p class="hint--top" data-hint="City" id="input-field">     
              <input type="text" name="city" class="form-control" value="{{ $user->city }}" placeholder="City">
            </p>
          </div>

          <div class="form-group">
            Phone
            <p class="hint--top" data-hint="Phone" id="input-field">
              <input type="phone" name="phone" class="form-control" value="{{ $user->phone }}" placeholder="Phone">
            </p>
          </div>

          <div class="form-group">
            <p class="hint--top" data-hint="Donate" id="input-field">
              <select name="is_donor" class="form-control" required="">
                <option selected disabled> Available for dontaion </option>          
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </p>
          </div>

          <input type="submit" class="btn btn-default"  value="Submit">
        </form>
      </div>
    </div>
  </div>

@stop
