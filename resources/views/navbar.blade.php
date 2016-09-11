<nav class="navbar navbar-light bg-faded">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="navbar">
        <a class="navbar-brand" href="#">THE TEACH AND LEARN</a>

        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item">{!! Html::link('/',            'Home',     array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! Html::link('/search',      'Search',   array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/sign_up',     'Sign Up',  array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/login',       'Login',    array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! Html::link('/about_us',    'About Us', array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/messages',    'Messages', array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/profile',     'Profile',  array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/settings',    'Settings', array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/logout',      'Logout',   array('class' => 'nav-link')) !!}</li>
        </ul>
    </div>
</nav>