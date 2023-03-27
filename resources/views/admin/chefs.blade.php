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
                      <a href="{{route('chef.add')}}" class="btn btn-primary float-end">Add Chef</a>
                    <div class="">
                        <h4 class="card-title text-center">Chefs table</h4>
                    </div>
                  @if(session()->has('delete'))
                    <p x-data={open:true} x-show="open" x-on:click.away="open = !open" class="alert alert-success text-center">{{session('delete')}}</p>
                  @endif
                  <div class="table-responsive">
                    <table class="table table-dark">
                    @if($chefs->count())
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Post</th>
                          <th>Author</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($chefs as $key => $chef)
                        <tr>
                          <td>{{++$key}}</td>
                          <td>{{$chef->name}}</td>
                          <td>{{$chef->post}}</td>
                          <td>{{$chef->user->name}}</td>
                          <td><img src="{{'storage/chefs/'.$chef->image}}" alt="{{$chef->image}}"></td>
                          <td class="d-flex align-items-center">
                            <a href="" class="btn btn-behance me-1">Edit</a>
                          <form action="{{route('chef.delete',$chef)}}" method="POST">
                            @csrf
                            @method('DELETE')
                               <button type="submit" class="btn btn-google show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                          </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                    @else
                    <h3 class="text-center">No chef item</h3>
                    @endif
                  </table>
                  <div class="mb-2"></div>
                  {{$chefs->links('pagination::bootstrap-5')}}
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
    

