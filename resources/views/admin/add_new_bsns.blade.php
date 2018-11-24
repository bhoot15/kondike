@extends('admin.admin_panel')

@section('admin_content')
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
            <input id="contact" type="text" class="form-control"
                   placeholder="+88 01X XX XXX XXX">
        </div>
        <div class="form-group col-6">
            <label for="email">Email Address</label>
            <input id="email" type="text" class="form-control" placeholder="info@kondike.com">
        </div>
    </div>

    <div class="form-group">
        <label for="website">Website (if any)</label>
        <input id="website" type="text" class="form-control"
               placeholder="https://www.kondike.com">
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
        <input id="description" type="text" class="form-control"
               placeholder="Write something about your business in short">
    </div>
    <div class="row col-12">
        <div class="col-12">
            <div class="col-3">
                hello
            </div>
            <div class="col-3">hello</div>
            <div class="col-3">hello</div>
            <div class="col-3">hello</div>
        </div>
    </div>


    <div class="form-group">
        <label for="tags">What Do We Offer</label>
        <input id="tags" type="text" class="form-control"
               placeholder="Gifts, Showpieces, Fidget Spinners">
    </div>
    <div class="form-group">
        <label for="signature_product">Best Known For</label>
        <input id="signature_product" type="text" class="form-control"
               placeholder="Fidget Spinner">
    </div>
    <div class="form-group">
        <label for="year">Year of Establishment</label>
        <input id="year" type="text" class="form-control" placeholder="2016">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@stop