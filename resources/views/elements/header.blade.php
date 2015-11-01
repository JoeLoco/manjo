<div class="row">
    
    <div class="col-md-8">
        <h1 class="pull-left">Manjo - A skill profile for developers</h1>
    </div>
    
    <div class="col-md-4 text-center">
        <br>
        
        <?php if(!Auth::check()):?>
        
        <a href="/login" class="btn btn-primary btn-block">
            <i class="fa fa-github-square"></i> Login with github
        </a>
        <h5>If you know about x,y and z, share it here!</h5>
        
        <?php else:?>
        
        <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hi, <?php echo Auth::user()->name ?>! <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="/profile/edit"><i class="fa fa-edit"></i> Edit profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
        </div>
        
        <?php endif;?>
   
    </div>
    
</div>