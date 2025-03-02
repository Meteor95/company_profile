@extends('templatebody')
@section('konten_utama')
<div class="map-layout1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-media">
                    <h2 class="contact-title h3 title-shep">Let’s Get In Touch!</h2>
                    <div class="media-style1">
                        <div class="media-icon"><img src="{{asset('template_v1/img/icon/icon-1-1.png')}}" alt="icon"></div>
                        <div class="media-body">
                            <h3 class="media-title">Tim Jakarta:</h3>
                            <p class="media-info"><a href="tel:+6281945112427">(+62)819-4511-2427 (Agung)</a></p>
                            <p class="media-info"><a href="tel:+6285799663331">(+62)857-9966-3331 (Erfan)</a></p>
                            <h3 class="media-title">Tim Malang:</h3>
                            <p class="media-info"><a href="tel:+6282557808535">(+62)825-5780-8535 (Aries)</a></p>
                            <p class="media-info"><a href="tel:+6282233641442">(+62)822-3364-1442 (Ryan)</a></p>
                        </div>
                    </div>
                    <div class="media-style1">
                        <div class="media-icon"><img src="{{asset('template_v1/img/icon/icon-1-2.png')}}" alt="icon"></div>
                        <div class="media-body">
                            <h3 class="media-title">Email Address:</h3>
                            <p class="media-info"><a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a>
                            </p>
                        </div>
                    </div>
                    <div class="contact-shep">
                        <img src="{{asset('template_v1/img/icon/contact-shep.png')}}" alt="shep">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ratio ratio-21x9" style="height:360px">
    <iframe  title="office location map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0241718589114!2d106.82590461135096!3d-6.2605461937018365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f37d942851e3%3A0xe99ce2e714d0a5!2sPT.SAID%20KRAMA%20YUDHA!5e0!3m2!1sid!2sid!4v1730714088653!5m2!1sid!2sid" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="ratio ratio-21x9" style="height:360px">
    <iframe  title="office location map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.92152344886196!2d112.61731481305765!3d-8.02527226295801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e789da66100823f%3A0x5ccab058e120f91c!2sRumah!5e0!3m2!1sid!2sid!4v1740920472934!5m2!1sid!2sid" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection
@section('css_load')
<link rel="stylesheet" href="{{ asset('template_v1/sass/template/meteor.css') }}">
<style>
.vs-btn{
    border-radius: 20px;
}
.brand-item-oke {
    background-color: white !important;
    padding: 35px 40px;
    border-radius: 20px;
    height: auto;
    max-width: 240px;
    width: 100%;
    text-align: center;
    cursor: pointer;
    margin: auto;
}
.brand-item-oke img {
    transition: all 0.5s ease;
}
</style>
@endsection
@section('js_load')
<script>
$(document).ready(function () {
    $(".price-layout2 .package-style1 .shep-btn svg path").removeAttr("fill");
    $(".package-style1 .shep-btn svg path").attr("fill", "var(--body-bg) !important");
});
</script>
@endsection