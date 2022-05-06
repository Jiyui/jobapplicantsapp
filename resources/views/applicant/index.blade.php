
@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Applicants</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Applicant.create') }}" title="Create a applicant"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>Region</th>
            <th>Province</th>
            <th>city</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Account Status</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($applicant as $applicant)
            <tr>
                <td>{{ $applicant->id }}</td>
                <td>{{ $applicant->Region }}</td>
                <td>{{ $applicant->Province }}</td>
                <td>{{ $applicant->City }}</td>
                <td>{{ $applicant->Firstname }}</td>
                <td>{{ $applicant->Middlename }}</td>
                <td>{{ $applicant->Lastname }}</td>
                <td>{{ $applicant->accountstatus }}</td>
                <td>
                    <form action="{{ route('Applicant.destroy', $applicant->id) }}" method="POST">

                        <a href="{{ route('Applicant.show', $applicant->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('Applicant.edit', $applicant->id) }}">
                            Edit
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection





