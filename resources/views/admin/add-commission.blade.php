@extends('layouts.admin')

@section('title')
    Add Commission
@endsection

@section('contents')
    <div id="content-page" class="content-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 col-lg-6" style="margin: 0 auto;">
                    <div class="iq-card">

                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Update {{ $user->name }}'s Commission Account</h4>
                                <p><strong>Current Balance:</strong> ${{ $user->wallet ? $user->wallet->commission : Null }}</p>
                            </div>
                        </div>

                        @if(session('success'))
                            <div style="width: 50%; margin: 10px auto; color: #0b0b0b;" align="center"
                                 class="bg-success p-2" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="iq-card-body">
                            <form method="post" action="{{ route('admin.commission.store', $user->id) }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Amount</label>
                                        <input name="amount" type="number" class="form-control"
                                               value="{{ $user->wallet ? $user->wallet->commission : Null }}"
                                               id="validationDefault01" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Description</label>
                                        <textarea class="form-control" name="description" required>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn brand-color" type="submit">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
