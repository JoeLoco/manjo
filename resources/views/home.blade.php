@extends('layouts.master')

@section('content')


<div class="row">
    
    <div class="col-md-12">
        <input type="text" class="form-control" placeholder="Type skill name for search developers. Example: laravel, node">
    </div>
    
</div>

<div class="row">
    
    <?php for($count=1;$count < 10;$count++): ?>
    
    <div class="user col-md-4">
        
        <div class="row">
            <div class="col-md-4">
                <img src="http://placehold.it/100x100" alt="..." class="img-circle user-picture">                
            </div>
            <div class="col-md-8">
                <div>
                    Name
                </div>
                <div>
                    <span class="label label-default"><i class="fa fa-heart"></i> Laravel</span>
                    <span class="label label-default">Node</span>                    
                </div>
            </div>
        </div>        
        
    </div>

    <?php endfor; ?>

</div>

@stop