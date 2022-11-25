@extends('front.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Student</h2>
                        </div>
                        <div class="card-body">
                            <p class="text-success mx-auto" > {{ Session::get('massege') }} </p>
                            <form action="{{ route('update-student',["id"=>$student->id ]) }}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4" for="name">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="student_name" id="name" class="form-control" value="{{ $student->student_name }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4" for="number">Number</label>
                                    <div class="col-md-8">
                                        <input type="text" name="number" id="number" class="form-control" value="{{ $student->number }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4" for="email">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" name="email" id="email" class="form-control" value="{{ $student->email }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4" for=""></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update" class="btn btn-outline-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
