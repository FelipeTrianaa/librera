<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Book_Category_id') }}
            {{ Form::text('Book_Category_id', $book->Book_Category_id, ['class' => 'form-control' . ($errors->has('Book_Category_id') ? ' is-invalid' : ''), 'placeholder' => 'Book Category Id']) }}
            {!! $errors->first('Book_Category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Book_Name') }}
            {{ Form::text('Book_Name', $book->Book_Name, ['class' => 'form-control' . ($errors->has('Book_Name') ? ' is-invalid' : ''), 'placeholder' => 'Book Name']) }}
            {!! $errors->first('Book_Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>