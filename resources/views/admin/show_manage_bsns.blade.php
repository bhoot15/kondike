@extends('admin.admin_panel')

@section('admin_content')
    <table class="table" >
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
@stop