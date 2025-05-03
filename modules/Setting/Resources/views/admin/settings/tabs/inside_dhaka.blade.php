<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('inside_dhaka_enabled', trans('setting::attributes.inside_dhaka_enabled'), trans('setting::settings.tabs.inside_dhaka'), $errors, $settings) }}
        {{ Form::text('translatable[inside_dhaka_label]', trans('setting::attributes.inside_dhaka_label'), $errors, $settings, ['required' => true]) }}
        {{ Form::number('inside_dhaka_cost', trans('setting::attributes.inside_dhaka_cost'), $errors, $settings, ['min' => 0, 'required' => true]) }}
    </div>
</div>