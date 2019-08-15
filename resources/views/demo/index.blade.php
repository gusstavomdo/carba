@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
		        <div class="card">
		            <input type="checkbox" id="card1" class="more" aria-hidden="true">
		            <div class="content">
		                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80')">
		                    <div class="inner">
		                        <h2>Cozy apartment</h2>
		                        <div class="rating">
		                            <i class="fas fa-star"></i>
		                            <i class="fas fa-star"></i>
		                            <i class="fas fa-star"></i>
		                            <i class="fas fa-star"></i>
		                            <i class="far fa-star"></i>
		                        </div>
		                        <label for="card1" class="button" aria-hidden="true">
		                            Details
		                        </label>
		                    </div>
		                </div>
		                <div class="back">
		                    <div class="inner">
		                        <div class="info">
		                            <span>5</span>
		                            <div class="icon">
		                                <i class="fas fa-users"></i>
		                                <span>people</span>
		                            </div>
		                        </div>
		                        <div class="info">
		                            <span>4</span>
		                            <div class="icon">
		                                <i class="fas fa-door-open"></i>
		                                <span>rooms</span>
		                            </div>
		                        </div>
		                        <div class="info">
		                            <span>3</span>
		                            <div class="icon">
		                                <i class="fas fa-bed"></i>
		                                <span>beds</span>
		                            </div>
		                        </div>
		                        <div class="info">
		                            <span>1</span>
		                            <div class="icon">
		                                <i class="fas fa-bath"></i>
		                                <span>bath</span>
		                            </div>
		                        </div>
		                        <div class="description">
		                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
		                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates earum nostrum ipsam
		                                ullam, reiciendis nam consectetur? Doloribus voluptate architecto possimus perferendis
		                                tenetur nemo amet temporibus, enim soluta nam, debitis.</p>
		                        </div>
		                        <div class="location">Warsaw, Poland</div>
		                        <div class="price">38€ / day</div>
		                        <label for="card1" class="button return" aria-hidden="true">
		                            <i class="fas fa-arrow-left"></i>
		                        </label>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			<div class="col">
				<div class="card">
			            <input type="checkbox" id="card2" class="more">
			            <div class="content">
			                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c02fb96f9cfc16d3649835b75d1b2033&auto=format&fit=crop&w=1350&q=80')">
			                    <div class="inner">
			                        <h2>Modern flat</h2>
			                        <div class="rating">
			                            <i class="fas fa-star"></i>
			                            <i class="fas fa-star"></i>
			                            <i class="fas fa-star"></i>
			                            <i class="fas fa-star-half-alt"></i>
			                            <i class="far fa-star"></i>
			                        </div>
			                        <label for="card2" class="button" aria-hidden="true">
			                            Details
			                        </label>
			                    </div>
			                </div>
			                <div class="back">
			                    <div class="inner">
			                        <div class="info">
			                            <span>4</span>
			                            <div class="icon">
			                                <i class="fas fa-users"></i>
			                                <span>people</span>
			                            </div>
			                        </div>
			                        <div class="info">
			                            <span>3</span>
			                            <div class="icon">
			                                <i class="fas fa-door-open"></i>
			                                <span>rooms</span>
			                            </div>
			                        </div>
			                        <div class="info">
			                            <span>2</span>
			                            <div class="icon">
			                                <i class="fas fa-bed"></i>
			                                <span>beds</span>
			                            </div>
			                        </div>
			                        <div class="info">
			                            <span>1</span>
			                            <div class="icon">
			                                <i class="fas fa-bath"></i>
			                                <span>bath</span>
			                            </div>
			                        </div>
			                        <div class="description">
			                            <p>
			                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem unde ea voluptas
			                                fuga
			                                odio vel veniam eveniet, explicabo autem earum?</p>
			                            <ul>
			                                <li>Lorem ipsum dolor sit amet.</li>
			                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
			                                <li>Lorem ipsum dolor sit amet consectetur.</li>
			                                <li>Lorem ipsum dolor sit amet.</li>
			                            </ul>
			                        </div>
			                        <div class="location">Warsaw, Poland</div>
			                        <div class="price">42€ / day</div>
			                        <label for="card2" class="button return" aria-hidden="true">
			                            <i class="fas fa-arrow-left"></i>
			                        </label>
			                    </div>
			                </div>
			            </div>
			    </div>
			</div>
			<div class="col">
				<div class="card">
			            <input type="checkbox" id="card3" class="more">
			            <div class="content">
			                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1529595354331-201ad3ae5e71?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6114533e2d0c1c81534fe13611dbfd76&auto=format&fit=crop&w=658&q=80')">
			                    <div class="inner">
			                        <h2>Luxury property</h2>
			                        <div class="rating">
			                            <i class="fas fa-star"></i>
			                            <i class="fas fa-star"></i>
			                            <i class="fas fa-star"></i>
			                            <i class="fas fa-star"></i>
			                            <i class="fas fa-star"></i>
			                        </div>
			                        <label for="card3" class="button" aria-hidden="true">
			                            Details
			                        </label>
			                    </div>
			                </div>
			                <div class="back">
			                    <div class="inner">
			                        <div class="info">
			                            <span>8</span>
			                            <div class="icon">
			                                <i class="fas fa-users"></i>
			                                <span>people</span>
			                            </div>
			                        </div>
			                        <div class="info">
			                            <span>7</span>
			                            <div class="icon">
			                                <i class="fas fa-door-open"></i>
			                                <span>rooms</span>
			                            </div>
			                        </div>
			                        <div class="info">
			                            <span>5</span>
			                            <div class="icon">
			                                <i class="fas fa-bed"></i>
			                                <span>beds</span>
			                            </div>
			                        </div>
			                        <div class="info">
			                            <span>2</span>
			                            <div class="icon">
			                                <i class="fas fa-bath"></i>
			                                <span>baths</span>
			                            </div>
			                        </div>
			                        <div class="description">
			                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa libero
			                                totam nostrum consequatur autem quae provident quos alias fugit maxime nisi labore,
			                                temporibus tempore illo natus voluptates aliquam ipsum officia quasi placeat aut
			                                facilis
			                                laudantium nam!</p>
			                            <p>Quam, iusto.Neque ratione ut deserunt unde dicta nesciunt,
			                                repudiandae
			                                aspernatur explicabo numquam! Tenetur!</p>
			                        </div>
			                        <div class="location">Cracow, Poland</div>
			                        <div class="price">60€ / day</div>
			                        <label for="card3" class="button return" aria-hidden="true">
			                            <i class="fas fa-arrow-left"></i>
			                        </label>
			                    </div>
			                </div>
			            </div>
			    </div>
			</div>
		</div>
	</div>
@endsection