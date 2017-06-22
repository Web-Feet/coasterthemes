<div class="row contactrow">

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
    </div>

    @if ($form_data->captcha)
        <div class="col-sm-3">
            <div class="form-group {{ FormMessage::get_class('captcha_code') }}">
                <span class="help-block">{{ FormMessage::get_message('captcha_code') }}</span>
                <input class="form-control" id="captcha_code" placeholder="Captcha Code" name="captcha_code" type="text" />
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <img id="captcha" src="/coaster/securimage/securimage_show.php" alt="CAPTCHA Image" />
                <object type="application/x-shockwave-flash" data="/coaster/securimage/securimage_play.swf?audio_file=/securimage/securimage_play.php" width="19" height="19">
                    <param name="movie" value="/coaster/securimage/securimage_play.swf?audio_file=/securimage/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" />
                </object> &nbsp;&nbsp;
                <a href="#" onclick="document.getElementById('captcha').src = '/coaster/securimage/securimage_show.php?' + Math.random(); return false">[ Refresh Captcha ]</a>

            </div>
        </div>
    @endif

    <div class="col-sm-12">
        <input class="btn btn-default" type="submit" value="Submit">
    </div>

</div>