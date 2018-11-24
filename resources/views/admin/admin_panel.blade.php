@extends('admin.main')

@section('title','Admin Panel | KonDike')

@section('content')
    <div class="row" style="margin-top: 100px;">
        <div class="col-12">
            <div class="col-10 offset-1">
                {{--<div class="row col-12">
                        <div class="col-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item btn btn-success text-dark align-content-start">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <div class="col-8">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolores doloribus eaque eligendi expedita impedit, iure laboriosam laborum minus necessitatibus provident quas quisquam quod quos saepe sit tenetur ullam, vitae.
                        </div>

                </div>--}}
                <div class="row">
                    <div class="col-4">

                        <div class="list-group" style="border: none;">
                            <a href="admin-panel"
                               class="list-group-item list-group-item-action bg-success text-dark list-group-item-light {{Request::is('admin-panel')?"active":""}}">Add
                                New Business</a>


                            <a href="admin-manage-business" class="list-group-item list-group-item-action list-group-item-light {{Request::is('admin-manage-business')?"active":""}}">Manage
                                Business</a>
                            <a href="#" class="list-group-item disabled list-group-item-light">Manage
                                Admin</a>
                            <a href="#" class="list-group-item disabled list-group-item-light">Mobile
                                Ads</a>
                        </div>

                    </div>
                    <div class="col-8">
                        @yield('admin_content')



                    </div>
                </div>
            </div>
        </div>
    </div>
@stop