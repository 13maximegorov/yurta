@extends('layouts.admin')

@section('content')
    <style>
        .form-control {
            font-size: 18px !important;
            border-color: #ccc;
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Навигация</h4>
                            <div class="table-responsive">
                                <form class="forms-sample" method="post" action="/yurtaboard/nav/save">
                                    {{csrf_field()}}
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (\Illuminate\Support\Facades\Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{\Illuminate\Support\Facades\Session::get('success')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                <table class="table">
                                    <thead>
                                    {{-- <tr>
                                        <th></th>
                                    </tr> --}}
                                    </thead>
                                    <tbody>
                                        @if ($nav)
                                            @foreach ($nav as $n)
                                                <tr>
                                                    <td>
                                                    <input type="text" 
                                                        required class="form-control" 
                                                        name="nav[{{ $n->id }}][name]"  
                                                        placeholder="" 
                                                        value="{{ $n->title }}"
                                                    >
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input 
                                                                type="checkbox" 
                                                                <?=$n->is_active == '1' ? 'checked' : '' ?>
                                                                class="form-check-input" 
                                                                name="nav[{{ $n->id }}][visible]" 
                                                                id="membershipRadios2" 
                                                                value="{{ $n->id }}">
                                                                НЕ ПОКАЗЫВАТЬ
                                                            <i class="input-helper"></i></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                    <button type="submit" name="btn_settings" class="btn btn-primary ml-2 mt-3">
                                        Сохранить
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
