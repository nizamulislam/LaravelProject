@extends('main')

@section('title', '| Edit Page')




@section('stylesheets')


	{!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')


	<div class="row">

{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT','enctype'=> 'multipart/form-data']) !!}

		<div class="col-md-8">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}


           {{ Form::label('slug', 'Slug:',['class' => 'form-spacing-top']) }}
			{{ Form::text('slug', null, ["class" => 'form-control input-lg']) }}




           {{ Form::label('Category_id', 'Category_id:',['class' => 'form-spacing-top']) }}
			{{ Form::select('category_id',$categories,null,['class'=>'form-control'])}}







           {{ Form::label('tags', 'tags:',['class' => 'form-spacing-top']) }}
			{{ Form::select('tags',$tags,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}



           {{Form::label('featured_img','update Featured Image',['class' => 'form-spacing-top'])}}



           {{Form::file('featured_img')}}

    



          
          {{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}




		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>




@endsection

@section('scripts')


	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}



		<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');



		
	</script>








@endsection
