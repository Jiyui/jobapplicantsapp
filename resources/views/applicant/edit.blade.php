@extends('home')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Applicant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('applicants.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('applicants.update', $applicant->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="text" name="id" value="{{ $applicant->id }}" class="form-control" placeholder="ID">
                </div>
                <div class="form-group">
                    <strong>Region:</strong>
                    <input type="text" name="Region" value="{{ $applicant->Region }}" class="form-control" placeholder="Region">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Province:</strong>
                    <textarea class="form-control" style="height:50px" name="Province"
                              placeholder="Province">{{ $applicant->Province }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="City" class="form-control" placeholder="{{ $applicant->City }}"
                           value="{{ $applicant->City }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Firstname:</strong>
                    <input type="text" name="Firstname" class="form-control" placeholder="{{ $applicant->Firstname }}"
                           value="{{ $applicant->firstname }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Middlename:</strong>
                    <input type="text" name="Middlename" class="form-control" placeholder="{{ $applicant->Middlename }}"
                           value="{{ $applicant->middlename }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    <input type="text" name="Lastname" class="form-control" placeholder="{{ $applicant->Lastname }}"
                           value="{{ $applicant->lastname }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sex:</strong>
                    <input type="text" name="Sex" class="form-control" placeholder="{{ $applicant->Sex }}"
                           value="{{ $applicant->sex }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="text" name="Age" class="form-control" placeholder="{{ $applicant->Age }}"
                           value="{{ $applicant->age }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maritalstatus:</strong>
                    <input type="text" name="Maritalstatus" class="form-control" placeholder="{{ $applicant->Maritalstatus }}"
                           value="{{ $applicant->maritalstatus }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course:</strong>
                    <input type="text" name="course" class="form-control" placeholder="{{ $applicant->course }}"
                           value="{{ $applicant->course }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Position_applied:</strong>
                    <input type="text" name="positionapplied" class="form-control" placeholder="{{ $applicant->positionapplied }}"
                           value="{{ $applicant->positionapplied }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Account Status</strong>
                    <input type="text" name="accountstatus" class="form-control" placeholder="{{ $applicant->AccountStatus }}"
                           value="{{ $applicant->accountstatus }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
