<x-backend.layouts.master>
    <x-slot:title>
        Product Create
        </x-slot>
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('Admin') }}">Karma</a></li>
                    <li class="active">Product Create</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('AdminProduct') }}">Back</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                               <form  method="POST" action="{{ route('AdminProduct-store') }}" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="name" class="label-control">Product Name</label>
                                    <input type="text" name="product_name" id="name" class="form-control">
                                </div>
                                <div style="margin-top: 10px">
                                    <label for="amount" class="label-control">Amount</label>
                                    <input type="tel" name="amount" id="amount" class="form-control">
                                </div>
                                <div style="margin-top: 10px">
                                    <label for="price" class="label-control">Price</label>
                                    <input type="tel" name="price" id="price" class="form-control">
                                </div>
                                
                                <div style="margin-top: 10px">
                                    <label for="image" class="label-control">Image</label>
                                    <input type="file" name="images[]" id="image" multiple class="form-control">
                                </div>
                                <div style="margin-top: 10px">
                                    
                                    <input type="checkbox" name="is_active" id="is_active" >
                                    <label for="is_active" class="label-control"> Is Active</label>
                                </div>
                               
                                <div style="margin-top: 20px">
                                    <input type="submit" value="Submit" class="btn btn-warning float-end" >
                                </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
        </div>

        <!-- Start Widget -->
</x-backend.layouts.master>
