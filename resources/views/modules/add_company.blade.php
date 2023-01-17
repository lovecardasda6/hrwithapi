<div id="add_company_module"
     style="background-color: rgba(0,0,0,.5);
     z-index: 10000;
     position: fixed;
     top:0;
     left:0;
     width: 100%;
     height: 100%;
display: none;">

    <div class="row justify-content-center ml-4" style="margin-top: 2em;">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Company</h3>

                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body">

                    <form action="/company/add" method="post">
                        @csrf
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    {{--                                            <label for="inputName">Name</label>--}}
                                    <input type="text" id="inputName" class="form-control "  placeholder="Name">
                                </div>

                                <div class="form-group">
                                    {{--                                            <label for="inputName">City</label>--}}
                                    <input type="text" id="inputName" class="form-control" placeholder="City">
                                </div>

                                <div class="form-group">
                                    {{--                                            <label for="inputName">Country & Region</label>--}}
                                    <input type="text" id="inputName" class="form-control " placeholder="Country & Region">
                                </div>

                                <div class="form-group">
                                    {{--                                            <label for="inputName">Fax</label>--}}
                                    <input type="text" id="inputName" class="form-control " placeholder="Fax">
                                </div>

                                <div class="form-group">
                                    {{--                                            <label for="inputName">Email</label>--}}
                                    <input type="text" id="inputName" class="form-control " placeholder="Email Address">
                                </div>

                                <div class="form-group">
                                    {{--                                            <label for="inputName">State</label>--}}
                                    <input type="text" id="inputName" class="form-control" placeholder="State">
                                </div>
                            </div>
                            <div class="col-6">

                                <div class="form-group">
                                    {{--                                            <label for="inputName">Phone</label>--}}
                                    <input type="text" id="inputName" class="form-control " placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    {{--                                            <label for="inputName">Website</label>--}}
                                    <input type="text" id="inputName" class="form-control" placeholder="Webiste">
                                </div>

                                <div class="form-group">
                                    {{--                                            <label for="inputName">Postal Code</label>--}}
                                    <input type="text" id="inputName" class="form-control" placeholder="Postal Code">
                                </div>

                                <div class="form-group">
                                    {{--                                            <label for="inputName">Address 1</label>--}}
                                    <input type="text" id="inputName" class="form-control" placeholder="Address 1">
                                </div>

                                <div class="form-group">
                                    {{--                                            <label for="inputName">Address 2</label>--}}
                                    <input type="text" id="inputName" class="form-control" placeholder="Address 2">
                                </div>
                            </div><br/>
                            <div class="col-12">
                                <div class="float-right">
                                    <input type="submit" class="btn btn-primary" value="Save & New"/>
                                    <button class="btn btn-info">Save & Close</button>
                                    <button type="button" class="btn btn-danger" onclick="$('#add_company_module').hide()">Close</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

