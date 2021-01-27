<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>

<div class="container">
    <div class = "row justify-content-center">
        <div class = "col-md-8">
            <div class = "card">
                <div class = "card-header">Import Jobs</div>

                <div class="card-body">
                    @if (session('status'))
                    
                        <div class = "alert alert-success" role = "alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form  method="post" action="{{route('store_job')}}" enctype="multipart/form-data">
                        @csrf
                        <input type = "file" name = "file"/>

                        <button type="submit" class = "btn btn-primary">Upload</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>