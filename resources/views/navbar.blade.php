<nav class="navbar navbar-light bg-faded">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="navbar">
        {!! Html::link('/', trans('general.title'), array('class' => 'navbar-brand')) !!}
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item">{!! Html::link('/',            trans('general.home'),     array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! Html::link('/search',      trans('general.search'),   array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/register',    trans('general.register'), array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/login',       trans('general.login'),    array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! Html::link('/about_us',    trans('general.about us'), array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/inbox',       trans('general.inbox'),    array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/profile',     trans('general.profile'),  array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/settings',    trans('general.settings'), array('class' => 'nav-link')) !!}</li>
            <li class="nav-item">{!! HTML::link('/logout',      trans('general.logout'),   array('class' => 'nav-link')) !!}</li>
        </ul>
    </div>
</nav>