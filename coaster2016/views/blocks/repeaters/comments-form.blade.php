<div class="row contactrow">

    <div class="col-sm-12">
        <h3>Leave a comment:</h3>
    </div>

    <div class="col-sm-12">
        <div class="form-group {{ FormMessage::getErrorClass('comment_author') }}">
            <span class="help-block">{{ FormMessage::getErrorMessage('comment_author') }}</span>
            <input class="form-control" id="comment_author" placeholder="Your name" name="comment_author" type="text" />
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group {{ FormMessage::getErrorClass('comment_content') }}">
            <span class="help-block">{{ FormMessage::getErrorMessage('comment_content') }}</span>
            <textarea rows="3" class="form-control" id="comment_content" placeholder="Your message" name="comment_content" cols="50"></textarea>
        </div>
    </div>

    {!! Form::hidden('comment_date') !!}

    <div class="col-sm-12">
        <input class="btn btn-default" type="submit" value="Submit">
    </div>

</div>