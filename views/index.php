<div>
    <ul class="uk-breadcrumb">
        <li class="uk-active"><span>@lang('Deploy Site')</span></li>
    </ul>
</div>

<div riot-view>

    <div>

        <div class="uk-width-medium-1-1 uk-viewport-height-1-3 uk-container-center uk-text-center uk-flex uk-flex-middle uk-flex-center" if="{ !App.Utils.count(forms) }">

            <div class="uk-animation-scale">

                <p>
                    <img class="uk-svg-adjust uk-text-muted" src="@url('assets:app/media/icons/paperplane.svg')" width="80" height="80" alt="Forms" data-uk-svg />
                </p>
                <hr>
                <span class="uk-text-large"><a href="@route('/githubwebhook/deploy')">@lang('Publish Site')</a></span>

            </div>

        </div>

    </div>

</div>
