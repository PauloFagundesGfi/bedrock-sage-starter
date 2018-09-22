@extends('layouts.app')

@section('content')

<h3>Seré este o detalhe de uma notícia??? Single? é mesmo!</h3>
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
