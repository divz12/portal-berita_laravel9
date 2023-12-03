@extends('layouts.master')

@section('content')
<div class="container paddding">
    <div class="row mx-0">
        <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
    <div>
        <div class="fh5co_headingfh5co_heading_border_bottom py-2 mb-4">News</div>
    </div>
    @forelse ($news as $item)
    <div class="row pb-4">
        <div class="col-md-5">
            <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="{{asset('/uploads/'.$item->thumbnail)}}" alt=""/></div>
            <div></div>
        </div>
    </div>
    <div class="col-md-7 animate-box">
    <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis nostrud quis xercitation ullamco. </a> Thomson Smith - April 18,2016
    <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
    </div>
</div>
</div>
@empty
<h3>Tidak Ada Berita</h3>
@endforelse

</div>
<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
    <div>
        <div class="fh5co_headingfh5co_heading_border_bottom py-2 mb-4">Kategory</div>
    </div>
    <div class="clearfix"></div>
    <div class="fh5co_tags_all">
        @forelse ($categories as $item)
        <a href="#" class="fh5co_tagg">{{$item->name}}</a>
        @empty
        <a href="">Tidak Ada Kategori</a>
        @endforelse
    </dunuiv>
</div>
</div>
<div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
    <div class="col-12 text-center pb-4 pt-4">
        {{ $news->links() }}
    </div>
</div>
<div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
    <div class="col-12 text-center pb-4 pt-4">
        <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
        <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
        </div>
    </div>
</div>
@endsection
