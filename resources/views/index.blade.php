@extends('main-layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('student/create') }}" class="btn btn-info float-right btn-sm"><i class="fas fa-plus-circle"></i> Add New </a>
        </div>
    </div>

    <table class="table table-hover table-bordered mt-4" style="text-align: center">
        <thead class="thead-dark">
            <th> Name </th>
            <th> Date of Birth </th>
            <th> Gender </th>
            <th> Email </th>
            <th> Phone </th>
            <th> Address </th>
            <th> Zipcode </th>
            <th> Action </th>
        </thead>

        <tbody>
            @foreach($students as $student)
            <tr>
                <td> {{ $student->full_name }} </td>
                <td> {{ $student->dob }} </td>
                <td> {{ $student->gender }} </td>
                <td> {{ $student->email }} </td>
                <td> {{ $student->phone }} </td>
                <td> {{ $student->address }} </td>
                <td> {{ $student->zipcode }} </td>
                <td>
                    <form action="{{ route('student.destroy', $student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                    <a href="{{ route('student.show', $student->id )}}" class="badge badge-info"> View <i class="fas fa-envelope-open-text"></i> </a>
                    <a href="{{ route('student.edit', $student->id )}}" class="badge badge-success" style="width: 50px"> Edit <i class="fas fa-user-edit"></i> </a>
                    <button class="badge btn-danger" type="submit"> Delete <i class="fas fa-trash-alt"></i> </button>


                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection