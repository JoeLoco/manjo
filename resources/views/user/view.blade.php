@extends('layouts.master')

@section('content')

<div class="row">

    <idv class="col-md-12 text-center">
        <img src=" <?php echo $user->avatar; ?>" alt="..." class="img-circle user-picture">
    </idv>

</div>

<div class="row">

    <idv class="col-md-12 text-center">
        <h3><?php echo $user->nick_name; ?></h3>
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
    <div class="col-md-8 col-sm-9 col-md-offset-2">

        <?php foreach ($user->skills as $skill): ?>                

            <div class="col-md-6">
                <div class="panel panel-default skill-box-readonly">

                    <div class="panel-body text-center" data-toggle="popover" data-placement="bottom" title="<?php echo $skill->name; ?>" data-content="<?php echo $skill->description; ?>">
                        <div>
                            <strong><?php echo $skill->name; ?></strong>                            
                        </div>
                        <div>
                            <small><?php echo($skill->category_name); ?></small>
                        </div>
                    </div>   
                    <div class="panel-footer">

                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <?php if ($skill->pivot->love): ?>
                                    <i class="fa fa-heart" data-level="<?php echo $skill->pivot->level ?>" data-skill-id="<?php echo $skill->id ?>"></i>
                                <?php else: ?>
                                    <i class="fa fa-heart-o" data-level="<?php echo $skill->pivot->level ?>" data-skill-id="<?php echo $skill->id ?>"></i>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 text-right skill-level-container">
                                <?php for ($count = 1; $count <= 3; $count++): ?>

                                    <?php if ($count <= $skill->pivot->level): ?>
                                        <i class="fa fa-star" data-level="<?php echo $count ?>" data-skill-id="<?php echo $skill->id ?>"></i>
                                    <?php else: ?>
                                        <i class="fa fa-star-o" data-level="<?php echo $count ?>" data-skill-id="<?php echo $skill->id ?>"></i>
                                    <?php endif; ?>

                                <?php endfor; ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>

@stop