<label class="{{ $class ?? null }}">
</label>

<div class="form-group">
    {!! Form::select($select, $data ?? []) !!}
</div>