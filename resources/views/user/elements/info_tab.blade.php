<div class="row text-center">

    <div class="col-md-12">
        <img src="<?php echo $user->avatar; ?>" alt="..." class="img-circle user-picture">
    </div>

</div>

<div class="row">

    <div class="col-md-12">
        
        <div class="form-group">
            <label class="control-label">Nick</label>
            <div class="">
                <p class="form-control-static"><?php echo $user->nick_name; ?></p>
            </div>
        </div>
        
    </div>

</div>

<div class="row">

    <div class="col-md-12">
         <div class="form-group">
            <label class="control-label">Name</label>
            <div class="">
                <p class="form-control-static"><?php echo $user->name; ?></p>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-12">
         <div class="form-group">
            <label class="control-label">Email</label>
            <div class="">
                <p class="form-control-static"><?php echo $user->email; ?></p>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-12">
        
        <div class="form-group">
            <label class="control-label" for="working_at">Working at:</label>
            <input type="text" class="form-control" id="working_at" value="<?php echo $user->working_at; ?>">
            <span class="help-block"></span>
        </div>
        
    </div>

</div>

<div class="row">

    <div class="col-md-12">
        
        <div class="form-group">
            <label class="control-label" for="phrase">Phrase:</label>
            <textarea class="form-control" rows="3"><?php echo $user->phrase; ?></textarea>
            <span class="help-block"></span>
        </div>
        
    </div>

</div>

<div class="row">  
    <div class="col-md-6 col-md-offset-3 col-sm-12 ">
        <blockquote>
            <p>
                <?php echo $user->phrase; ?>                
            </p>
        </blockquote>
    </div>

</div>