<div class="{{$viewClass['form-group']}} {!! !$errors->has($column) ?: 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} col-form-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}" id="{{$id}}">

        @include('backport::form.error')

        @foreach($options as $option => $label)
            @if(!$inline)<div class="checkbox">@endif
            <label @if($inline)class="checkbox-inline"@endif>
                <input type="checkbox" name="{{$name}}[]" value="{{$option}}" class="{{$class}}" {{ in_array($option, (array)old($column, $value)) || ($value === null && in_array($label, $checked)) ?'checked':'' }} {!! $attributes !!} />&nbsp;{{$label}}&nbsp;&nbsp;
            </label>
            @if(!$inline)</div>@endif
        @endforeach

        <input type="hidden" name="{{$name}}[]">

        @include('backport::form.help-block')

    </div>
</div>
