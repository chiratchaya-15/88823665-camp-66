@extends('layouts.default_with_menu')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="mb-12 card">
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
              @foreach ($users as $index => $user)
              <tr class="align-middle">
                <td>{{ $index+1 }}.</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a href="{{ url('/user/'.$user->id)}}">
                    <button class="btn btn-warning">Edit</button>
                  </a>
                  <form action="{{ url('/user') }}" method="post" class="delete-form" style="display: inline;">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <button type="button" class="btn btn-danger delete-btn" data-id="{{ $user->id }}">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="clearfix card-footer">
          <ul class="m-0 pagination pagination-sm float-end">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            const form = this.closest("form"); // ดึง form ที่ใกล้ที่สุด
            const userId = this.getAttribute("data-id");

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // ส่งฟอร์มลบข้อมูล
                }
            });
        });
    });
});
</script>
@endsection