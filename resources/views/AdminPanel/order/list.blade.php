@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Users</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Orders</li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
            <div id="alert"
                class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total Amount</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>

                            <th scope="row">{{ $item->user_name }}</th>
                            <th scope="row">{{ $item->total_price   }}</th>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.alert').fadeOut(3000);
            var old_val;
            $(document).on('focus', '.type', function(e) {
                old_val = $(this).val();
            });
            $(document).on('change', '.type', function(e) {
                e.preventDefault();
                var id = $(this).attr('id');
                var name = $(this).attr('data-name');
                var new_val = $(this).val();
                var csrf = "{{ csrf_token() }}";

                if (!confirm('Are you sure to change ' + name + '\'s Account Type?')) {
                    $(this).val(old_val);
                    return;
                } else {
                    data = {
                        id: id,
                        typ: new_val,
                        _token: csrf
                    }
                    $.ajax({
                        type: "POST",
                        url: "{{ route('type_users') }}",
                        data: data,
                        dataType: "JSON",
                        success: function(response) {
                            if (response.status) {
                                $('.alert').fadeIn();
                                // alert(response.message);
                                $('#alert').addClass('alert alert-success')
                                    .removeClass('m-0 border-0 p-0').html('Edited...');
                                $('.alert').fadeOut(3000);
                            }
                        }
                    });
                    old_val = new_val;
                }

            });
        });
    </script>
@endsection
