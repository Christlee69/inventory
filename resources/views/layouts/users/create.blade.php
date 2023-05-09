<x-app-layout>
    <div class="row">

        <div class="offset-2 col-md-8 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title text-center">
                    <h2>User Form</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    @if(isset($user))
                    <form method="post" action="{{ route('user.update', ['user' => $user->id]) }}" enctype='multipart/form-data' class="form-horizontal">
                        @method('put')
                        @else
                        <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data" class="form-horizontal">
                            @endif

                            @csrf
                            <div class="form-group row">
                                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="first_name" value="{{old('first_name', isset($user->first_name) ? $user->first_name : '')}}" class="form-control" id="first_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="last_name" value="{{old('last_name', isset($user->last_name) ? $user->last_name : '')}}" class="form-control" id="last_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="middle_name" value="{{old('middle_name', isset($user->middle_name) ? $user->middle_name : '')}}" class="form-control" id="middle_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" value="{{old('address', isset($user->address) ? $user->address : '')}}" class="form-control" id="address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact_no" class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-10">
                                    <input type="number" name="contact_no" value="{{old('contact_no', isset($user->contact_no) ? $user->contact_no : '')}}" class="form-control" id="contact_no">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="{{old('email', isset($user->email) ? $user->email : '')}}" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" value="{{old('password', isset($user->password) ? $user->password : '')}}" class="form-control" id="password">
                                </div>
                            </div>
                            <button  type="" class="btn btn-primary float-sm-right">Add</button>
                            <a  href="{{route('user.index')}}"class="btn btn-warning float-sm-left">Cancel</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>