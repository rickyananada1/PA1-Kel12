<div class="section bg-light">




    <h2 class="heading mb-5 text-center">Beberapa Testimoni</span>

            </span>
        </div>
    </div>

    <div class="wide-slider-testimonial-wrap">
        <div class="wide-slider-testimonial">
            @foreach ($testimonies as $testimony)
                
            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="@if ($testimony->contributor && $testimony->contributor->image) 
                        {{ Storage::url($testimony->contributor->image) }}
                    @else
                    {{ asset('Template/dist/img/profile.jpeg') }} @endif"
                            alt="Free template by TemplateUX">
                        <h3>{{ $testimony->contributor->name}}</h3>
                        <p class="position mb-5">Contributor</p>
                    </div>
                    <p>
                    <div class="quote">&ldquo;</div>
                    &ldquo;{{ $testimony->description}}&rdquo;</p>
                </blockquote>
            </div>
            @endforeach

            
        </div>
    </div>



</div> <!-- /.untree_co-section -->