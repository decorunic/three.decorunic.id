@extends('layouts.main')

@section('container')
  <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
  <div class="row">
    {{-- <div class="col-12 col-md-12 col-lg-8 mb-3"> --}}
    <div class="col-12 mb-3">
      <div class="card shadow mb-3">
			  <div class="row no-gutters">
			    <div class="col-md-5">
			      <img src="{{ $product['image_url'] }}" class="card-img" alt="{{ $product['name'] }}">
			    </div>
			    <div class="col-md-7">
						<div class="card-body">
							<p class="small">
								@php
										function TimeFormater($time) { return date('h:i, d/m/Y',strtotime($time));}
								@endphp
								Dibuat {{ TimeFormater($product['created_at']) }} &bull; Diperbarui {{ TimeFormater($product['updated_at']) }}
							</p>
			        <h3 class="card-title">
                {{ $product['name'] }}
							</h3>
			        <p class="card-text">
								<div class="row">
									<div class="col-12">
										<nav>
											<div class="nav nav-tabs" id="nav-tab" role="tablist">
												<a class="nav-item nav-link active" id="nav-view-3d-tab" data-toggle="tab" href="#nav-view-3d" role="tab" aria-controls="nav-view-3d" aria-selected="true">3D Model Embed</a>
												<a class="nav-item nav-link" id="nav-view-ar-tab" data-toggle="tab" href="#nav-view-ar" role="tab" aria-controls="nav-view-ar" aria-selected="false">3D Model + AR Embed</a>
											</div>
										</nav>
										<div class="tab-content" id="nav-tabContent">
											<link rel="stylesheet" href="{{ '/vendor/prism/prism.css' }}">
											<div class="tab-pane fade show active" id="nav-view-3d" role="tabpanel" aria-labelledby="nav-view-3d-tab">
												<pre>
													<code class="language-html">&lt;iframe title="lisa" src="{{ URL::to('/products/view-3d/' . $product['id'])}}" frameborder="0" allowfullscreen="allowfullscreen" style="width:100%; height:264px">&lt;/iframe&gt;</code>
												</pre>
											</div>
											<div class="tab-pane fade" id="nav-view-ar" role="tabpanel" aria-labelledby="nav-view-ar-tab">
												<pre>
													<code class="language-html">&lt;iframe title="lisa" src="{{ URL::to('/products/view-ar/' . $product['id'])}}" frameborder="0" allowfullscreen="allowfullscreen" style="width:100%; height:264px">&lt;/iframe&gt;</code>
												</pre>
											</div>
											<script src="{{ '/vendor/prism/prism.js' }}"></script>
										</div>
									</div>
									<div class='col-12'>
										<a href="{{ '/products/edit/'. $product['id'] }}" class="btn btn-warning">
												<i class="fas fa-pencil-alt"></i>
										</a>
										<a href="{{ '/products/delete/'. $product['id'] }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
												<i class="fas fa-trash"></i>
										</a>
									</div>
								</div>
              <p>
			      </div>
			    </div>
			  </div>
			</div>
    </div>
		<div class="col-12">
			<a href="{{ './list' }}" class="btn btn-secondary">&larr; Back</a>
		</div>
	</div>
@endsection
