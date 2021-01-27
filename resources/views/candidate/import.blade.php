<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>

<div class="container">
    <div class = "row justify-content-center">
        <div class = "col-md-8">
            <div class = "card">
                <div class = "card-header">Import Candidates</div>

                <div class="card-body">
                    @if (session('status'))
                    
                        <div class = "alert alert-success" role = "alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form  method="post" action="{{route('store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type = "file" name = "file"/>

                        <button type="submit" class = "btn btn-primary">Yep</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($new as $record)
@foreach($record as $r)
<li>{{print 'First Name: '.$r->first_name .'; Last Name: '. $r->last_name.'; Email: '. $r->email.'; Position: '. $r->job_name.
'; Company: '. $r->job_type.'; From: '. $r->date1. '; To: '. $r->date2.'  '}}; </li>
@endforeach
@endforeach
</body>
</html>