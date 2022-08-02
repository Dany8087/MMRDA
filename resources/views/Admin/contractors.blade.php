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
               <h3>Contractors List</h3>
            </div>
          </div>
          <div class="col col-6">
            <div class="text-end">
              <a href="addcontractor" class="grad-btn grad-btn-color" >Add Contractor <img src="images/btn-arrow-color.svg" alt="arrow"/></a>
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
                            <th scope="col">Sr.no</th>
                            <th scope="col"> Company Name</th>
                            <th scope="col"> Company type</th>
                            <th scope="col"> Contact Person</th>
                            <th scope="col"> Contact Number</th>
                            <th scope="col"> Email</th>
                            <th scope="col"> Options</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contractors as $items)
                  <tr>
                      <td>{{$items['id']}}</td>
                      <td>{{$items['CompanyName']}}</td>
                      <td>{{$items['Companytype']}}</td>
                      <td>{{$items['ContactPerson']}}</td>
                      <td>{{$items['ContactNumber']}}</td>
                      <td>{{$items['Email']}}</td>
                      <td>
                          <div class="dropdown action-div">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </div>
                            <!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href={{"updateContractor/".$items['id']}}><i class="fas fa-pencil-alt"></i>Update</a></li>
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