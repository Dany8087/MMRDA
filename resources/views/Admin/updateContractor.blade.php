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
                <h3>Update Contractor</h3>
              </div>
            </div>
            <div class="col col-6" style="margin-top: 25px:">
              <div class="text-end"> <a href="/contractors" class="grad-btn grad-btn-color"><img src="images/left-arrow-color.svg" alt="arrow" style="margin-right:15px; "/> Back </a> </div>
            </div>
          </div>
          <form action="/updatingContractor" method="post" enctype="multipart/form-data">
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
            @csrf
            <input type="hidden" name="id" value="{{$company['id']}}">
            <div class="row">
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Company Name</label>
                  <input type="text" class="form-control" name="CompanyName" value="{{$company['CompanyName']}}" placeholder="Enter Company Name" />
                  <span class="text-danger">@error('CompanyName') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                <label class="form-label">Company Type</label>
                <select class="form-select form-select-lg" aria-label="Default select example" name="Companytype">
                <option name="" value="{{$company['Companytype']}}">{{$company['Companytype']}}</option>
                <option name="" value="Pvt. Ltd.">Pvt. Ltd.</option>
                <option name="" value="Public Ltd.">Public Ltd.</option>
                <option name="" value="LLP">LLP</option>
                <option name="" value="Proprietorship">Proprietorship</option>
                </select>
                  <span class="text-danger">@error('Companytype') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Contact Persons name</label>
                  <input type="text" class="form-control" name="ContactPerson" value="{{$company['ContactPerson']}}" placeholder="Enter Contact Persons name" />
                  <span class="text-danger">@error('ContactPerson') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Contact Number</label>
                  <input type="text" class="form-control" name="ContactNumber" value="{{$company['ContactNumber']}}" placeholder="Enter Contact Number" />
                    <span class="text-danger">@error('ContactNumber') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Regirtered Email</label>
                  <input type="email" class="form-control" name="Email" value="{{$company['Email']}}" placeholder="Enter Regirtered Email" />
                  <span class="text-danger">@error('CategorySubtitle') {{$message}} @enderror</span>
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