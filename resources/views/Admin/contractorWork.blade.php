<x-layout>
<!-- loader -->
<div class="wrapper"> 
  <!-- ======== Header Section ======  -->
  <div id="content" class="ap-com content-wrapper"> 
    <!-- Sidebar start -->

    <div class="ap-com content-manger"> 
      <!-- header start -->

      <div class="ap-com container-main">
        <div class="row mb-4 align-items-center">
          <div class="col col-6">
            <div class="ap-com sm-com-heading" style="margin-top:50px;">
               <h3>Contractors Work List</h3>
            </div>
          </div>
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
          <div class="col col-6">
            <div class="text-end">
              <a href="addWork" class="grad-btn grad-btn-color" >Add Work <img src="images/btn-arrow-color.svg" alt="arrow"/></a>
            </div>
          </div>
        </div>
        
        <div class="ap-com">
          <div class="row">
            <div class="col col-12">
                <div class="table-responsive table-panel">
                    <table class="table table-bordered align-middle ven-table">
                    <thead>
                        <tr>
                            <th scope="col">Contract no</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Long Description</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">completion Date</th>
                            <th scope="col">Penalty Rate</th>
                            <th scope="col">Address line 1</th>
                            <th scope="col">Address line 2</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Country</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contractor_works as $items)
                  <tr>
                      <td>{{$items['id']}}</td>
                      <td>{{$items['CompanyName']}}</td>
                      <td>{{$items['ShortDescription']}}</td>
                      <td>{{$items['LongDescription']}}</td>
                      <td>{{$items['Startdate']}}</td>
                      <td>{{$items['CompletionDate']}}</td>
                      <td>{{$items['Penaltyrate']}}</td>
                      <td>{{$items['line1']}}</td>
                      <td>{{$items['Line2']}}</td>
                      <td>{{$items['City']}}</td>
                      <td>{{$items['State']}}</td>
                      <td>{{$items['Country']}}</td>
                      <td>{{$items['expiryDate']}}</td>
                      <td>
                          <div class="dropdown action-div">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </div>
                            <!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href={{"updateWork/".$items['id']}}><i class="fas fa-pencil-alt"></i>Update</a></li>
                              <li><a class="dropdown-item" href={{"delete/".$items['id']}}><i class="fas fa-trash-alt"></i> Delete</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</x-layout>