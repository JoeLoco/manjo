<div class="row">

    <div class="col-md-8">
        <a href="/">
            <img src="/assets/img/logo.png">
        </a>
    </div>

    <div class="col-md-4 text-center">
        <br>

        <?php if (!Auth::check()): ?>

            <a href="/login" class="btn btn-primary btn-block">
                <i class="fa fa-github-square"></i> Login with github
            </a>
            <h5>If you know about x,y and z, share it here!</h5>

        <?php else: ?>

            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hi, <?php echo Auth::user()->nick_name ?>! <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="/profile/<?php echo Auth::user()->id ?>"><i class="fa fa-search"></i> View profile</a></li>
                    <li><a href="/profile/edit"><i class="fa fa-edit"></i> Edit profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
            </div>

        <?php endif; ?>

    </div>

</div>