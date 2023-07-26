<div class="wizard">
    <div class="wizard-inner">
        <div class="connecting-line"></div>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="{{ request()->routeIs('personal') ? 'active' : '' }}">
                <a href="{{ route('personal') }}" data-toggle="tab" aria-controls="step1" role="tab"
                    aria-expanded="{{ request()->routeIs('personal') ? 'true' : 'false' }}">
                    <span class="round-tab">1</span>
                    <i>
                        {{ trans('global.personal.title_singular') }}
                    </i>
                </a>
            </li>
            <li role="presentation" class="{{ request()->routeIs('contact') ? 'active' : 'disabled' }}">
                <a href="{{ route('contact') }}" data-toggle="tab" aria-controls="step2" role="tab"
                    aria-expanded="{{ request()->routeIs('contact') ? 'true' : 'false' }}">
                    <span class="round-tab">2</span>
                    <i>
                        {{ trans('global.contact.title_singular') }}
                    </i>
                </a>
            </li>
            <li role="presentation" class="{{ request()->routeIs('education.*') ? 'active' : 'disabled' }}">
                <a href="{{ route('education.index') }}" data-toggle="tab" aria-controls="step3" role="tab"
                    aria-expanded="{{ request()->routeIs('education') ? 'true' : 'false' }}">
                    <span class="round-tab">3</span>
                    <i>
                        {{ trans('global.education.title_singular') }}
                    </i>
                </a>
            </li>
            <li role="presentation" class="{{ request()->routeIs('training.*') ? 'active' : 'disabled' }}">
                <a href="{{ route('training.index') }}" data-toggle="tab" aria-controls="step4" role="tab"
                    aria-expanded="{{ request()->routeIs('training') ? 'true' : 'false' }}">
                    <span class="round-tab">4</span>
                    <i>
                        {{ trans('global.training.title_singular') }}
                    </i>
                </a>
            </li>
            <li role="presentation" class="{{ request()->routeIs('experience.*') ? 'active' : 'disabled' }}">
                <a href="{{ route('experience.index') }}" data-toggle="tab" aria-controls="step5" role="tab"
                    aria-expanded="{{ request()->routeIs('experience') ? 'true' : 'false' }}">
                    <span class="round-tab">5</span>
                    <i>
                        {{ trans('global.experience.title_singular') }}
                    </i>
                </a>
            </li>
            <li role="presentation" class="{{ request()->routeIs('upload') ? 'active' : 'disabled' }}">
                <a href="{{ route('upload') }}" data-toggle="tab" aria-controls="step6" role="tab"
                    aria-expanded="{{ request()->routeIs('upload') ? 'true' : 'false' }}">
                    <span class="round-tab">6</span>
                    <i>
                        {{ trans('global.personal.category.fields.uploads') }}
                    </i>
                </a>
            </li>
            <li role="presentation" class="{{ request()->routeIs('application.*') ? 'active' : 'disabled' }}">
                <a href="{{ route('application.index') }}" data-toggle="tab" aria-controls="step7" role="tab"
                    aria-expanded="{{ request()->routeIs('application.*') ? 'true' : 'false' }}">
                    <span class="round-tab">7</span>
                    <i>
                        {{ trans('global.application.title_singular') }}
                    </i>
                </a>
            </li>
            <li role="presentation" class="{{ request()->routeIs('payment.*') ? 'active' : 'disabled' }}">
                <a href="{{ route('payment.index') }}" data-toggle="tab" aria-controls="step8" role="tab"
                    aria-expanded="{{ request()->routeIs('payment.*') ? 'true' : 'false' }}">
                    <span class="round-tab">8</span>
                    <i>
                        {{ trans('global.payment.title_singular') }}
                    </i>
                </a>
            </li>
        </ul>
    </div>
</div>
