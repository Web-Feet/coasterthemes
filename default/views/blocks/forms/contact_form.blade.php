<div class="row">

    <div class="col-sm-12">
        <h3>{{ PageBuilder::block('contact_form_text') }}</h3>
    </div>

    <div class="col-sm-6">
        <div class="form-group {{ FormMessage::get_class('name') }}">
            <span class="help-block">{{ FormMessage::get_message('name') }}</span>
            <input class="form-control" id="name" placeholder="Your name" name="name" type="text" />
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group {{ FormMessage::get_class('email') }}">
            <span class="help-block">{{ FormMessage::get_message('email') }}</span>
            <input class="form-control" id="email" placeholder="Your email" name="email" type="text" />
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group {{ FormMessage::get_class('message') }}">
            <span class="help-block">{{ FormMessage::get_message('message') }}</span>
            <textarea rows="3" class="form-control" id="message" placeholder="Your message" name="message" cols="50"></textarea>
        </div>
        <input class="btn btn-default" type="submit" value="Submit">
    </div>

</div>