{!! PageBuilder::section('head') !!}

<section id="second">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>{!! PageBuilder::block('title') !!}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="pull-right">
                    {!! PageBuilder::block('image', ['width' => 400, 'class' => 'img-responsive']) !!}
                </div>
                {!! PageBuilder::block('content') !!}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.second -->

{!! PageBuilder::section('footer') !!}
