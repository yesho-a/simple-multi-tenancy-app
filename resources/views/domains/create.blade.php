
<div class="container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <div class="container" style="padding: 1rem;">
                        <div class="row">
                          <div class="col mr-5 ml-5">
                            <h1> <strong>Add Domain</strong></h1>
                            
{!! Form::open(['action'=>'App\Http\Controllers\DomainsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">

   {{Form::label('Domain','Tenant Name')}}
   {{Form::text('tenant_id','',['class'=>'form-control','placeholder'=>'name'])}}


</div>
<div class="form-group">

    {{Form::label('Domain','Domain Name')}}
    {{Form::text('domain','',['class'=>'form-control','placeholder'=>'name'])}}

</div>



{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!}

</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>