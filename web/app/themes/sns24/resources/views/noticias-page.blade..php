@extends('layouts.app')

@section('content')
<h2>Noticias blade</h2>
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
