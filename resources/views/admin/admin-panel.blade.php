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

                        {{--<table class="table" >
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
                        </table>--}}

                        <form>
                            <div class="form-group">
                                <label for="nameOfBsns">Name of Business / Organization</label>
                                <input id="nameOfBsns" type="text" class="form-control" placeholder="e.g. Knock">
                            </div>
                            <div class="form-group">
                                <label for="location">Physical Address/Location</label>
                                <input id="location" type="text" class="form-control" placeholder="Dhanmondi">
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="area">Area</label>
                                    <input id="area" type="text" class="form-control" placeholder="Dhanmondi">
                                </div>
                                <div class="form-group col-6">
                                    <label for="city">City</label>
                                    <input id="city" type="text" class="form-control" placeholder="Dhaka">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="latitude">Latitude</label>
                                    <input id="latitude" type="text" class="form-control" placeholder="23.578862">
                                </div>
                                <div class="form-group col-6">
                                    <label for="longitude">Longitude</label>
                                    <input id="longitude" type="text" class="form-control" placeholder="90.5784">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="contact">Contact Number / Phone</label>
                                    <input id="contact" type="text" class="form-control" placeholder="+88 01X XX XXX XXX">
                                </div>
                                <div class="form-group col-6">
                                    <label for="email">Email Address</label>
                                    <input id="email" type="text" class="form-control" placeholder="info@kondike.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="website">Website (if any)</label>
                                <input id="website" type="text" class="form-control" placeholder="https://www.kondike.com">
                            </div>
                            <div class="form-group">
                                <label for="location">Physical Address/Location</label>
                                <input id="location" type="text" class="form-control" placeholder="Area/Location">
                            </div>
                            <div class="form-group">
                                <label for="type">Type/Category of Business/Organization/Service</label>
                                <input id="type" type="text" class="form-control" placeholder="Gift Shop">
                            </div>
                            <div class="form-group">
                                <label for="description">Short Description of Business</label>
                                <input id="description" type="text" class="form-control" placeholder="Write something about your business in short">
                            </div>
                            <div class="row col-12">
                                {{--<div class="col-12">--}}
                                    <div class="col-3">

                                    </div>
                                    <div class="col-3">hello</div>
                                    <div class="col-3">hello</div>
                                    <div class="col-3">hello</div>
                                {{--</div>--}}
                            </div>


                            <div class="form-group">
                                <label for="tags">What Do We Offer</label>
                                <input id="tags" type="text" class="form-control" placeholder="Gifts, Showpieces, Fidget Spinners">
                            </div>
                            <div class="form-group">
                                <label for="signature_product">Best Known For</label>
                                <input id="signature_product" type="text" class="form-control" placeholder="Fidget Spinner">
                            </div>
                            <div class="form-group">
                                <label for="year">Year of Establishment</label>
                                <input id="year" type="text" class="form-control" placeholder="2016">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop