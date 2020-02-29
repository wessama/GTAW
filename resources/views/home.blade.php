@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a type="button" class="btn btn-primary mb-1 ml-3" href="#" id="get-players">Christmas Party</a>
                    <a type="button" class="btn btn-primary mb-1 ml-3" href="#" id="get-items">Items</a>

                    <div class="container">
                        <table class='table table-striped table-bordered table-hover' id='records_table'>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Joined on</th>
                            </tr>
                        </table>

                        <table class='table table-striped table-bordered table-hover' id='items_table'>
                            <tr>
                                <th>Items</th>
                            </tr>
                        </table>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection