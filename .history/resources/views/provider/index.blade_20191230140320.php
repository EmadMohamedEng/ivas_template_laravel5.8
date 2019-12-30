@extends('template')
@section('page_title')
provider
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-black">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> provider Table</h3>
                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                                <a class="btn btn-circle show-tooltip" title="" href="{{url('provider/create')}}"
                                    data-original-title="Add new record"><i class="fa fa-plus"></i></a>
                                <?php
                                $table_name = "providers";
                                // pass table name to delete all function
                                // if the current route exists in delete all table flags it will appear in view
                                // else it'll not appear
                                ?>
                            </div>
                        </div>
                        <br><br>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped dt-responsive" cellspacing="0" width="100%">

                                <thead>
                                    <tr>
                                        <th style="width:18px"><input type="checkbox" onclick="select_all('providers')">
                                        </th>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($providers as $value)
                                    <tr>
                                        <td><input class="select_all_template" type="checkbox" name="selected_rows[]"
                                                value="{{$value->id}}" class="roles" onclick="collect_selected(this)">
                                        </td>
                                        <td>{{$value->id}}</td>
                                        <td>
                                            {{$value->title}}
                                        </td>
                                        <td>
                                            <img class=" img-circle" width="100px" height="100px"
                                                src="{{$value->image}}" />
                                        </td>
                                        <td class="visible-md visible-lg">
                                            <div class="btn-group">
                                                <a class="btn btn-sm show-tooltip"
                                                    href="{{url("provider/$value->id/edit")}}" title="Edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <a class="btn btn-sm show-tooltip btn-danger"
                                                    onclick="return ConfirmDelete();"
                                                    href='{{url("provider/$value->id/delete")}}" title="Delete"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
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
    </div>

</div>

@stop

@section('script')
<script>
$('#provider').addClass('active');
$('#provider_index').addClass('active');
</script>
@stop
