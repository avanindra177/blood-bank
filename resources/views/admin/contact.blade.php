@extends('layouts.admins')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-group"></i>Contact</div>
        <div class="panel-body">
            
        <table class="table">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Body</th>
            <th>Created At</th>
            <!-- <th>Actions</th> -->
            </tr>

            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->body }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
            @endforeach
        </table>


        {{ $contacts->render() }}

        </div>
    </div>

@stop