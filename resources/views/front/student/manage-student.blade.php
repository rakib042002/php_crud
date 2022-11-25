@extends('front.master')
@section('title')
    Manage STudent
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">

                        <div class="card-header">
                            <h2>Add Student</h2>
                        </div>
                        <div class="card-body">
                            <h3 class="text-success">{{ Session::get('massege') }}</h3>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $student->student_name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->number }}</td>
                                        <td>
                                            <a href="{{ route('edit-student',[$student->id]) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('delete-student',[$student->id]) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
