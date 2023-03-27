@extends('.admin.layouts.app')

@section('admin-content')
<div class="container-scroller">
  <!-- partial:partials/_sidebar.html -->

  @include('admin.partials.navbar')

        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <a href="{{route('food.add')}}" class="btn btn-primary float-end">Add Food</a>
                    <div class="">
                        <h4 class="card-title text-center">Users table</h4>
                    </div>
                  @if(session()->has('delete'))
                    <p x-data={open:true} x-show="open" x-on:click.away="open = !open" class="alert alert-success text-center">{{session('delete')}}</p>
                  @endif
                  <div class="table-responsive">
                    <table class="table table-dark">
                    @if($foods->count())
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($foods as $key => $food)
                        <tr>
                          <td>{{++$key}}</td>
                          <td>{{$food->title}}</td>
                          <td>{{$food->description}}</td>
                          <td>{{$food->price}} $</td>
                          <td><img src="{{'storage/foods/'.$food->image}}" alt="{{$food->image}}"></td>
                          <td class="d-flex align-items-center">
                            <a href="{{route('edit',$food)}}" class="btn btn-behance me-1">Edit</a>
                          <form action="{{route('food.delete',$food)}}" method="POST">
                            @csrf
                            @method('DELETE')
                               <button type="submit" class="btn btn-google show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                          </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                    @else
                    <h3 class="text-center">No food item</h3>
                    @endif
                  </table>
                  <div class="mb-2"></div>
                  {{$foods->links('pagination::bootstrap-5')}}
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->

</div>
@endsection
    

