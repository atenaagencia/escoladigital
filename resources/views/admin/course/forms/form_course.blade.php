@inject('categories', 'App\Models\Category')

@php
$category = $categories->pluck('title', 'id')->all();
@endphp

{!! Form::open(['route' => 'course.store']) !!}
    <div class="form-group">
        {!! Form::label('', 'Categoria', ['']) !!}
        {!! Form::select('category_id', $category = Arr::prepend($category, '----', ''),'', ['class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
       {!! Form::label('', 'Título', ['']) !!}
        {!! Form::text('title', '', ['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', 'Descrição 1 (O que vou aprender neste curso?)', ['']) !!}
        {!! Form::textarea('description', '', ['class'=>'form-control', 'rows'=>'3','required','required','']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', 'Descrição 2 (Conteúdo do curso)', ['']) !!}
        {!! Form::textarea('resume', '', ['class'=>'form-control', 'rows'=>'3','required','']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('', 'Descrição 3 (O que preciso saber antes de começar)', ['']) !!}
        {!! Form::textarea('requirements', '', ['class'=>'form-control', 'rows'=>'3','required', '']) !!}
        {!! Form::hidden('image','não tem', ['']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cadastrar', ['class'=>['btn','btn-success','main-font','col-lg-3 ','float-right','py-2']]) !!}
    </div>



{!! Form::close() !!}