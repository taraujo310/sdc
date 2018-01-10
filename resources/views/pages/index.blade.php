@extends('layouts.application')

@section('conteudo')
    <div class="content">
        @include('layouts.slider')

        <section class="know-sdc row">
            <div class="col-md-6">
                <h2 class="skew-right">CONHEÇA O SDC BRASIL</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae efficitur neque. Nulla auctor commodo velit. Vestibulum in mollis risus. Mauris lacinia ante eget metus tincidunt, sed maximus nunc imperdiet. Nunc ac ligula pulvinar, laoreet leo eu, dignissim eros. Nullam imperdiet, elit in tempor finibus, orci dolor faucibus metus, a luctus enim est at dui. Vivamus ullamcorper placerat ante, in finibus sem rhoncus in. Duis rutrum lacus porttitor ornare tempus. Nunc vel metus sed felis tincidunt condimentum. In ut nibh purus. Aenean hendrerit lorem sollicitudin ornare porttitor. Nullam at elit sit amet nisl iaculis vehicula. Vivamus ac posuere ligula. Aliquam at tortor at lacus vulputate elementum.</p>
            </div>
            <div class="col-md-6">
                <iframe width="535" height="315" src="https://www.youtube.com/embed/FcpuMa38iZI?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>

        <section class="call-to-gallery row">
            <div class="col-md-6">
                <iframe width="535" height="315" src="https://www.youtube.com/embed/FcpuMa38iZI?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h2 class="skew-left">VISUALIZE NOSSA GALERIA</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae efficitur neque. Nulla auctor commodo velit. Vestibulum in mollis risus. Mauris lacinia ante eget metus tincidunt, sed maximus nunc imperdiet. Nunc ac ligula pulvinar, laoreet leo eu, dignissim eros. Nullam imperdiet, elit in tempor finibus, orci dolor faucibus metus, a luctus enim est at dui. Vivamus ullamcorper placerat ante, in finibus sem rhoncus in. Duis rutrum lacus porttitor ornare tempus. Nunc vel metus sed felis tincidunt condimentum. In ut nibh purus. Aenean hendrerit lorem sollicitudin ornare porttitor. Nullam at elit sit amet nisl iaculis vehicula. Vivamus ac posuere ligula. Aliquam at tortor at lacus vulputate elementum.</p>
            </div>
        </section>

        @include('layouts.features-menu')
    </div>
@stop
