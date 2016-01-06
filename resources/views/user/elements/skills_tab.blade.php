<div class="row">  
    <div class="col-md-12">

        
        <?php foreach ($user->skills as $skill): ?>                

            <div class="col-md-6">
                <div class="panel panel-default skill-box">

                    <div class="panel-body text-center" data-toggle="popover" data-placement="bottom" title="<?php echo $skill->name; ?>" data-content="<?php echo $skill->description; ?>">
                        <div>
                            <strong><?php echo $skill->name; ?></strong>                            
                        </div>
                        <div>
                            <small><?php echo($skill->category_name); ?></small>
                        </div>

                        <i class="fa fa-trash-o delete-skill" data-skill-id="<?php echo $skill->id?>"></i>
                        
                    </div>   
                    <div class="panel-footer">

                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <?php if ($skill->pivot->love): ?>
                                    <i class="fa fa-heart skill-love" data-level="<?php echo $skill->pivot->level?>" data-skill-id="<?php echo $skill->id?>"></i>
                                <?php else: ?>
                                    <i class="fa fa-heart-o skill-love" data-level="<?php echo $skill->pivot->level?>" data-skill-id="<?php echo $skill->id?>"></i>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 text-right skill-level-container">
                                <?php for ($count = 1; $count <= 3; $count++): ?>

                                    <?php if($count <= $skill->pivot->level): ?>
                                        <i class="fa fa-star skill-level" data-level="<?php echo $count?>" data-skill-id="<?php echo $skill->id?>"></i>
                                    <?php else: ?>
                                        <i class="fa fa-star-o skill-level" data-level="<?php echo $count?>" data-skill-id="<?php echo $skill->id?>"></i>
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