@extends('layouts.master')

@section('content')


<div class="row">

    <div class="col-md-6 col-md-offset-3">
        <input type="text" class="form-control" id="search-users" placeholder="Type skill name for search developers. Example: laravel, node">
    </div>

</div>

<div class="row">

    <?php foreach ($users as $user): ?>

        <div class="col-md-4">

            <div class="user-box panel panel-default">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="/profile/<?php echo $user->id; ?>">
                                <img src="<?php echo $user->avatar; ?>" alt="..." class="img-circle avatar">                                                
                            </a>
                        </div>
                        <div class="col-md-8">
                            <?php echo $user->nick_name; ?>
                        </div>
                    </div>        
                </div>

            </div>

        </div>


    <?php endforeach; ?>

</div>

@stop