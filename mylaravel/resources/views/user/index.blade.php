@extends('layouts.default_with_menu')

@section('content')
<div class="row">
  <h1>{{session('user')->name}}</h1>
    <div class="col-md-12">
      <div class="card mb-12">
        <div class="card-header"><h3 class="card-title"></h3></div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Email</th>
                <th style="width: 240px"></th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($users as $index => $user) { ?>
              <tr class="align-middle">
                <td>{{ $index+1 }}.</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ url('/user/'.$user->id)}}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                    {{-- <form action="{{ url('/user') }}" method="post" style="display: inline;"> --}}
                    <form id="delete-form-{{ $user->id }}" action="{{ url('/user') }}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{ $user->id }}" >
                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $user->id }})">Delete</button>
                    </form>


                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-end">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
      <!-- /.card -->

    </div>
</div>
@endsection

@section('scripts')
<script>
    function confirmDelete(userId) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success mx-2",
            cancelButton: "btn btn-danger mx-2"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // ลบข้อมูล
            document.getElementById('delete-form-' + userId).submit();

            // แสดง SweetAlert ว่าลบสำเร็จ
            swalWithBootstrapButtons.fire({
                title: "Deleted!",
                text: "Your User has been deleted.",
                icon: "success"
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Your User is safe.",
                icon: "error"
            });
        }
    });
}

</script>
@endsection
