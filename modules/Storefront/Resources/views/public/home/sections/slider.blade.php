<section class="home-section-wrap">
    <div class="container">
        <div class="row">
            <div class="home-section-inner">
                <div class="home-slider-wrap">
                    <div
                        class="home-slider overflow-hidden"
                        data-speed="{{ $slider->speed }}"
                        data-autoplay="{{ $slider->autoplay ? 'true' : 'false' }}"
                        data-autoplay-speed="{{ $slider->autoplay_speed }}"
                        data-fade="{{ $slider->fade ? 'true' : 'false' }}"
                        data-dots="{{ $slider->dots ? 'true' : 'false' }}"
                        data-arrows="{{ $slider->arrows ? 'true' : 'false' }}"
                    >
                        @foreach ($slider->slides as $slide)
                            <div class="slide">
                                @if ($slider->fade)
                                    <img src="{{ $slide->file->path }}" class="slider-image">
                                @else
                                    <img src="{{ $slide->file->path }}" data-animation-in="zoomInImage" class="slider-image animate_animated">
                                @endif

                                <div class="slide-content {{ $slide->isAlignedLeft() ? 'align-left' : 'align-right' }}">
                                    <div class="captions">
                                        <span
                                            class="caption caption-1"
                                            data-animation-in="{{ data_get($slide->options, 'caption_1.effect', 'fadeInRight') }}"
                                            data-delay-in="{{ data_get($slide->options, 'caption_1.delay', '0') }}"
                                        >
                                            {!! $slide->caption_1 !!}
                                        </span>

                                        <span
                                            class="caption caption-2"
                                            data-animation-in="{{ data_get($slide->options, 'caption_2.effect', 'fadeInRight') }}"
                                            data-delay-in="{{ data_get($slide->options, 'caption_2.delay', '0.3') }}"
                                        >
                                            {!! $slide->caption_2 !!}
                                        </span>

                                        @if ($slide->call_to_action_text)
                                            <a
                                                href="{{ $slide->call_to_action_url }}"
                                                class="btn btn-primary btn-slider"
                                                data-animation-in="{{ data_get($slide->options, 'call_to_action.effect', 'fadeInRight') }}"
                                                data-delay-in="{{ data_get($slide->options, 'call_to_action.delay', '0.7') }}"
                                                target="{{ $slide->open_in_new_window ? '_blank' : '_self' }}"
                                            >
                                                {!! $slide->call_to_action_text !!}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- @include('storefront::public.home.sections.slider_banners') --}}
            </div>
        </div>
    </div>
</section>
