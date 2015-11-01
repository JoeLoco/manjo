@extends('layouts.master')

@section('content')

<div class="row">

    <idv class="col-md-12 text-center">
        <img src=" <?php echo $user->avatar; ?>" alt="..." class="img-circle user-picture">
    </idv>

</div>

<div class="row">

    <idv class="col-md-12 text-center">
        <strong><?php echo $user->nick_name; ?></strong>
    </idv>

</div>

<div class="row">

    <idv class="col-md-12 text-center">
        <?php echo $user->name; ?> - 
        <?php echo $user->email; ?>
    </idv>

</div>

<div class="row">

    <idv class="col-md-12 text-center">
        working at <?php echo $user->working_at; ?>
    </idv>

</div>

<div class="row">  
    <div class="col-md-6 col-md-offset-3 col-sm-12 text-center">
        <blockquote>
            <p>
                <?php echo $user->phrase; ?>                
            </p>
        </blockquote>
    </div>

</div>

<div class="row">  
    <div class="col-md-6 col-md-offset-3 col-sm-12 text-center">

        <?php foreach ($user->skills as $skill): ?>                

            <div>
                
                <?php echo $skill->name; ?>
                
                <?php if ($skill->pivot->love): ?>
                    <i class="fa fa-heart"></i>                
                <?php endif; ?>
                    
            </div>
            

            <?php for ($count = 0; $count < $skill->pivot->level; $count++): ?>
                <i class="fa fa-star"></i>
            <?php endfor; ?>



        <?php endforeach; ?>

    </div>
</div>

@stop