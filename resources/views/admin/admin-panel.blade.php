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
                            <a href="#"
                               class="list-group-item list-group-item-action bg-success text-dark list-group-item-light">Add
                                New Business</a>


                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">Manage
                                Business</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">Manage
                                Admin</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">Mobile
                                Ads</a>
                        </div>

                    </div>
                    <div class="col-8">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width:15%;" scope="col"><p class="text-left">SL</p></th>
                                <th style="width:15%;" scope="col"><p class="text-left">ID</p></th>
                                <th style="width:30%;" scope="col"><p class="text-left">Name</p></th>
                                <th style="width:15%;" scope="col"><p class="text-center">Status</p></th>
                                <th style="width:25%;" scope="col"><p class="text-center">Action</p></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="col"><p class="text-left">1</p></td>
                                <td scope="col"><p class="text-left">A23jKmD</p></td>
                                <td scope="col"><p class="text-left">Knock</p></td>
                                <td scope="col"><p class="text-center"><i class="fas fa-check-circle fa-7x text-success"></i></p></td>
                                <td scope="col">
                                    <a class="btn" href="">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </a>

                                    <a class="btn" href="">
                                        <i class="fas fa-edit text-warning"></i>
                                    </a>

                                    <a class="btn" href="">
                                        <i class="far fa-play-circle text-success"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">1</td>
                                <td scope="col">A23jKmD</td>
                                <td scope="col">Knock</td>
                                <td scope="col"><p class="text-center"><i class="fas fa-exclamation-circle text-danger"></i></p></td>
                                <td scope="col">
                                    <a class="btn" href="">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </a>

                                    <a class="btn" href="">
                                        <i class="fas fa-edit text-warning"></i>
                                    </a>

                                    <a class="btn" href="">
                                        <i class="far fa-play-circle text-success"></i>
                                    </a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop