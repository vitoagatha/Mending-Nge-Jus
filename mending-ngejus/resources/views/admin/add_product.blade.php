<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-content: center;
            margin-top: 60px;
        }

        label
        {
            display: inline-block;
            width: 250px;
            font-size: 18px !important;
            color: white !important;
        }

        /* input[type='text']
        {
            width: 350px;
            height: 50px;
        }

        textarea
        {
            width: 450px;
            height: 80px;
        }

        .input_deg
        {
            padding: 15px;
        } */

    </style>
  </head>
  <body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">

       @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 class="text-white">Add Product</h1>

            <div class="div_deg">
                <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Product Title</label>
                        <input type="text" name="title" id="" required>
                    </div>

                    <div>
                        <label for="">Description</label>
                        <textarea name="description"required></textarea>
                    </div>

                    <div>
                        <label for="">Price</label>
                        <input type="text" name="price" id="" required>
                    </div>

                    <div>
                        <label for="">Quantity</label>
                        <input type="text" name="qty" id="" required>
                    </div>

                    <div>
                        <label for="">Product Category</label>
                        <select name="category" id="" required>
                            <option value="">Select Option</option>

                            @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="">Product Image</label>
                        <input type="file" name="image" id="" required>
                    </div>

                    <div>
                        <input class="btn btn-success" type="submit" value="Add Product" id="">
                    </div>
                </form>
            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>