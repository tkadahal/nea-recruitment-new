<div id="advertisement-container">
    <div class="application-block bg-primary text-white">
        <div class="row">
            <div class="col-md-3">
                <b>
                    {{ trans('global.advertisement.fields.advertisement_num') }}
                </b>
            </div>
            <div class="col-md-3">
                {{ trans('global.advertisement.fields.category_id') }}
                / {{ trans('global.advertisement.fields.group_id') }}
                / {{ trans('global.advertisement.fields.sub_group_id') }}
            </div>
            <div class="col-md-3">
                {{ trans('global.advertisement.fields.level_id') }}
            </div>
            <div class="col-md-3">
                {{ trans('global.advertisement.fields.qualification_id') }}
            </div>
            <div class="col-md-3 text-center">
                &nbsp;
            </div>
        </div>
    </div>

    @foreach ($advertisements as $key => $advertisement)
    <div class="application-block">
        <div class="row">
            <div class="col-md-3">

                <b>
                    {{ $advertisement->advertisement_num ?? '' }}
                </b>
            </div>

            <div class="col-md-3">

                {{ $advertisement->category->title ?? '' }} /
                {{ $advertisement->group->title ?? '' }} /
                {{ $advertisement->subGroup->title ?? '' }}
            </div>

            <div class="col-md-3">
                {{ $advertisement->level->title ?? '' }}
            </div>

            <div class="col-md-3">
                {{ $advertisement->qualification->title ?? '' }}
            </div>

            <div class="col-md-3 text-center">
                @php
                $userApplied = $advertisement->applications->contains('user_id', $userId);
                @endphp

                @if ($userApplied)
                <h5>
                    <span class="badge bg-primary">
                        Applied
                    </span>
                </h5>
                @else
                <a href="{{ route('application.show', $advertisement->id) }}" class="btn btn-block btn-outline-success">
                    Apply
                </a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
