<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('outside_dhaka_enabled', trans('setting::attributes.outside_dhaka_enabled'), trans('setting::settings.tabs.outside_dhaka'), $errors, $settings) }}
        {{ Form::text('translatable[outside_dhaka_label]', trans('setting::attributes.outside_dhaka_label'), $errors, $settings, ['required' => true]) }}
        {{ Form::number('outside_dhaka_cost', trans('setting::attributes.outside_dhaka_cost'), $errors, $settings, ['min' => 0, 'required' => true]) }}
    </div>
</div>
