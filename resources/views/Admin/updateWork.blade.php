<x-layout>
<!-- loader -->
<div class="wrapper"> 
  <!-- ======== Header Section ======  -->
  <div id="content" class="ap-com content-wrapper"> 
    <!-- Sidebar start -->

    <div class="ap-com content-manger">
      <!-- header start -->

      <div class="ap-com container-main">
        <div class="container">
          <div class="row mb-4 align-items-center">
            <div class="col col-6">
              <div class="ap-com sm-com-heading" style="margin-top:50px;">
                <h3>Update Contractors work</h3>
              </div>
            </div>
            <div class="col col-6" style="margin-top: 25px:">
              <div class="text-end"> <a href="/contractorWork" class="grad-btn grad-btn-color"><img src="images/left-arrow-color.svg" alt="arrow" style="margin-right:15px; "/> Back </a> </div>
            </div>
          </div>

          <form action="/updatingWork" method="post" enctype="multipart/form-data">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <input type="hidden" name="id" value="{{$contractor_works['id']}}">
              <div class="row">
                <div class="col col-md-6 col-12">
                  <div class="mb-4 form-group">
                  <label class="form-label">Company Name</label>
                  <select class="form-select form-select-lg" aria-label="Default select example" name="CompanyName">
                  <option name="" value="{{$contractor_works['CompanyName']}}">{{$contractor_works['CompanyName']}}</option>
                  @foreach ($contractors as $items)
                  <option name="" value="{{$items['CompanyName']}}">{{$items['CompanyName']}}</option>
                  @endforeach 
                  </select>
                  <span class="text-danger">@error('CompanyName') {{$message}} @enderror</span>
                  </div>
                </div>
                <div class="col col-md-6 col-12">
                  <div class="mb-4 form-group">
                    <label class="form-label">Short Description</label>
                    <input type="text" class="form-control" name="ShortDescription" value="{{$contractor_works['ShortDescription']}}" placeholder="Write a Short Description" />
                    <span class="text-danger">@error('ShortDescription') {{$message}} @enderror</span>
                  </div>
                </div>
                <div class="col col-md-12 col-12">
                  <div class="mb-4 form-group">
                    <label class="form-label">Long Description</label>
                    <input type="text" class="form-control" name="LongDescription" value="{{$contractor_works['LongDescription']}}" placeholder="Write a Long Description" />
                    <span class="text-danger">@error('LongDescription') {{$message}} @enderror</span>
                  </div>
                </div>
                <div class="col col-md-4 col-12">
                  <div class="mb-4 form-group">
                  <label class="form-label">Start Date</label>
                  <div class='input-group date' id='datetimepicker' name="Startdate" value="{{$contractor_works['Startdate']}}">
                    <input type='text' class="form-control" name="Startdate"  value="{{$contractor_works['Startdate']}}" placeholder="{{$contractor_works['Startdate']}}" style="position: unset;" />
                    <span class="input-group-addon"  value="{{$contractor_works['Startdate']}}">
                    <span class="glyphicon glyphicon-calendar"  value="{{$contractor_works['Startdate']}}"></span>
                    </span>
                  </div>
                    <span class="text-danger">@error('Startdate') {{$message}} @enderror</span>
                  </div>
                </div>
                <div class="col col-md-4 col-12">
                  <div class="mb-4 form-group">
                    <label class="form-label">Completion Date</label>
                    <div class='input-group date' id='datetimepicker1' name="CompletionDate" value="{{$contractor_works['CompletionDate']}}">
                      <input type='text' class="form-control" name="CompletionDate" value="{{$contractor_works['CompletionDate']}}" placeholder="{{$contractor_works['CompletionDate']}}" style="position: unset;" />
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  <span class="text-danger">@error('CompletionDate') {{$message}} @enderror</span>
                  </div>
                </div>
                <div class="col col-md-4 col-12">
                  <div class="mb-4 form-group">
                    <label class="form-label">Penalty rate</label>
                    <input type="text" class="form-control" name="Penaltyrate" value="{{$contractor_works['Penaltyrate']}}" placeholder="Write Penalty rate" />
                    <span class="text-danger">@error('Penaltyrate') {{$message}} @enderror</span>
                  </div>
                </div>
              <div class="row mb-4">
                <div class="col col-12 mb-3">
                      <h4 class="sub-title">Location</h4>
                </div>
                <div class="col col-md-6 col-12">
                        <div class="mb-4 form-group">
                            <label class="form-label">line 1</label>
                            <input type="text" class="form-control" name="line1" value="{{$contractor_works['line1']}}" placeholder="Area, Landmark, Lane no." />
                            <span class="text-danger">@error('line1') {{$message}} @enderror</span>
                        </div>
                </div>
                <div class="col col-md-6 col-12">
                        <div class="mb-4 form-group">
                            <label class="form-label">Line 2</label>
                            <input type="text" class="form-control" name="Line2" value="{{$contractor_works['Line2']}}" placeholder="Village, Town, City" />
                            <span class="text-danger">@error('Line2') {{$message}} @enderror</span>
                        </div>
                </div>
                <div class="col col-md-4 col-12">
                        <div class="mb-4 form-group">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="City" value="{{$contractor_works['City']}}" placeholder="City Name" />
                            <span class="text-danger">@error('City') {{$message}} @enderror</span>
                        </div>
                </div>
                <div class="col col-md-4 col-12">
                        <div class="mb-4 form-group">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" name="State" value="{{$contractor_works['State']}}" placeholder="State Name" />
                            <span class="text-danger">@error('State') {{$message}} @enderror</span>
                        </div>
                </div>
                <div class="col col-md-4 col-12">
                        <div class="mb-4 form-group">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" name="Country" value="{{$contractor_works['Country']}}" placeholder="Country Name" />
                            <span class="text-danger">@error('Country') {{$message}} @enderror</span>
                        </div>
                </div>
                <div class="col col-md-4 col-12">
                        <div class="mb-4 form-group">
                            <label class="form-label">Type Of Roaad Constructed</label>
                            <select class="form-select form-select-lg" aria-label="Default select example" name="typeOfRoadConstructed">
                            <option name="" value="{{$contractor_works['typeOfRoadConstructed']}}">{{$contractor_works['typeOfRoadConstructed']}}</option>
                            <option name="" value="Cement Road">Cement Road</option>
                            <option name="" value="Tar Road">Tar Road</option>
                            <option name="" value="Block Road">Block Road</option>
                            <option name="" value="Foot Path">Foot Path</option>
                            </select>
                            <span class="text-danger">@error('typeOfRoadConstructed') {{$message}} @enderror</span>
                        </div>
                </div>
                <div class="col col-md-4 col-12">
                      <div class="mb-4 form-group">
                      <label class="form-label">Expiry Date</label>
                      <div class='input-group date' id='datetimepicker2' name="expiryDate" value="{{$contractor_works['expiryDate']}}">
                            <input type='text' class="form-control"  name="expiryDate" value="{{$contractor_works['expiryDate']}}" placeholder="{{$contractor_works['expiryDate']}}" style="position: unset;"/>
                            <span class="input-group-addon" value="{{$contractor_works['expiryDate']}}">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            </div>
                        <span class="text-danger">@error('expiryDate') {{$message}} @enderror</span>
                      </div>
                </div>
                        <div class="col col-12 mt-5">
                          <div class="text-center submit-div">
                              <button type="submit" class="grad-btn">Update <img src="images/btn-arrow.svg" alt="arrow"/></button>
                          </div>
                        </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
</x-layout>