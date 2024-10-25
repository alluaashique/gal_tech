@extends('layouts.app')
@section('content')
    <div class="row">

        @foreach ($data as $category => $keywords) 
        @php
        \Log::info($keywords);

        $slug = str_replace('&', 'and', $category);
        $slug = \Illuminate\Support\Str::slug($slug);
        $slug =str_replace('-', '_', $slug);
        @endphp
        
            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <div class="actions">
                          

                          <a href="{{ route('quiz.create', $slug) }}" target="_blank">
                            <button type="button" class="history">{{$category}}  </button>
                          </a>
                        </div>
                    </div>
                </div>
            </div>            
        @endforeach


        
        {{ $data->links('layouts.pagination') }}
        {{-- {{ $data->links() }} --}}

        {{-- <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul> --}}



       
    </div>
    

<style>
.card {
  overflow: hidden;
  position: relative;
  text-align: left;
  border-radius: 0.5rem;
  max-width: 290px;
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  background-color: #fff;
}
.header {
  padding: 1.25rem 1rem 1rem 1rem;
}
.content {
  margin-top: 0.75rem;
  text-align: center;
}
.history {
  display: inline-flex;
  padding: 0.5rem 1rem;
  background-color: #1aa06d;
  color: #ffffff;
  font-size: 1rem;
  line-height: 1.5rem;
  font-weight: 500;
  justify-content: center;
  width: 100%;
  border-radius: 0.375rem;
  border: none;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}


@keyframes animate {
  from {
    transform: scale(1);
  }

  to {
    transform: scale(1.09);
  }
}

    </style>
@endsection
