








        <div class="article">
            <div class="left_fon">
                <a href="{{ route('blog.index', $post->slug) }}">
                    <div class="img_r" style="background-image: url('{{ thumbnail($post->image, 400) }}')"></div>
                </a>
            </div>
            <div class="rigt_content">
                <div class="hesde">
                    <a href="{{ route('blog.index', $post->slug) }}">
                        <div class="title">{{ $post->title }}</div>
                    </a>
                    <div class="extention">
                        {{ $post->intro }}
                    </div>
                </div>
                <div class="look_date">
                    <div class="look">
                        <svg data-v-b0e85714="" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg" class="sw-icon info-counter__icon">
                            <path fill="#456" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                        </svg>
                        <span>{{ $post->views }}</span>
                    </div>
                    <div class="date"> {{ format_date($item->publish_at, 'full_datetime') }}</div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function(){
                setTimeout(() => {
                    var n = $('.avatarka').length;

                    if (n > 0) {
                        $("#hedNerg").remove();
                    }
                }, "1000")
            });
        </script>

