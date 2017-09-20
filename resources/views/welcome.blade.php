@extends('layouts.app')

@section('content')


    
        <h1 class="title is-1 has-text-centered">New main page</h1>

 <template>
  <md-card>

    <md-card-media>
      <!-- swiper -->
      <swiper :options="swiperOption">
        <swiper-slide><img class="is-centred" src="{{ asset('images/food.jpg') }}" alt=""></swiper-slide>
        <swiper-slide><img src="{{ asset('images/fitness.jpg') }}" alt=""></swiper-slide>
        <swiper-slide><img src="{{ asset('images/motivation.jpg') }}" alt=""></swiper-slide>
       
        {{-- <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div> --}}
      </swiper>
    </md-card-media>
  </md-card>
</template>

  <div class="tile is-ancestor">
  <div class="tile is-parent">
    <article class="tile is-child box">
      <img src="https://dummyimage.com/660x200/9e999e/fff" alt="">
      <p class="title is-3"> Title One</p>
      <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda doloribus minima nam quos amet expedita quidem cum, maiores culpa sint ipsum distinctio numquam consequuntur atque vitae autem, eum suscipit nihil.</p>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
      <img src="https://dummyimage.com/660x200/9e999e/fff" alt="">
      <p class="title is-3">Title Two</p>
      <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum exercitationem officia maiores nemo. Numquam facilis alias culpa eligendi eos, veniam nemo tempora! Architecto laudantium harum, vel debitis qui fugiat quo.</p>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
      <img src="https://dummyimage.com/660x200/9e999e/fff" alt="">
      <p class="title is-3">Title Three</p>
      <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo esse nostrum temporibus eum. Suscipit officiis, minima maiores quod, aspernatur reprehenderit porro totam, quidem in explicabo ex quos impedit ipsum, optio!</p>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
      <img src="https://dummyimage.com/660x200/9e999e/fff" alt="">
      <p class="title is-3">Title Four</p>
      <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eius ipsa sunt non? Molestiae harum similique explicabo, maxime eaque aliquam dolores fuga. Quae veritatis delectus saepe molestiae voluptatum, nemo totam!</p>
    </article>
  </div>
</div>

<div class="tile is-ancestor">
  <div class="tile is-vertical is-9">
    <div class="tile">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title is-3">Title Five</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
          </div>
        </article>
      </div>
      <div class="tile is-8 is-vertical">
        <div class="tile">
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title is-3">Title Six</p>
              <p class="subtitle">Subtitle</p>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title is-3">Title Seven</p>
              <p class="subtitle">Subtitle</p>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child box">
            <p class="title is-3">Title Eight</p>
            <p class="subtitle">Subtitle</p>
          </article>
        </div>
      </div>
    </div>
    <div class="tile">
      <div class="tile is-8 is-parent">
        <article class="tile is-child box">
          <p class="title is-3">Title Nine</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title is-3">Title Ten</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
      <div class="content">
        <p class="title is-3">Title Eleven</p>
        <p class="subtitle">Subtitle</p>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
          <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
        </div>
      </div>
    </article>
  </div>
</div>

<div class="tile is-ancestor">
  <div class="tile is-parent">
    <article class="tile is-child box">
      <p class="title is-3">Twelve</p>
      <p class="subtitle">Subtitle</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
      </div>
    </article>
  </div>
  <div class="tile is-parent is-6">
    <article class="tile is-child box">
      <p class="title is-3">Thirteen</p>
      <p class="subtitle">Subtitle</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
      </div>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
      <p class="title is-3">Fourteen</p>
      <p class="subtitle">Subtitle</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
      </div>
    </article>
  </div>
</div>



@endsection
@section('scripts')
<script>
  export default {
  	data() {
  	  return {
    		swiperOption: {
    		  pagination: '.swiper-pagination',
          
          paginationClickable: false,
          spaceBetween: 30,
          centeredSlides: true,
          slidesPerView: 1,
          autoplay: 3000,
          autoplayDisableOnInteraction: false,
          loop:true
    		}
  	  }
  	}
  }
</script>
@endsection