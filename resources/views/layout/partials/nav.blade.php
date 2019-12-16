<nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg" role="navigation">
    <a class="navbar-brand" href="<?php echo route('home'); ?>">RoadMap</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
    <div class="collapse navbar-collapse" id="navbar-collapse-01">
        <ul class="nav navbar-nav mr-auto">
            <li><a href="<?php echo route('post.index'); ?>">Posts</a></li>
            <li><a href="<?php echo route('post.create'); ?>">New post</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>