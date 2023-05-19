<x-app-layout>
    <div class="col-md-12 col-sm-12  ">
        @include('layouts.flash.flash')
        <div class="x_panel">
            <div class="x_content">

                <a href="{{route('department.create')}}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    <span class="vr"></span>
                    Add New
                </a>

                <div class="table-responsive">
                    <table id="departmentTable" class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">Department </th>
                                <th class="column-title">Status </th>
                                <th class="column-title"><span class="nobr">Action</span></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $value)
                            <tr class="even pointer">
                                <td class=" ">{{$value->department}}</td>
                                <td class=" "> <span class="badge badge-secondary">{{$value->status->status}}</span></td>
                                <td class=" ">
                                    <div class="btn-group">
                                        <a href="{{ route('department.edit', $value->id) }}" class="btn btn-info m-1 btn-sm rounded" title="Edit"><i class="fa fa-edit" small></i></a>

                                        <form action="{{ route('department.destroy', $value->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger delete-header m-1 btn-sm rounded" title="Delete"><i class="fa fa-trash" small></i></button>
                                        </form>
                                    </div>
                                </td>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.scripts.departments-script')
@include('layouts.scripts.messages-script')