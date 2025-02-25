<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

    @extends('layouts.default_with_menu')

    @section('content')
        <form action="{{ url('/product') }}" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col-6">
                    <label>Category Name</label>
                    <input name="category_name" type="text" class="form-control" />
                </div>
            </div>
            <button class="btn btn-primary mt-3" id="btn-add-product-list" type="button"> + เพิ่ม Product</button>
            <div class="row mt-3" id="product-list">
                <div class="col-6">
                    <label>Product Name <button type="button" class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
                    <input name="product_name[]" type="text" class="form-control" />
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-3 mb-3">บันทึก</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Category Name</td>
                    <td>Product Name</td>
                    <td>User Name</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Category name</td>
                    <td>
                        <ul>
                            <li>Product 01.</li>
                            <li>Product 02.</li>
                        </ul>
                    </td>
                    <td>User name</td>
                </tr>
        </table>
    @endsection

    @section('scripts')
    <script>
        $(document).ready(function(){
            $('#btn-add-product-list').on('click', function(){
                $('#product-list').append(
                    `<div class="col-6">
                        <label>Product Name <button type="button"
                                                class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
                        <input name="product_name[]" type="text" class="form-control" />
                    </div>`);
            });

            $(document).on('click','.btn-del-product-list', function(){
                $(this).closest('.col-6').remove();
            });
        });
    </script>
    @endsection
</body>
</html>
