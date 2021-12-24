<x-app-layout>

    <x-slot name="title">
        - صفحه پست {{ $post->title }}
    </x-slot>
    
    <main>
        <div class="container article">
            <article class="single-page">
                <div class="breadcrumb">
                    <ul class="breadcrumb__ul">
                        <li class="breadcrumb__item">
                        <a href="{{ route('landing') }}" class="breadcrumb__link">
                        بخش مقالات
                        </a>
                        </li>
                        <li class="breadcrumb__item">
                        <a href="{{ route('post.show', $post->slug) }}" class="breadcrumb__link">
                        {{ $post->title }}
                        ‌</a></li>
                    </ul>
                </div>
                <div class="single-page__title">
                    <h1 class="single-page__h1">{{ $post->title }}</h1>
                    <span class="single-page__like"></span>
                </div>
                <div class="single-page__details">
                    <div class="single-page__author">نویسنده : {{ $post->user->name }}</div>
                    <div class="single-page__date">تاریخ : {{ $post->getCreatedAtInJalali() }}</div>
                </div>
                <div class="single-page__img">
                    <img class="single-page__img-src" src="{{ $post->getBannerUrl() }}" alt="">
                </div>
                <div class="single-page__content">
                    {!! $post->content !!}
                </div>
                <div class="single-page__tags">
                    <ul class="single-page__tags-ul">
                        @foreach($post->categories as $category)
                        <li class="single-page__tags-li"><a href="" class="single-page__tags-link">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
    
            </article>
        </div>
        <div class="container">
            <div class="comments" id="comments">
                <div class="comments__send">
                    <div class="comments__title">
                        <h3 class="comments__h3"> دیدگاه خود را بنویسید </h3>
                        <span class="comments__count">  نظرات ( 160 ) </span>
                    </div>
                    <textarea class="comments__textarea" placeholder="بنویسید"></textarea>
                    <button class="btn btn--blue btn--shadow-blue">ارسال نظر</button>
                    <button class="btn btn--red btn--shadow-red">انصراف</button>
                </div>
                <div class="comments__list">
                    @foreach($post->comments as $comment)
                        @include('comments.comment', ['comment' => $comment])
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    </x-app-layout>