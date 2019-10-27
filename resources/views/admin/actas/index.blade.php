@extends('admin.layouts.layout')

@section('styles')
{{-- Plugins css --}}
<link href="{{ asset('libs/x-editable/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
{{-- ============================================================== --}}
{{-- Start Page Content here --}}
{{-- ============================================================== --}}

<div class="content-page">
    <div class="content">
        {{-- Start Content --}}
        <div class="container-fluid">
            {{-- start page title --}}
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Actas cargadas</h4>
                    </div>
                </div>
            </div>     
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form id="formBuscar" class="form-inline">
                            <div class="form-group mx-sm3">
                                <select class="selectpicker" data-live-search="true" data-style="btn-light" id="mesas-list">
                                    <option value="0">Seleccione una mesa</option>
                                    @foreach ($mesas as $mesa)
                                    <option value="{{$mesa->numero}}">{{$mesa->numero}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" id="btnBuscar" class="btn btn-primary" onclick="mostrarTabla(true)">
                                Buscar
                            </button>
                        </form>
                        <div class="table-responsive mt-3" id="div-tabla">
                            <table class="table table-centered table-borderless table-striped mb-0">
                                <tbody>
                                    <tr>
                                        <td style="width: 35%;">Simple text field</td>
                                        <td><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">Superuser</a></td>
                                    </tr>
                                    <tr>
                                        <td>Empty text field, required</td>
                                        <td><a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
                                    </tr>
                                    <tr>
                                        <td>Select, local array, custom display</td>
                                        <td><a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
                                    </tr>
                                    <tr>
                                        <td>Select, remote array, no buttons</td>
                                        <td><a href="#" id="inline-group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a></td>
                                    </tr>
                                    <tr>
                                        <td>Select, error while loading</td>
                                        <td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
                                    </tr>

                                    <tr>
                                        <td>Combodate (date)</td>
                                        <td><a href="#" id="inline-dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
                                    </tr>
                                    <tr>
                                        <td>Combodate (datetime)</td>
                                        <td><a href="#" id="inline-event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
                                    </tr>

                                    <tr>
                                        <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                                        <td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">Awesome user!</a></td>
                                    </tr>

                                    <tr>
                                        <td>Checklist</td>
                                        <td><a href="#" id="inline-fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> 
                        {{-- end .table-responsive --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- container --}}
    </div> 
    {{-- content --}}
@endsection

@section('scripts')
<script src="{{ asset('libs/moment/moment.min.js') }}"></script>
<script src="{{ asset('libs/x-editable/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
{{-- Init js --}}
<script src="{{ asset('js/pages/form-xeditable.init.js') }}"></script>
<script src="{{ asset('js/pages/actas.init.js') }}"></script>
@endsection

<script>
  
</script>